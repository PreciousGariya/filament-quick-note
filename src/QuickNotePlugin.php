<?php
namespace Gokulsingh\QuickNote;

use Filament\Contracts\Plugin;
use Filament\Panel;

class QuickNotePlugin implements Plugin
{
    protected $role;
    public static function make(): QuickNotePlugin
    {
        return new QuickNotePlugin();
    }

    public function role(string $role): QuickNotePlugin
    {
        $this->role = $role;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            \Gokulsingh\QuickNote\Resources\NoteCategoryResource::class,
            \Gokulsingh\QuickNote\Resources\NoteResource::class,
        ]);

        $panel->widgets([
            \Gokulsingh\QuickNote\Widgets\QuickNoteWidget::class,
        ]);
    }

    public function getId(): string
    {
        return 'quick-note';
    }
    public function boot(Panel $panel): void
    {
        //
    }
   
}