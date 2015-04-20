<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	//

    protected $fillable = ['title','user_id', 'body', 'published_at'];

         // an article is woned by a user
    public function user(){

        return $this->belongsTo('App\User');
    }



}
