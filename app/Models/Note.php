<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'message',
        'pinned',
    ];

    function scopeId($query, $id){
        return $query->whereId($id);
    }
    function scopePinned($query){
        return $query->wherePinned(true);
    }

    function getMessageWithLineBreaksAttribute(){
        return str_replace("\n", "<br>", $this->message);
    }

    function pin(){
        Note::pinned()->update([
            'pinned' => false,
        ]);

        if(!$this->getOriginal('pinned')){
            $this->pinned = true;
            $this->save();
        }
    }
}
