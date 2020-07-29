<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
session_start();

class SocieteController extends Controller
{
    public function AdminAuthCheck()
    {
        $admin_id=Session::get('admin_id');
        if ($admin_id) {
            return;
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin.add_societe');
    }

    public function all_societe()
    {
        $this->AdminAuthCheck();
        $info_all_societe = DB::table('tbl_societe')
                        ->join('tbl_categorie','tbl_societe.id_categorie','=','tbl_categorie.id_categorie')
                        ->join('tbl_produit','tbl_societe.id_produit','=','tbl_produit.id_produit')
                        ->select('tbl_societe.*','tbl_categorie.nom_categorie','tbl_produit.nom_produit')
                        ->get();
           //echo "<pre>";
        //print_r($info_all_societe);
        //echo "</pre>";
       // exit();
         $gerer_societe = view('admin.all_societe')
            ->with('info_all_societe', $info_all_societe);
         return view('admin_layout')
                ->with('admin.all_societe', $gerer_societe);
    
    }

    public function save_societe(Request $request)
    {
        $data = array();
            $data['nom_societe'] = $request->nom_societe;
            $data['id_categorie'] = $request->id_categorie;
            $data['id_produit'] = $request->id_produit;
            $data['societe_short_description'] = $request->societe_short_description;
            $data['societe_long_description'] = $request->societe_long_description;
            $data['statut_publication'] = $request->statut_publication;
            
            $image=$request->file('image_societe');
            if ($image) {
                $image_name=str_random(20);
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='image/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                if ($success) {
                    $data['image_societe']=$image_url;
                    DB::table('tbl_societe')->insert($data);
                    Session::put('message', 'Société ajoutée !!');
                    return Redirect::to('/add-societe');
                }
            }
            $data['image_societe']='';
            DB::table('tbl_societe')->insert($data);
                    Session::put('message', 'société ajoutée sans image !!');
                    return Redirect::to('/add-societe');
    }

    public function societe_inactive($id_societe)
    {
        DB::table('tbl_societe')
            ->where('id_societe', $id_societe)
            ->update(['statut_publication'=> 0 ]);
        Session::put('message', 'société désactivée !!');
            return Redirect::to('/all-societe');
    }

    public function societe_active($id_societe)
    {
        DB::table('tbl_societe')
            ->where('id_societe', $id_societe)
            ->update(['statut_publication'=> 1 ]);
        Session::put('message', 'société activée !!');
            return Redirect::to('/all-societe');
    }

    public function edit_societe($id_societe)
    {
        $this->AdminAuthCheck();
        $info_societe = DB::table('tbl_societe')
            ->where('id_societe', $id_societe)
            ->first();
        $info_societe = view('admin.edit_societe')
            ->with('info_societe', $info_societe);

        return view('admin_layout')
        ->with('admin.edit_societe', $info_societe);
    }

    public function update_societe(Request $request ,$id_societe)
    {
        $data = array();
        $data['nom_societe'] = $request->nom_societe;
        $data['id_categorie'] = $request->id_categorie;
        $data['id_produit'] = $request->id_produit;
        $data['societe_short_description'] = $request->societe_short_description;
        $data['societe_long_description'] = $request->societe_long_description;
        $data['image_societe'] = $request->image_societe;
        $data['statut_publication'] = $request->statut_publication;

        DB::table('tbl_societe')
        ->where('id_societe',$id_societe)
        ->update($data);
        Session::get('message', 'société modifiée !');
        return Redirect::to('/all-societe');
    }

    public function delete_societe($id_societe)
    {
        DB::table('tbl_societe')
        ->where('id_societe',$id_societe)
        ->delete();    
        Session::get('message', 'société supprimée !');
        return Redirect::to('/all-societe');
    }
}
