<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
   protected $fillable=["title", "description", "category", "author", "signees"];
   protected $guarded;
}
