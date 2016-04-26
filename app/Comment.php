<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    protected $table = "events.comments";

    public function event(){
        return $this->belongsTo(Event::class);
    }

}
