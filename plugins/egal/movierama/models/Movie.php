<?php

namespace Egal\Movierama\Models;

use Model;

/**
* Create model class for movie db table
*/
class Movie extends Model {
    
    // the db table corresponding the model
    protected $table = 'mr_movie';  
    
    // primary key name used to identify the model
    protected $primaryKey = 'id';  
        
    public $timestamps = false;     // disables created_at and updated_at fields
    
    public $rules = [
        'title' => 'required',
        'user_id' => 'required',
    ];
    
    // define relationship between movies and users (one movie is submitted by one user)
    public $belongsTo  = [
        'user_obj' => ['RainLab\User\Models\User', 'key' => 'user_id', 'otherKey' => 'id']
    ];
    
    // define relationship between movies and votes (one movie has many votes)
    public $hasMany = [
        'votes' => 'Egal\Movierama\Models\Vote', 'key' => 'movie_id', 'otherKey' => 'id'
    ];
    
}