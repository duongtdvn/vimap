<?php namespace Sololab\Vimap\Models;
/**
 * Created by PhpStorm.
 * User: duongtruong
 * Date: 4/30/15
 * Time: 12:57 PM
 */
use Eloquent;

class Ward extends Eloquent
{
    protected $table = 'vimap_wards';

    public $timestamps = false;

    public function district()
    {
        return $this->belongsTo('Sololab\Vimap\Models\District');
    }
}