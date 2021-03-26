<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Note;

class Notes extends Component
{
    public $notes = [];

    public $message = null;
    public $created = false;

    protected $rules = [
        'message' => 'required|string|min:1|max:1000',
    ];

    public function render()
    {
        $this->notes['active'] = Note::orderBy('pinned', 'desc')->get();

        $this->notes['deleted'] = Note::onlyTrashed()
            ->orderBy('created_at', 'asc')
            ->orderBy('deleted_at', 'asc')
            ->get();

        return view('livewire.notes');
    }

    public function create(){
        $this->validate();

        Note::create([
            'message' => $this->message,
        ]);

        $this->reset('message');

        $this->created = true;
    }

    public function pin(Note $note){
        $note->pin();
    }

    public function delete(Note $note){
        $note->delete();
    }

    public function restore($note){
        Note::onlyTrashed()->id($note)->firstOrFail()->restore();
    }
}
