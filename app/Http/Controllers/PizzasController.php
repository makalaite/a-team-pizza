<?php namespace App\Http\Controllers;

use App\models\Pizzas;
use Illuminate\Routing\Controller;

class PizzasController extends ApiController {

	/**
	 * Display a listing of the resource.
	 * GET /pizzas
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
        $configuration['record'] = Pizzas::find($id);

        return view('single', $configuration);
    }

    /**
     * @param int $id
     * @return mixed
     */

	public function apiShow($id)
    {
        return Pizzas::find($id);
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
    public  function apiEdit()
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

    /**
     *
     */
	public function apiUpdate()
    {

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

}