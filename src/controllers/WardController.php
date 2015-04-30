<?php namespace Sololab\Vimap\Controllers;
/**
 * Created by PhpStorm.
 * User: duongtruong
 * Date: 4/30/15
 * Time: 12:45 PM
 */
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Sololab\Vimap\Models\Ward;
use Sololab\Vimap\Transformer\WardTransformer;
use Dingo\Api\Routing\ControllerTrait;

class WardController extends \BaseController {

	use ControllerTrait;

	public function index()
	{
		$wards = Ward::all();

		return $this->response->collection($wards, new WardTransformer());
	}

	public function show($id)
	{
		try {

			$ward = Ward::findOrFail($id);

			return $this->response->item($ward, new WardTransformer());

		} catch (ModelNotFoundException $e) {

			return $this->response->errorNotFound();

		}
	}

}
