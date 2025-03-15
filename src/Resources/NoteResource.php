<?php

namespace Gokulsingh\QuickNote\Resources;

use Doctrine\DBAL\Schema\Table;
use Filament\Resources\Resource;
use Gokulsingh\QuickNote\Resources\NoteResource\Pages;
use Filament\Tables;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Gokulsingh\QuickNote\Models\Note;
use Gokulsingh\QuickNote\Models\NoteCategory;

class NoteResource extends Resource
{
    protected static ?string $model = \Gokulsingh\QuickNote\Models\Note::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Quick Notes';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Section::make('Note Details')
                ->schema([
                    Forms\Components\TextInput::make('title')->required(),
                    Forms\Components\Textarea::make('description')->required(),
                    Forms\Components\Select::make('note_category_id')
                        ->relationship('notecategory', 'name')
                        ->searchable()
                        ->preload()
                        ->createOptionForm([
                            Forms\Components\TextInput::make('name')
                                ->required(),
                            Forms\Components\TextArea::make('description')
                                ->required(),
                            Forms\Components\FileUpload::make('image')->image()->directory('quick-notes/images'),
                        ])
                        ->required(),
                    Forms\Components\FileUpload::make('image')->image()->directory('quick-notes/images'),
                ])->columns(3),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->limit(50),
            Tables\Columns\TextColumn::make('notecategory.name')->limit(50),
            Tables\Columns\TextColumn::make('description')->limit(500),
            // Tables\Columns\ImageColumn::make('image')->image()->size(50),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNotes::route('/'),
            'create' => Pages\CreateNote::route('/create'),
            'edit' => Pages\EditNote::route('/{record}/edit'),
        ];
    }
}
