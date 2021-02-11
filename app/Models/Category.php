<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function children()
    {

        return $this->hasMany(self::class, 'parent_id');
    }
    public function products()
    {

        return $this->hasMany('App\Product', 'category');
    }
    use HasFactory;
}
