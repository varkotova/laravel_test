<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';
    protected $primarykey = 'id';
    public $incrementing = TRUE;
    public $timestamp = TRUE;

    protected $fillable = ['name', 'text'];
    protected $guarded = ['*'];
    protected $dates = ['deleted_at'];

    public function user(){
      return $this->belongsTo('App\User');
    }


}
