<?php

namespace App\Http\Controllers;

use App\ModePayments;
use	Illuminate\Support\Facades\DB;
use App\Category;
use App\Images;
use App\Prices;
use App\Services;
use Illuminate\Http\Request;


class ServicesController extends Controller
{

	public function index() {
        $category = Category::all();
        $prices = Prices::all();
		$services = Services::paginate();
		return view('services.services')->with([
		    'services' => $services,
            'category' => $category,
            'price' => $prices
        ]);
	}

    public function store(Request $request)
    {
        $request->validate([
            'service_title' => 'required',
            'service_description'    => 'required',
            'service_image'     => 'required',
            'service_category'  => 'required'
        ]);

        if($request->hasFile('service_image')) {
            $image = $request->file('service_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            \Intervention\Image\Facades\Image::make($image)
                ->resize(600, 300 )
                ->save(public_path($filename));
            //$path = $image->store('public');
            $services = new Services();
            $services->title = $request->input('service_title');
            $services->description = $request->input('service_description');
            $services->category_id    = intval($request->input('service_category'));
            $services->image = $filename;
            $services->save();
            return back()->with('alert-dialog', 'Added successfully !');
        }

    }


	public function show($id) {
	    //Retourne le service suivant son $id
        $service = Services::find($id);
        //Retourne le prix selon que le $id soit trouvé dans la table prix
        $prices = Prices::where('parent_service', $id)->get();

        return view(
            'services.service')->with([
            'service' => $service,
            'prices'  => $prices,
        ]);

        $prices = DB::table('prices')
            ->where('parent_service',	'{{$service->title}}')
            ->get();

	}
    public function newService()
    {

        $categories = Category::all();

        return view('services.new-service')->with([
            'categories' => $categories
        ]);
    }
}
