<?php namespace App\Http\Controllers;

use App\models\Ingredients;
use Illuminate\Routing\Controller;

class IngredientsController extends APIbaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ingridients
	 *
	 * @return Response
	 */
	public function admIndex()
	{
	    $configuration = [];
		$configuration['list'] = Ingredients::get()->toArray();
		$configuration['editRoute'] = 'app.ingredients.edit';
		$configuration['deleteRoute'] = 'app.ingredients.destroy';

		return view('admin.list', $configuration);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ingridients/create
	 *
	 * @return Response
	 */
	public function admCreate()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ingridients
	 *
	 * @return Response
	 */
	public function admStore()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /ingridients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function admShow($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ingridients/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function admEdit($id)
	{


	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ingridients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function admUpdate($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ingridients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function admDestroy($id)
	{
		//
	}

}