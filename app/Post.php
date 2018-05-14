<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category() { // Not plural like "posts" in the Category model since this is a one to many relationship.

        return $this->belongsTo('App\Category');
    }
}
