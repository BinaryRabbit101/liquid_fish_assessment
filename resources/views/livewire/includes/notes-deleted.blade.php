<div class="relative">
    @foreach ($notes as $note)
        <button wire:click="restore({{ $note->id }})" class="absolute -top-2" style="right: {{$loop->index * 64}}px; z-index: 5;">
            <i class="las la-level-up-alt bg-blue-200 rounded-full p-1 shadow-sm"></i>
        </button>
        <div class="w-64 h-32 shadow rounded-lg p-2 border border-gray-300 overflow-y-auto text-gray-500 absolute top-0 bg-white" style="right: {{$loop->index * 64}}px">
            {!! $note->message_with_line_breaks !!}
        </div>
    @endforeach
</div>
