<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Event extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title', 'content', 'image_url', 'region_id', 'location', 'date', 'author_id'
    ];

    

    public function subscribers(){
        return $this->belongsToMany('App\User');
    }

    public function author(){
        return $this->belongsTo('App\User');
    }

    public function region(){
        return $this->belongsTo('App\Region');
    }

    protected $date = ['deleted_at'];
}
