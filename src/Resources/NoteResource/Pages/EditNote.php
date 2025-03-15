<?php

namespace Gokulsingh\QuickNote\Resources\NoteResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Gokulsingh\QuickNote\Resources\NoteResource;

class EditNote extends EditRecord
{
    protected static string $resource = NoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    
}
