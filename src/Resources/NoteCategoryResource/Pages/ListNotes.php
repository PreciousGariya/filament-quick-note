<?php

namespace Gokulsingh\QuickNote\Resources\NoteCategoryResource\Pages;
use App\Filament\Resources\CourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Gokulsingh\QuickNote\Resources\NoteCategoryResource;

class ListNotes extends ListRecords
{
    protected static string $resource = NoteCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
