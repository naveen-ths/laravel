<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';
    
    
    protected $fillable = ['cat_title', 'description', 'cat_image', 'created_at', 'updated_at'];

}
