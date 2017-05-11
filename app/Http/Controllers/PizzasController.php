<?php namespace App\Http\Controllers;

use App\models\Pizzas;
use Illuminate\Routing\Controller;

class PizzasController extends APIbaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pizzas
	 *
	 * @return Response
	 */
	public function index()
	{
	    return view('frontend.list');
	}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function admIndex()
    {
        return view('admin.list');
    }

	/**
	 * [apiIndex description]
	 * @return [type] [description]
	 */

    public function apiIndex()
    {
        return Pizzas::get()->toArray();
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /pizzas/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

    /**
     *
     */
	public function admCreate()
    {

    }

    /**
     *
     */
    public function apiCreate()
    {

    }

	/**
	 * Store a newly created resource in storage.
	 * POST /pizzas
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

    /**
     *
     */

	public function admStore()
    {

    }

	/**
	 * [apiStore description]
	 * @return [type] [description]
	 */
	public function apiStore()
	{

	}

	/**
	 * Display the specified resource.
	 * GET /pizzas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

    /**
     *
     */

	public function admShow()
    {

    }

	/**
	 * [apiShow description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function apiShow($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pizzas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

    /**
     *
     */

	public function admEdit()
    {

    }

    /**
     *
     */

    public function apiEdit()
    {

    }

	/**
	 * Update the specified resource in storage.
	 * PUT /pizzas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function admUpdate()
    {

    }

	/**
	 * [apiUpdate description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function apiUpdate($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pizzas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    /**
     *
     */

	public function admDestroy()
    {

    }

	/**
	 * [apiDestroy description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function apiDestroy($id)
	{

	}

}