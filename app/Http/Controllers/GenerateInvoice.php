<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Avance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class GenerateInvoice extends Controller
{
    //

   public function print_invoice($id)
   {
            $order = DB::table('commandes')->where('commandes.id',$id)->select('commandes.*','clients.*','commandes.id as commande_id')
            ->join('clients', 'commandes.client_id', '=', 'clients.id')->first();

            $articles = Article::where('commande_id',$id)->get();
            $avance = Avance::where('commande_id',$id)->first();
            

            $pdf = PDF::loadView('printing.invoice_order', ['order'=>$order,'articles'=>$articles,'avance'=>$avance]);
            return $pdf->stream('my.pdf',array('Attachment'=>false));
   }

   public function print_client_sizes($client_id,$article)
   {
            $pdf = PDF::loadView('printing.client_sizes', []);
            return $pdf->stream('my.pdf',array('Attachment'=>false));
   }
      
   
}
