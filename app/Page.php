<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';
    protected $fillable = ['title', 'slug', 'author_id', 'excerpt', 'description', 'featured_image','status', 'created_at', 'updated_at'];

}
