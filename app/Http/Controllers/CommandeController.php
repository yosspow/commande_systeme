<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Console\CommandMutex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('form',['products'=>Produit::all()]);
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
    public function store(Request $request)
    {
        $request->validate([
            'name'=> ['required'],
            'email'=> ['required'],
            'contact'=> ['required'],
        ]);
      $commande = Commande::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'contact'=> $request->contact,
        'product_id' => $request->product

       ]);
       $commande->details_commande()->create([
        'tracking'=> 'ordered',
        'shiping'=>30.33,



       ]);
       return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('commandes')
        ->join('details_commandes', 'commandes.id', '=', 'details_commandes.commande_id') // joining the contacts table , where user_id and contact_user_id are same
        ->join('produits', 'commandes.product_id', '=', 'produits.id')
        ->select('commandes.*', 'details_commandes.*','produits.price','produits.name as product')
        ->where('commandes.id',$id)
        ->get();



       return view('commande-details',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit',['commande'=>Commande::findOrFail($id)]);
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
        $request->validate([
            'name'=> ['required'],
            'email'=> ['required'],
            'contact'=> ['required'],
        ]);

       $ch = Commande::where('id',$id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'contact'=> $request->contact,
          
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     Commande::where('id',$id)->delete();
     return redirect('/')->with('deleted' ,'the commande is successfully deleted');
    }
}
