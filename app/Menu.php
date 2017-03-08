<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable = ['id','title','type','description','status','image','user_id'];

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function items(){
      return $this->hasMany('App\Item','meun_id','id');
    }
}
