<?php

namespace Gokulsingh\QuickNote\Resources\NoteResource\Pages;
use Filament\Resources\Pages\CreateRecord;
use Gokulsingh\QuickNote\Resources\NoteResource;

class CreateNote extends CreateRecord
{
    protected static string $resource = NoteResource::class;
    
}
