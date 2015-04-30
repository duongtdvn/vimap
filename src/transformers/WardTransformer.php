<?php namespace Sololab\Vimap\Transformer;
/**
 * Created by PhpStorm.
 * User: duongtruong
 * Date: 4/30/15
 * Time: 2:46 PM
 */
use Sololab\Vimap\Models\Ward;
use League\Fractal\TransformerAbstract;

class WardTransformer extends TransformerAbstract
{
    public function transform(Ward $ward)
    {
        return [
            'id' => $ward->id,
            'name' => $ward->name,
            'type' => $ward->type,
            'location' => $ward->location
        ];
    }
}