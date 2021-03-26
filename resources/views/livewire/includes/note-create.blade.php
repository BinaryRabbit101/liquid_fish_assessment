<div class="flex-1 m-4 p-4 shadow-lg rounded-lg">
    <span class="font-bold text-lg">New Note</span>
    <form wire:submit.prevent="create">
        <textarea wire:model="message" placeholder="Type a new note..." class="w-full h-64 rounded-lg shadow border-none"></textarea>
        <div class="flex justify-between">
            <div>
                @error('message') <span class="error">{{ $message }}</span> @enderror
                @if($created) <span class="success">New Note Created!</span> @endif
            </div>
            <button type="submit" class="bg-blue-200 shadow rounded p-1 font-bold">Save</button>
        </div>
    </form>
</div>
