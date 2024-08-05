<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'parent_id',
        'name',
    ];
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }


    public function article()
    {
        return $this->hasMany(Article::class);
    }
    public function articleCategory()
    {
        return $this->hasManyThrough(Article::class, Category::class, 'parent_id');
    }
    }
