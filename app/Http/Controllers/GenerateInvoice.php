<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class GenerateInvoice extends Controller
{
    //

   public function print_invoice($id)
   {
            $all_orders = DB::table('commandes')->where('commandes.id',$id)->select('commandes.*','clients.*','commandes.id as commande_id')
            ->join('clients', 'commandes.client_id', '=', 'clients.id')->first();


            $pdf = PDF::loadView('printing.invoice', []);
            return $pdf->stream('my.pdf',array('Attachment'=>false));
   }
      
   
}
