<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    protected $primaryKey = "categoryId";

    public function books() {
        return $this>hasMany(Book::class);
    }
}
