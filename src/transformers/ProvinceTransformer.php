<?php namespace Sololab\Vimap\Transformer;
/**
 * Created by PhpStorm.
 * User: duongtruong
 * Date: 4/30/15
 * Time: 2:41 PM
 */
use Sololab\Vimap\Models\Province;
use League\Fractal\TransformerAbstract;

class ProvinceTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'districts'
    ];

    public function transform(Province $province)
    {
        return [
            'id' => $province->id,
            'name' => $province->name,
            'type' => $province->type
        ];
    }

    public function includeDistricts(Province $province)
    {
        $districts = $province->districts;

        return $this->collection($districts, new DistrictTransformer());
    }
}