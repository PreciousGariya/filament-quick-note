<?php

namespace Gokulsingh\QuickNote\Widgets;

use Filament\Widgets\Widget;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Gokulsingh\QuickNote\Models\Note;

class QuickNoteWidget extends Widget implements HasForms
{
    protected static string $view = 'quick-note::widgets.quick-note';

    use InteractsWithForms;

    public $content;
    public ?array $data = [];


    public function saveNote()
    {
        Note::create([
            'user_id' => auth()->id(),
            'content' => $this->content,
        ]);

        $this->reset('content');
        $this->dispatch('noteSaved');
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Textarea::make('content')->required(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('content')->required(),
            ])
            ->statePath('data');
    }
}
