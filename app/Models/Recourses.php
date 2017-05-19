<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recourses extends CoreModel
{
    /**
     * @var string
     */
    protected $table = 'pz_recourses';

    /**
     * @var string
     */
    protected $fillable = ['id', 'mime_type', 'path', 'width', 'height', 'size'] ;

}
