<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CateTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The timestamps that are not created.
     * 
     * @var boolean
     */
    public $timestamps = false;
}
