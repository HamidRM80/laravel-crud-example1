<?php

namespace Hamidreza\LaravelCrudExample\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public $timestamps = true;

    /* Method Section */

    public function store($request)
    {
        $this->create($request->all());
    }

    public function edit($request)
    {
        tap($this)->update($request->all());
    }
}




