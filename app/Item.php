<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $table = 'items';
  protected $fillable = ['id','title','description','price','status','image','meun_id','user_id'];

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function meun(){
    return $this->belongsTo('App\Menu');
  }
}
