<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
         //Fonction qui va permettre a l'administrateur de se connecter
     public function login(Request $request){

        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        //Variable pour récuperer le email et le mot de passe
        $credentials = $request->only(['email','password',]);
        if (Auth::attempt($credentials)) {
            $authUser = Auth::user();
            if ($authUser->role=='admin') {
                return response()->json([
                    'status'=>'Done',
                    'message'=>'Vous etes connecter en tant qu\'administrateur',
                ]);
            }
        } else{
            return response()->json([
                'status'=>'Error',
                'message'=>'Impossible de vous connecter',
            ]);

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // Fonction pour déconnecter l'administrateur par ID
   public function logout(Request $request)
   {
       $userId = 1; // ID de l'utilisateur administrateur

       $user = User::find($userId);

       if ($user && $user->role == 'admin') {
           Auth::logoutOtherDevices($request->password);//Déconnexion de l'utilisateur des autres appareils en utilisant le mot de passe fourni dans la requête

           return response()->json([
               'status' => 'Done',
               'message' => 'Vous avez été déconnecté en tant qu\'administrateur.',
           ]);
       }
   
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
