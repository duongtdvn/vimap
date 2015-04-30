<?php namespace Sololab\Vimap\Models;
/**
 * Created by PhpStorm.
 * User: duongtruong
 * Date: 4/30/15
 * Time: 12:53 PM
 */
use Eloquent;

class District extends Eloquent
{
    protected $table = 'vimap_districts';

    public $timestamps = false;

    public function province()
    {
        return $this->belongsTo('Sololab\Vimap\Models\Province');
    }

    public function wards()
    {
        return $this->hasMany('Sololab\Vimap\Models\Ward');
    }
}