<?php

namespace Jacek80\Bmserver;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  protected $fillable = [
      'name', 'amount'
  ];
}
