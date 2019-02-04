<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';
    
    
    protected $fillable = ['author_id','title', 'excerpt', 'description', 'featured_image', 'created_at', 'updated_at'];

}
