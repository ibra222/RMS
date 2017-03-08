<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'orders';
  protected $fillable = ['id','total','status','cashIn','payment','change'];

  public function user(){
    return $this->belongsTo('App\User');
  }
}
