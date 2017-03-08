<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
  protected $table = 'meals';
  protected $fillable = ['id','title','description','status','image','price','user_id'];

  public function user(){
    return $this->belongsTo('App\User');
  }
}
