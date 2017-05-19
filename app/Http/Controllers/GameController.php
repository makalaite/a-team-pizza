<?php namespace App\Http\Controllers;

use App\Models\UsersRecoursesConnections;
use Illuminate\Routing\Controller;

class GameController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /usergame
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /usergame/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /usergame
	 *
	 * @return Response
	 */
	public function store()
	{
		$resource = request()->file('image');

		$uploadController = new UploadController();
		$record = $uploadController->upload($resource);

		UsersRecoursesConnections::create([
		    "user_id" => auth()->user()->id,
            "recourse_id" => $record->id
        ]);

	}

	/**
	 * Display the specified resource.
	 * GET /usergame/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /usergame/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /usergame/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /usergame/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}