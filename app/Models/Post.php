<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    protected $connection = 'mongodb';
    protected $guarded = [];

    /*
    public $primaryKey = 'id_post';
    protected $fillable = [
        'title',
        'content',
        'created_by',
    ];*/

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }
}
