<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    protected $primaryKey = "bookId";

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
