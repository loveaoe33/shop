<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopproduct extends Model
{
    protected $table = 'shopproduct';
    protected $primaryley="id";
    protected $fillable=['name','quantity','price','total','productid'];
}
