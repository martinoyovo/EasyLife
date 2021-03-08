<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ServicesResource;
use App\Prices;
use App\Services;
use Illuminate\Http\Request;

use App\Category;
use App\Http\Resources\CategoriesResource;

class CategoryApiController extends Controller
{


    public function index()
    {
        $categories = Category::with(['services'])->paginate();
        return new CategoriesResource($categories);
    }

    public function services($id)
    {
        $category = Category::find($id);
        $services = $category->services;
        return new ServicesResource($services);
    }
}
