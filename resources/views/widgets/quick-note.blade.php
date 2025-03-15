<x-filament::widget>
    <x-filament::card>
        <form wire:submit.prevent="saveNote">
        {{ $this->form }}
            <x-filament::button type="submit" class="mt-2">Save</x-filament::button>
        </form>
    </x-filament::card>
</x-filament::widget>
