<?php

namespace Gokulsingh\QuickNote\Resources;

use Filament\Resources\Resource;
use Gokulsingh\QuickNote\Resources\NoteCategoryResource\Pages;
use Filament\Tables;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Gokulsingh\QuickNote\Models\Note;


class NoteCategoryResource extends Resource
{
    protected static ?string $model = \Gokulsingh\QuickNote\Models\NoteCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Quick Notes';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Section::make('Note Category Details')
                ->schema([
                    Forms\Components\Textarea::make('title')->required(),
                    Forms\Components\Textarea::make('description')->required(),
                    Forms\Components\FileUpload::make('image')->image()->directory('quick-notes/images/categories')->required(),
                ])->columns(3),
                ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->limit(50),
            Tables\Columns\TextColumn::make('description')->limit(255),
            Tables\Columns\TextColumn::make('notes_count')
            ->counts('notes')
            ->limit(255),
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
