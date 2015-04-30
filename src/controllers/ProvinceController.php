<?php namespace Sololab\Vimap\Controllers;
/**
 * Created by PhpStorm.
 * User: duongtruong
 * Date: 4/30/15
 * Time: 12:45 PM
 */
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Sololab\Vimap\Models\Province;
use Sololab\Vimap\Transformer\ProvinceTransformer;
use Dingo\Api\Routing\ControllerTrait;

class ProvinceController extends \BaseController {

	use ControllerTrait;

	public function index()
	{
		$provinces = Province::all();

		return $this->response->collection($provinces, new ProvinceTransformer());
	}



	public function show($id)
	{
		try {

			$province = Province::findOrFail($id);

			return $this->response->item($province, new ProvinceTransformer());

		} catch (ModelNotFoundException $e) {

			return $this->response->errorNotFound();

		}
	}


}
