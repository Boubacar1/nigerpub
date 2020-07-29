<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategorieController extends Controller
{
    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin.add_categorie');
    }

    // pour afficher toutes les informations sur les categories
    public function all_categorie()
    {
        $this->AdminAuthCheck();
        $info_all_categorie = DB::table('tbl_categorie')->get();
        $gerer_categorie = view('admin.all_categorie')
            ->with('info_all_categorie', $info_all_categorie);
        return view('admin_layout')
            ->with('admin.all_categorie', $gerer_categorie);
        //return view('admin.all_category');
    }

    public function save_categorie(Request $request)
    {
            $data = array();
            $data['id_categorie'] = $request->id_categorie;
            $data['nom_categorie'] = $request->nom_categorie;
            $data['description_categorie'] = $request->description_categorie;
            $data['statut_publication'] = $request->statut_publication;
            DB::table('tbl_categorie')->insert($data);
            Session::put('message', 'Catégorie ajoutée !!');
            return Redirect::to('/add-categorie');

    }
    
    public function categorie_inactive($id_categorie)
    {
        DB::table('tbl_categorie')
            ->where('id_categorie', $id_categorie)
            ->update(['statut_publication'=> 0 ]);
        Session::put('message', 'Catégorie désactivée !!');
            return Redirect::to('/all-categorie');
    }

    public function categorie_active($id_categorie)
    {
        DB::table('tbl_categorie')
            ->where('id_categorie', $id_categorie)
            ->update(['statut_publication'=> 1 ]);
        Session::put('message', 'Catégorie activée !!');
            return Redirect::to('/all-categorie');
    }

    public function edit_categorie($id_categorie)
    {
        $this->AdminAuthCheck();
        $info_categorie = DB::table('tbl_categorie')
            ->where('id_categorie', $id_categorie)
            ->first();
        $info_categorie = view('admin.edit_categorie')
            ->with('info_categorie', $info_categorie);

        return view('admin_layout')
        ->with('admin.edit_categorie', $info_categorie);

        //return view('admin.edit_category');
    }

    public function update_categorie(Request $request ,$id_categorie)
    {
        $data = array();
        $data['nom_categorie'] = $request->nom_categorie;
        $data['description_categorie'] = $request->description_categorie;

        DB::table('tbl_categorie')
        ->where('id_categorie',$id_categorie)
        ->update($data);        
        Session::get('message', 'Catégorie modifiée !');
        return Redirect::to('/all-categorie');
    }
    
    public function delete_categorie($id_categorie)
    {
        DB::table('tbl_categorie')
        ->where('id_categorie',$id_categorie)
        ->delete();      
        Session::get('message', 'Catégorie supprimée !');
        return Redirect::to('/all-categorie');
    }

    public function AdminAuthCheck()
    {
        $admin_id=Session::get('admin_id');
        if ($admin_id) {
            return;
        }else{
            return Redirect::to('/admin')->send();
        }
    }
}
