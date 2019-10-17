<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'tbl_companies';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'title', 'description', 'services', 'address', 'city', 'province', 'country', 'email', 'phone', 'keywords'
    ];

}
