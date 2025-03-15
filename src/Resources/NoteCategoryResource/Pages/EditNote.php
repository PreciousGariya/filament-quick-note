<?php

namespace Gokulsingh\QuickNote\Resources\NoteCategoryResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Gokulsingh\QuickNote\Resources\NoteCategoryResource;

class EditNote extends EditRecord
{
    protected static string $resource = NoteCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    
}
