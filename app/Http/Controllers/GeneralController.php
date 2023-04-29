<?php

namespace App\Http\Controllers;

use App\Models\Avance;
use App\Models\Client;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class GeneralController extends Controller
{
    //
    public function login()
    {
        $user = User::where('email','nasscouture@gmail.com')->first();

        if($user==null){
             
            $newUser = new User();
            $newUser->email = "nasscouture@gmail.com";
            $newUser->name = "nasscouture";
            $newUser->password = Hash::make('123456');
            $newUser->save();
        }

        return view('pages.page-login');
    }

    public function log_in(Request $request){

        // DB::table('users')->where('id',1)->update(['password'=>Hash::make($request->password)]);
        // return redirect('/');
 
          
          $user = User::where('email','nasscouture@gmail.com')->first();

          if($user!=null)
          {
              if(Hash::check($request->password, $user->password))
              {
                    session()->put('user',$user);
                 return redirect()->route('dashboard');
              }
         
          }

          return redirect('/')->with('status','le mot de pass que vous avez entré est incorrect'); 
          
    }

    public function log_out()
    {

        session()->forget('user');
        session()->flush();

         return redirect('/');
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


    public function edit_password(){

           return view('pages.edit_password');
    }

    public function update_password(Request $request)
    {

    
         $user = DB::table('users')->where('id',session('user')->id)->update([

              'password'=> Hash::make($request->new_code)
         ]);

         return response()->json([
            'message' => 'code secret changé avec succès',
            'state' => 'ok',
        ],200);
    }





    


}
