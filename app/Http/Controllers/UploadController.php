<?php namespace App\Http\Controllers;

use App\Models\Recourses;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller;

class UploadController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /upload
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /upload/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /upload
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /upload/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /upload/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /upload/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /upload/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function upload(UploadedFile $file)
    {
        $data = [
            "size" => $file->getSize(),
            "mime_type" => $file->getMimeType()
        ];

        $path = 'upload/' . date("Y/m/d"); //sukurem direktorija

        $fileName = Carbon::now()->timestamp . '_' . $file->getClientOriginalName(); //sukurem file name

        $file->move(public_path($path),$fileName); //failo perkelimas i folderi su tuo paciu name


        $data["path"] = $path . $fileName; //nurodytas visas kelias

        return Recourses::create($data);
        //dd($file);
    }

}