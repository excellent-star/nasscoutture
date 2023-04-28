<?php

namespace App\Http\Controllers;

use App\Models\Avance;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralController extends Controller
{
    //
    public function login()
    {
        return view('pages.page-login');
    }

    public function dashboard()
    {
        $count_clients = Client::count();
        $count_female_clients = Client::where('sexe','F')->count();
        $count_male_clients = Client::where('sexe','M')->count();

        $client_order = DB::table('clients')
        ->join('commandes', 'clients.id', '=', 'commandes.client_id')->distinct()->count('clients.id');

        $count_order = Order::count();

        $count_cash_advance = Avance::count();

 
        return view('pages.index',['count_clients'=>$count_clients,'female_clients'=>$count_female_clients,'male_clients'=>$count_male_clients,'client_order'=>$client_order,'count_order'=>$count_order,'count_cash_advance'=>$count_cash_advance]);
    }

    


}
