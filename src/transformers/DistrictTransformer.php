<?php namespace Sololab\Vimap\Transformer;
/**
 * Created by PhpStorm.
 * User: duongtruong
 * Date: 4/30/15
 * Time: 2:45 PM
 */
use Sololab\Vimap\Models\District;
use League\Fractal\TransformerAbstract;

class DistrictTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'wards'
    ];

    public function transform(District $district)
    {
        return [
            'id' => $district->id,
            'name' => $district->name,
            'type' => $district->type,
            'location' => $district->location
        ];
    }

    public function includeWards(District $district)
    {
        $wards = $district->wards;

        return $this->collection($wards, new WardTransformer());
    }
}