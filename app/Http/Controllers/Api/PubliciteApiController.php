<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PublicitesController;
use App\Http\Resources\PublicitesResource;
use App\Publicites;
use Illuminate\Http\Request;

class PubliciteApiController extends Controller
{
    public function index()
    {
        $publicite = Publicites::all();
        return new PublicitesResource($publicite);
    }
}
