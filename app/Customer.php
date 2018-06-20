<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{// make sure you have these added for array
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = ['id','email', 'phone', 'url','domain'  ];
    public $timestamps = true;
}
