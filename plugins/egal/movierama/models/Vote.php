<?php

namespace Egal\Movierama\Models;

use Model;

/**
* Create model class for vote db table
*/
class Vote extends Model {
    
    protected $table = 'mr_vote';
    
    protected $primaryKey = 'vote_id';
    
    public $timestamps = false;
    
    // define relationship between votes and users (one vote is submitted by one user)
    public $belongsTo  = [
        'user_obj' => ['RainLab\User\Models\User', 'key' => 'user_id', 'otherKey' => 'id']
    ];
}