<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Avance;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //

    public function add_order($client_id,$sexe,$veste,$pantalon,$jupe,$robe,$chemise,$tunique)
    {
        $order_items = ['veste'=>$veste,'pantalon'=>$pantalon,'jupe'=>$jupe,'robe'=>$robe,'chemise'=>$chemise,'tunique'=>$tunique];
        $client = Client::find($client_id);
        return view('pages.add_order',['order_items'=>$order_items,'client'=>$client]);
    }

    public function store_order(Request $request)
    {
            $order_data = json_decode($request->order_data);

            

            $facture = (string)(time()+rand(1,1000));
            $client_id = $request->client_id;

            $order = new Order();
            $order->facture = $facture;
            $order->dateretrait = $request->date_retrait;
            $order->datedepot = date('Y-m-d');
            $order->client_id = $client_id;
            $order->montant_total = $request->total_commande;
            $order->save();

            // id	qte	designation	pu	remise	commande_id	

           

            foreach ($order_data as $item) { 
                 $article = new Article();
                 $article->commande_id = $order->id;
                 $article->designation = $item->article;
                 $article->qte = $item->quantity;
                 $article->pu = $item->price;
                 $article->save();
                
              }

            //   id	montantav	dateav	reste	commande_id	


              

             if($request->avance!=null & $request->reste!=null)
             {
                $avance = new Avance();
                $avance->montantav = (double)$request->avance;
                $avance->dateav = date('Y-m-d');
                $avance->reste = (double)$request->reste;
                $avance->commande_id = $order->id;
                $avance->save();

             }

            return response()->json([
                'message' => 'la commande est oregistrée avec succès',
                'state' => 'ok',
            ],200);
       
    }


    public function list_orders()
    {
        $all_orders = DB::table('commandes')->select('commandes.*','clients.*','commandes.id as commande_id')
        ->join('clients', 'commandes.client_id', '=', 'clients.id')->get();

        // return $all_orders;
     
        return view('pages.list_orders',['all_orders'=>$all_orders]);
     
    }

    public function list_today_order()
    {
        $today_date = date('Y-m-d');
       
        $all_orders = DB::table('commandes')->select('commandes.*','clients.*','commandes.id as commande_id')
        ->where(['dateretrait'=>$today_date,'dateretire'=>null])
        ->join('clients', 'commandes.client_id', '=', 'clients.id')->get();

        // return $all_orders;
     
        return view('pages.list_orders',['all_orders'=>$all_orders]);
    }




}
