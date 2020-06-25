<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Post extends Model
{
//    protected $fillable = ['name','description']; // to allow mass assignment
    protected $guarded = []; // to switch off mass assignment for the model-  it will unguarded all
    public static function allPosts()
    {
        return app(Pipeline::class)
            ->send(Post::query())
            ->through([
                \App\QueryFilters\Active::class,
                \App\QueryFilters\Sort::class,
            ])
            ->thenReturn()
            ->paginate(7);
    }
}
