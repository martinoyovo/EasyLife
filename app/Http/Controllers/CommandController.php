<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\Prices;
use App\Services;
use App\ModePayments;
class CommandController extends Controller
{
    public function index()
    {
        $commandes = Command::paginate();
        return view('commandes.commandes')->withCommandes($commandes);
    }


    public function store(Request $request)
    {
        $request->validate([
            'command_address' => 'command_address',
            'command_date' => 'command_date',
            'command_service_type' => 'command_service_type',
            'command_price' => 'command_price',
            'payment_mode' => 'payment_mode'
        ]);

        $user = Auth::user();
        $command = new Command();

        $command->address = $request->input('command_address');
        $command->payment_mode = intval($request->input('payment_mode'));
        $command->date = $request->input('commande_date');
        $command->service = intval($request->input('commande_service_type'));
        $command->price = intval($request->input('command_price'));
        $command->user_id = $user->id;

        $command->save();
        return redirect(route('commandes'));
    }
    public function show($id)
    {
        $command = Command::find($id);

        return view('commandes.commande')->with(
        [
            'command' => $command
        ]
        );
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function create() {
        $services = Services::all();
        $prices = Prices::where('parent_service', '{{$services->id}}')->get();
        $mode_payments = ModePayments::all();
        return view('commandes.new-commande')->with([
            'prices' => $prices,
            'mode_payments' => $mode_payments,
            'services' => $services
        ]);
    }
}
