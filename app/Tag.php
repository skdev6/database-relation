<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    public function Posts()
    {
        return $this->BelongsToMany(Post::class, 'post_tag', 'tag_id', 'post_id');
    }
}