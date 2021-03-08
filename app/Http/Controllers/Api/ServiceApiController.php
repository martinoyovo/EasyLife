<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\PriceResource;
use App\Http\Resources\ServicesResource;
use App\Http\Resources\ServiceResource;
use App\Prices;
use App\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceApiController extends Controller
{
    public function index()
    {
        $prices = Prices::all();
        $services = Services::with([
            'prices',
            'category'
        ])->paginate();
        return new ServicesResource($services);
    }

    public function details($id)
    {
        $prices = Prices::where('parent_service', $id)->get();

        $service = Services::with([
            'prices',
        ])->find($id);
        return new ServicesResource($service);


    }
    public function category($id)
    {
        $services = Services::find($id);
        $category = $services->category;
        return new CategoryResource($category);
    }
}
