<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();


class ProduitController extends Controller
{
    public function index()
    {
        return view('admin.add_produit');
    }

    public function save_produit(Request $request)
    {
        $data = array();
            $data['id_produit'] = $request->id_produit;
            $data['nom_produit'] = $request->nom_produit;
            $data['description_produit'] = $request->description_produit;
            $data['statut_publication'] = $request->statut_publication;

            DB::table('tbl_produit')->insert($data);
            Session::put('message', 'Produit ajouté !!');
            return Redirect::to('/add-produit');
    }

    public function all_produit()
    {
        $info_tout_produit = DB::table('tbl_produit')->get();
        $gerer_produit = view('admin.all_produit')
            ->with('info_tout_produit', $info_tout_produit);

        return view('admin_layout')
        ->with('admin.all_produit', $gerer_produit);
        //return view('admin.all_produit');
    }

    public function delete_produit($id_produit)
    {
        DB::table('tbl_produit')
        ->where('id_produit',$id_produit)
        ->delete();    
        Session::get('message', 'Produit supprimé !');
        return Redirect::to('/all-produit');
    }
    
    public function produit_inactive($id_produit)
    {
        DB::table('tbl_produit')
            ->where('id_produit', $id_produit)
            ->update(['statut_publication'=> 0 ]);
        Session::put('message', 'Produit désactivé !!');
            return Redirect::to('/all-produit');
    }

    public function produit_active($id_produit)
    {
        DB::table('tbl_produit')
            ->where('id_produit', $id_produit)
            ->update(['statut_publication'=> 1 ]);
        Session::put('message', 'Produit activé !!');
            return Redirect::to('/all-produit');
    }

    public function edit_produit($id_produit)
    {
        $info_produit = DB::table('tbl_produit')
            ->where('id_produit', $id_produit)
            ->first();
        $info_produit = view('admin.edit_produit')
            ->with('info_produit', $info_produit);

        return view('admin_layout')
        ->with('admin.edit_produit', $info_produit);

        //return view('admin.edit_prdouit');
    }

    public function update_produit(Request $request ,$id_produit)
    {
        $data = array();
        $data['nom_produit'] = $request->nom_produit;
        $data['description_produit'] = $request->description_produit;

        DB::table('tbl_produit')
        ->where('id_produit',$id_produit)
        ->update($data);        
        Session::get('message', 'Produit modifié !');
        return Redirect::to('/all-produit');
    }
}
