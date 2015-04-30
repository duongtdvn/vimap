<?php namespace Sololab\Vimap\Models;
/**
 * Created by PhpStorm.
 * User: duongtruong
 * Date: 4/30/15
 * Time: 12:51 PM
 */
use Eloquent;

class Province extends Eloquent
{
    protected $table = 'vimap_provinces';

    public $timestamps = false;

    public function districts()
    {
        return $this->hasMany('Sololab\Vimap\Models\District');
    }
}