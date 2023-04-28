<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Mesure;
use App\Models\Mesuresfem;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class ClientSizesController extends Controller
{
    //
    public function man_sizes($user_id)
    {
        $client_sizes = Mesure::where('client_id',$user_id)->first();
        $client = Client::find($user_id);
        
        return view('pages.man_sizes',['client_sizes'=>$client_sizes,'client'=>$client]);
    }

    public function woman_sizes($user_id)
    {
        $client = Client::find($user_id);
        $client_sizes = Mesuresfem::where('client_id',$user_id)->first();
        return view('pages.woman_sizes',['client_sizes'=>$client_sizes,'client'=>$client]);
    }

    public function save_man_veste_size(Request $request)
    {
          $check_client = Mesure::where('client_id',$request->client_id)->first();

          
          if($check_client==null)
          {
            $mesure = new Mesure();
            $mesure->client_id = $request->client_id;
            $mesure->h_epaulev = $request->h_epaulev;
            $mesure->h_commentairev = $request->h_commentairev;
            $mesure->h_longueurmanchev = $request->h_longueurmanchev;
            $mesure->poitrinev = $request->poitrinev;
            $mesure->ventrev = $request->ventrev;
            $mesure->h_longueurhautv = $request->h_longueurhautv;
            $mesure->h_tourmanchev = $request->h_tourmanchev;
            $mesure->dosv = $request->dosv;
            $mesure->h_colv = $request->h_colv;
            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesure_id = $mesure->id;
            $client->save();
             

          }else{


            $mesure = $check_client;
            $mesure->client_id = $request->client_id;
            $mesure->h_epaulev = $request->h_epaulev;
            $mesure->h_commentairev = $request->h_commentairev;
            $mesure->h_longueurmanchev = $request->h_longueurmanchev;
            $mesure->poitrinev = $request->poitrinev;
            $mesure->ventrev = $request->ventrev;
            $mesure->h_longueurhautv = $request->h_longueurhautv;
            $mesure->h_tourmanchev = $request->h_tourmanchev;
            $mesure->dosv = $request->dosv;
            $mesure->h_colv = $request->h_colv;
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures du veste sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }

    public function save_man_pantalon_size(Request $request)
    {
          $check_client = Mesure::where('client_id',$request->client_id)->first();

     
     
          if($check_client==null)
          {
            $mesure = new Mesure();
            $mesure->client_id = $request->client_id;
           

            $mesure->h_commentairep = $request->h_commentairep;
            $mesure->fondp = $request->fondp;
            $mesure->h_piedp = $request->h_piedp;
            $mesure->h_genouxp = $request->h_genouxp;
            $mesure->h_molletp = $request->h_molletp;
            $mesure->h_longueurp = $request->h_longueurp;
            $mesure->fermeturep = $request->fermeturep;
            $mesure->h_cuissep = $request->h_cuissep;
            $mesure->bassinp = $request->bassinp;
            $mesure->taillep = $request->taillep;
            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesure_id = $mesure->id;
            $client->save();

             

          }else{
           

            $mesure = $check_client;
            $mesure->client_id = $request->client_id;

            $mesure->h_commentairep = $request->h_commentairep;
            $mesure->fondp = $request->fondp;
            $mesure->h_piedp = $request->h_piedp;
            $mesure->h_genouxp = $request->h_genouxp;
            $mesure->h_molletp = $request->h_molletp;
            $mesure->h_longueurp = $request->h_longueurp;
            $mesure->fermeturep = $request->fermeturep;
            $mesure->h_cuissep = $request->h_cuissep;
            $mesure->bassinp = $request->bassinp;
            $mesure->taillep = $request->taillep;
            
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures du pantalon sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }



    public function save_man_chemise_size(Request $request)
    {
          $check_client = Mesure::where('client_id',$request->client_id)->first();
     
          if($check_client==null)
          {
            $mesure = new Mesure();
            $mesure->client_id = $request->client_id;
           

            $mesure->h_commentairech = $request->h_commentairech;
            $mesure->h_colch = $request->h_colch;
            $mesure->h_coudech = $request->h_coudech;
            $mesure->tourmanchech = $request->tourmanchech;
            $mesure->h_poignetch = $request->h_poignetch;
            $mesure->h_longueurhautch = $request->h_longueurhautch;
            $mesure->ventrech = $request->ventrech;
            $mesure->poitrinech = $request->poitrinech;
            $mesure->h_longueurmanchech = $request->h_longueurmanchech;
            $mesure->h_epaulech = $request->h_epaulech;
            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesure_id = $mesure->id;
            $client->save();

          }else{

            $mesure = $check_client;
            $mesure->client_id = $request->client_id;

           
            $mesure->h_commentairech = $request->h_commentairech;
            $mesure->h_colch = $request->h_colch;
            $mesure->h_coudech = $request->h_coudech;
            $mesure->tourmanchech = $request->tourmanchech;
            $mesure->h_poignetch = $request->h_poignetch;
            $mesure->h_longueurhautch = $request->h_longueurhautch;
            $mesure->ventrech = $request->ventrech;
            $mesure->poitrinech = $request->poitrinech;
            $mesure->h_longueurmanchech = $request->h_longueurmanchech;
            $mesure->h_epaulech = $request->h_epaulech;
            
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures de la chemise sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }



    public function save_man_gilet_size(Request $request)
    {
          $check_client = Mesure::where('client_id',$request->client_id)->first();
     
          if($check_client==null)
          {
            $mesure = new Mesure();
            $mesure->client_id = $request->client_id;
           

            $mesure->h_commentaireg = $request->h_commentaireg;
            $mesure->longueurg = $request->longueurg;
            $mesure->ventreg = $request->ventreg;
            $mesure->poitrineg = $request->poitrineg;
            $mesure->h_poignetch = $request->h_poignetch;
            $mesure->epauleg = $request->epauleg;

            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesure_id = $mesure->id;
            $client->save();

          }else{

            $mesure = $check_client;
            $mesure->client_id = $request->client_id;

    
            $mesure->h_commentaireg = $request->h_commentaireg;
            $mesure->longueurg = $request->longueurg;
            $mesure->ventreg = $request->ventreg;
            $mesure->poitrineg = $request->poitrineg;
            $mesure->h_poignetch = $request->h_poignetch;
            $mesure->epauleg = $request->epauleg;
        
            
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures du gilet sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }


    public function save_man_tunique_size(Request $request)
    {
          $check_client = Mesure::where('client_id',$request->client_id)->first();

   
     
          if($check_client==null)
          {
            $mesure = new Mesure();
            $mesure->client_id = $request->client_id;
           

            $mesure->epaul_tun = $request->epaul_tun;
            $mesure->longueurmanch_tun = $request->longueurmanch_tun;
            $mesure->poitrine_tun = $request->poitrine_tun;
            $mesure->ventre_tun = $request->ventre_tun;
            $mesure->longueurhaut_tun = $request->longueurhaut_tun;
            $mesure->poignet_tun = $request->poignet_tun;

            $mesure->tourmanche_tun = $request->tourmanche_tun;
            $mesure->longueurmanche_tun = $request->longueurmanche_tun;
            $mesure->coude_tun = $request->coude_tun;
            $mesure->col_tun = $request->col_tun;
            $mesure->h_commentaire_tun = $request->h_commentaire_tun;

            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesure_id = $mesure->id;
            $client->save();

          }else{

            $mesure = $check_client;
            $mesure->client_id = $request->client_id;

    
            $mesure->epaul_tun = $request->epaul_tun;
            $mesure->longueurmanch_tun = $request->longueurmanch_tun;
            $mesure->poitrine_tun = $request->poitrine_tun;
            $mesure->ventre_tun = $request->ventre_tun;
            $mesure->longueurhaut_tun = $request->longueurhaut_tun;
            $mesure->poignet_tun = $request->poignet_tun;

            $mesure->tourmanche_tun = $request->tourmanche_tun;
            $mesure->longueurmanche_tun = $request->longueurmanche_tun;
            $mesure->coude_tun = $request->coude_tun;
            $mesure->col_tun = $request->col_tun;
            $mesure->h_commentaire_tun = $request->h_commentaire_tun;

        
            
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures de la tunique sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }


    // for woman

    public function save_woman_veste_size(Request $request)
    {
          $check_client = Mesuresfem::where('client_id',$request->client_id)->first();

          
     
          if($check_client==null)
          {
            $mesure = new Mesuresfem();
            $mesure->client_id = $request->client_id;
           
          

            $mesure->epaulev = $request->epaulev;
            $mesure->longueurmanchev = $request->longueurmanchev;
            $mesure->tourpoitrinev = $request->tourpoitrinev;
            $mesure->tourtaillev = $request->tourtaillev;
            $mesure->longueurpincev = $request->longueurpincev;
            $mesure->longueurtaillev = $request->longueurtaillev;
            $mesure->longueurhautv = $request->longueurhautv;
            $mesure->longueurhautv = $request->longueurhautv;
            $mesure->tourmanchev = $request->tourmanchev;
            $mesure->colv = $request->colv;
            $mesure->commentairev = $request->commentairev;
            
            

            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesuresfem_id = $mesure->id;
            $client->save();

          }else{

            $mesure = $check_client;
            $mesure->client_id = $request->client_id;

    
            

            $mesure->epaulev = $request->epaulev;
            $mesure->longueurmanchev = $request->longueurmanchev;
            $mesure->tourpoitrinev = $request->tourpoitrinev;
            $mesure->tourtaillev = $request->tourtaillev;
            $mesure->longueurpincev = $request->longueurpincev;
            $mesure->longueurtaillev = $request->longueurtaillev;
            $mesure->longueurhautv = $request->longueurhautv;
            $mesure->tourmanchev = $request->tourmanchev;
            $mesure->colv = $request->colv;
            $mesure->commentairev = $request->commentairev;

        
            
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures de la veste sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }


    public function save_woman_pantalon_size(Request $request)
    {
          $check_client = Mesuresfem::where('client_id',$request->client_id)->first();

            
     
          if($check_client==null)
          {
            $mesure = new Mesuresfem();
            $mesure->client_id = $request->client_id;
           

            $mesure->commentairep = $request->commentairep;
            $mesure->piedp = $request->piedp;
            $mesure->longueurp = $request->longueurp;
            $mesure->genouxp = $request->genouxp;
            $mesure->cuissep = $request->cuissep;
            $mesure->tourfessep = $request->tourfessep;
            $mesure->tourtaillep = $request->tourtaillep;
            

            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesuresfem_id = $mesure->id;
            $client->save();

          }else{

            $mesure = $check_client;
            $mesure->client_id = $request->client_id;

    
            $mesure->commentairep = $request->commentairep;
            $mesure->piedp = $request->piedp;
            $mesure->longueurp = $request->longueurp;
            $mesure->genouxp = $request->genouxp;
            $mesure->cuissep = $request->cuissep;
            $mesure->tourfessep = $request->tourfessep;
            $mesure->tourtaillep = $request->tourtaillep;

        
            
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures du pantalon sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }


    public function save_woman_jupe_size(Request $request)
    {
          $check_client = Mesuresfem::where('client_id',$request->client_id)->first();

            
     
          if($check_client==null)
          {
            $mesure = new Mesuresfem();
            $mesure->client_id = $request->client_id;
           

            $mesure->commentairej = $request->commentairej;
            $mesure->longueurj = $request->longueurj;
            $mesure->tourfessej = $request->tourfessej;
            $mesure->tourtaillej = $request->tourtaillej;
       
            

            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesuresfem_id = $mesure->id;
            $client->save();

          }else{

            $mesure = $check_client;
            $mesure->client_id = $request->client_id;

    
            $mesure->commentairej = $request->commentairej;
            $mesure->longueurj = $request->longueurj;
            $mesure->tourfessej = $request->tourfessej;
            $mesure->tourtaillej = $request->tourtaillej;
        
            
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures de la jupe sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }




    public function save_woman_robe_size(Request $request)
    {
          $check_client = Mesuresfem::where('client_id',$request->client_id)->first();

            
     
          if($check_client==null)
          {
            $mesure = new Mesuresfem();
            $mesure->client_id = $request->client_id;
           
            

            $mesure->commentairer = $request->commentairer;
            $mesure->tourmancher = $request->tourmancher;
            $mesure->tourfesser = $request->tourfesser;
            $mesure->longueurrober = $request->longueurrober;
            $mesure->longueurtailler = $request->longueurtailler;
            $mesure->longueurpincer = $request->longueurpincer;
            $mesure->tourtailler = $request->tourtailler;
            $mesure->tourpoitriner = $request->tourpoitriner;
            $mesure->longueurmancher = $request->longueurmancher;
            $mesure->epauler = $request->epauler;
          
       
            

            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesuresfem_id = $mesure->id;
            $client->save();

          }else{

            $mesure = $check_client;
            $mesure->client_id = $request->client_id;

    
            $mesure->commentairer = $request->commentairer;
            $mesure->tourmancher = $request->tourmancher;
            $mesure->tourfesser = $request->tourfesser;
            $mesure->longueurrober = $request->longueurrober;
            $mesure->longueurtailler = $request->longueurtailler;
            $mesure->longueurpincer = $request->longueurpincer;
            $mesure->tourtailler = $request->tourtailler;
            $mesure->tourpoitriner = $request->tourpoitriner;
            $mesure->longueurmancher = $request->longueurmancher;
            $mesure->epauler = $request->epauler;
          
            
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures de la robe sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }



    public function save_woman_chemise_size(Request $request)
    {
          $check_client = Mesuresfem::where('client_id',$request->client_id)->first();

            
     
          if($check_client==null)
          {
            $mesure = new Mesuresfem();
            $mesure->client_id = $request->client_id;
           
            

            $mesure->commentairech = $request->commentairech;
            $mesure->tourmanchech = $request->tourmanchech;
            $mesure->colch = $request->colch;
            $mesure->coudech = $request->coudech;
            $mesure->poignetch = $request->poignetch;
            $mesure->longueurhautch = $request->longueurhautch;
            $mesure->longueurtaillech = $request->longueurtaillech;
            $mesure->longueurpincech = $request->longueurpincech;
            $mesure->tourtaillech = $request->tourtaillech;
            $mesure->tourpoitrinech = $request->tourpoitrinech;
            $mesure->tourtaillech = $request->tourtaillech;
            $mesure->longueurmanchech = $request->longueurmanchech;
            $mesure->epaulech = $request->epaulech;
           
        

            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesuresfem_id = $mesure->id;
            $client->save();

          }else{

            $mesure = $check_client;
            $mesure->client_id = $request->client_id;

    
            $mesure->commentairech = $request->commentairech;
            $mesure->tourmanchech = $request->tourmanchech;
            $mesure->colch = $request->colch;
            $mesure->coudech = $request->coudech;
            $mesure->poignetch = $request->poignetch;
            $mesure->longueurhautch = $request->longueurhautch;
            $mesure->longueurtaillech = $request->longueurtaillech;
            $mesure->longueurpincech = $request->longueurpincech;
            $mesure->tourtaillech = $request->tourtaillech;
            $mesure->tourpoitrinech = $request->tourpoitrinech;
            $mesure->tourtaillech = $request->tourtaillech;
            $mesure->longueurmanchech = $request->longueurmanchech;
            $mesure->epaulech = $request->epaulech;
           
          
            
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures de la chemise sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }




    public function save_woman_tunique_size(Request $request)
    {
          $check_client = Mesuresfem::where('client_id',$request->client_id)->first();

            
     
          if($check_client==null)
          {
            $mesure = new Mesuresfem();
            $mesure->client_id = $request->client_id;
           
            

            $mesure->commentaire_tun = $request->commentaire_tun;
            $mesure->f_col_tun = $request->f_col_tun;
            $mesure->f_coude_tunn = $request->f_coude_tunn;
            $mesure->f_tourmanche_tun = $request->f_tourmanche_tun;
            $mesure->f_poignet_tun = $request->f_poignet_tun;
            $mesure->f_longueurhhaut_tun = $request->f_longueurhhaut_tun;
            $mesure->ff_ventre_tun = $request->ff_ventre_tun;
            $mesure->f_poitrine_tun = $request->f_poitrine_tun;
            $mesure->f_loongueurmanche_tun = $request->f_loongueurmanche_tun;
            $mesure->f_epaule_tun = $request->f_epaule_tun;
           
            $mesure->save();
            $client = Client::where('id',$request->client_id)->first();
            $client->mesuresfem_id = $mesure->id;
            $client->save();

          }else{

            $mesure = $check_client;
            $mesure->client_id = $request->client_id;

    
            $mesure->commentaire_tun = $request->commentaire_tun;
            $mesure->f_col_tun = $request->f_col_tun;
            $mesure->f_coude_tunn = $request->f_coude_tunn;
            $mesure->f_tourmanche_tun = $request->f_tourmanche_tun;
            $mesure->f_poignet_tun = $request->f_poignet_tun;
            $mesure->f_longueurhhaut_tun = $request->f_longueurhhaut_tun;
            $mesure->ff_ventre_tun = $request->ff_ventre_tun;
            $mesure->f_poitrine_tun = $request->f_poitrine_tun;
            $mesure->f_loongueurmanche_tun = $request->f_loongueurmanche_tun;
            $mesure->f_epaule_tun = $request->f_epaule_tun;
            
           
          
            
            $mesure->save();
             
          }

          return response()->json([
            'message' => 'les mesures de la tunique sont modifiées avec succès',
            'state' => 'ok',
        ],200);

    }






    

// end of class

}
