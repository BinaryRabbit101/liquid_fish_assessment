<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-around">
            @include('livewire.includes.note-create')
            @include('livewire.includes.notes-active', ['notes' => $notes['active']])
        </div>
        <div class="flex justify-end">
            @include('livewire.includes.notes-deleted', ['notes' => $notes['deleted']])
        </div>
    </div>
</div>
