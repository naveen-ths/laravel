<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tags';
    protected $fillable = ['tag_title', 'tag_slug', 'tag_description', 'created_at', 'updated_at'];

}
