<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends \TCG\Voyager\Models\Category
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function grandchildren()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('grandchildren');
    }
}
