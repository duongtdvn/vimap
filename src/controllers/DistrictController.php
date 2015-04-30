<?php namespace Sololab\Vimap\Controllers;
/**
 * Created by PhpStorm.
 * User: duongtruong
 * Date: 4/30/15
 * Time: 12:45 PM
 */
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Sololab\Vimap\Transformer\DistrictTransformer;
use Sololab\Vimap\Models\District;
use Dingo\Api\Routing\ControllerTrait;

class DistrictController extends \BaseController {

	use ControllerTrait;

	public function index()
	{
		$district = District::all();

		return $this->response->collection($district, new DistrictTransformer());
	}

	public function show($id)
	{
		try {

			$district = District::findOrFail($id);

			return $this->response->item($district, new DistrictTransformer());

		} catch (ModelNotFoundException $e) {

			return $this->response->errorNotFound();

		}
	}


}
