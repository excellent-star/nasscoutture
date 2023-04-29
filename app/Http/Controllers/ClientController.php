<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ClientController extends Controller
{
    //

    public function add_client()
    {
            return view('pages.add_client');
    }

    public function create_client(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tel' => 'required|unique:clients',
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
        ],

        [
            'nom.required'  =>'le nom est obligatoire',
            'prenom.required' =>'le prénom est obligatoire',
            'tel.required'=>'le téléphone est obligatoire',
            'sexe.required'=> 'le sexe est obligatoire',
            'tel.unique' => 'un client avec ce numero existe déjà'
        ]
    );


 
        if ($validator->fails()) {
            return redirect('add-client')
                        ->withErrors($validator)
                        ->withInput();
        }

        // if it's ok

        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->sexe = $request->sexe;
        $client->tel = $request->tel;
        
        $client->save();

        // return redirect('add-client')->with('added','Client ajouté avec succès');
        if($client->sexe=="M")
            return redirect()->route('man_sizes',$client->id);
        else 
            return redirect()->route('woman_sizes',$client->id);


    }

    public function list_client()
    {

        $clients = Client::orderBy('id', 'DESC')->get();
        return view('pages.list_client',['clients'=>$clients]);
    }

    public function edit_client($id)
    {
        $client = Client::findOrFail($id);
       
        return view('pages.add_client',['client'=>$client]);
    }

    public function update_client(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tel' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
        ],

        [
            'nom.required'  =>'le nom est obligatoire',
            'prenom.required' =>'le prénom est obligatoire',
            'tel.required'=>'le téléphone est obligatoire',
            'sexe.required'=> 'le sexe est obligatoire',
            // 'tel.unique' => 'un client avec ce numero existe déjà'
        ]
    );

    if ($validator->fails()) {
        return redirect('add-client')
                    ->withErrors($validator)
                    ->withInput();
    }

    $client = Client::find($request->client_id);
    $client->nom = $request->nom;
    $client->prenom = $request->prenom;
    $client->sexe = $request->sexe;
    $client->tel = $request->tel;

    $client->save();

    if($client->sexe=="M")
            return redirect()->route('man_sizes',$client->id);
    else 
            return redirect()->route('woman_sizes',$client->id);

    // return redirect('add-client')->with('updated','Client mis à jour avec succès');


    }

    public function list_male(){

        $clients = Client::orderBy('id', 'DESC')->where('sexe','M')->get();
        return view('pages.list_client',['clients'=>$clients]);
    }

    public function list_female()
    {
        $clients = Client::orderBy('id', 'DESC')->where('sexe','F')->get();
        return view('pages.list_client',['clients'=>$clients]);
    }



}
