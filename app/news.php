<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table='news';
    protected $fillable=['id','newstitle','description','newsdate'];
    protected $PrimaryKey='id';
}