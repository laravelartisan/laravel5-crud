<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/7/2015
 * Time: 11:51 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Song extends Eloquent {


    protected $fillable = ['title','lyrics','slug'];

} 