<?php

namespace Market\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
   protected $table= 'products';
   protected $primarykey = 'id';

   protected  $fillable= [
      'id','name', 'price', 'marks_id'
   ];
   

}
