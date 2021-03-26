<div class="flex-1 m-4 p-4 shadow-lg rounded-lg overflow-y-auto max-h-96">
    @foreach ($notes as $note)
        <div class="relative m-2 p-2 border border-gray-300 rounded">
            <button wire:click="pin({{ $note->id }})" class="absolute -top-3 -right-3">
                @if($note->pinned)
                    <i class="las la-paperclip bg-blue-200 rounded-full p-1 shadow-sm"></i>
                @else
                    <i class="las la-paperclip bg-white rounded-full p-1 shadow-sm"></i>
                @endif
            </button>
            {!! $note->message_with_line_breaks !!}
            <button wire:click="delete({{ $note->id }})" class="absolute bottom-1 right-2">
                <i class="las la-trash-alt" class="bg-blue-200 rounded-full p-1"></i>
            </button>
        </div>
    @endforeach
</div>
