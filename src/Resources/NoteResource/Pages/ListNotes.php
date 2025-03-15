<?php

namespace Gokulsingh\QuickNote\Resources\NoteResource\Pages;
use App\Filament\Resources\CourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Gokulsingh\QuickNote\Resources\NoteResource;

class ListNotes extends ListRecords
{
    protected static string $resource = NoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
