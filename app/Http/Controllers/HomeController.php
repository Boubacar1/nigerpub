<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class HomeController extends Controller
{
  public function index()
        {
            $toute_societe_publiee = DB::table('tbl_societe')
                ->join('tbl_categorie','tbl_societe.id_categorie','=','tbl_categorie.id_categorie')
                ->join('tbl_produit','tbl_societe.id_produit','=','tbl_produit.id_produit')
                ->select('tbl_societe.*','tbl_categorie.nom_categorie','tbl_produit.nom_produit')
                ->where('tbl_societe.statut_publication',1)
                ->limit(9)
                ->get();
        $gerer_societe_publiee = view('pages.home_content')
        ->with('toute_societe_publiee', $toute_societe_publiee);
        return view('layout')
        ->with('pages.home_content', $gerer_societe_publiee);
        //return view('pages.home_content');
        }
    
        public function afficher_societe_par_categorie($id_categorie)
        {
            $societe_par_categorie = DB::table('tbl_societe')
                ->join('tbl_categorie','tbl_societe.id_categorie','=','tbl_categorie.id_categorie')
                // ->join('tbl_produit','tbl_societe.id_produit','=','tbl_produit.id_produit')
                ->select('tbl_societe.*','tbl_categorie.nom_categorie')
                ->where('tbl_categorie.id_categorie',$id_categorie)
                ->where('tbl_societe.statut_publication', 1)
                ->limit(18)
                ->get();
        $gerer_societe_par_categorie = view('pages.categorie_par_societe')
        ->with('societe_par_categorie', $societe_par_categorie);
        return view('layout')
        ->with('pages.categorie_par_societe', $gerer_societe_par_categorie);
        }
    
        public function afficher_societe_par_produit($id_produit)
        {
            $societe_par_produit = DB::table('tbl_societe')
                ->join('tbl_categorie','tbl_societe.id_categorie','=','tbl_categorie.id_categorie')
                ->join('tbl_produit','tbl_societe.id_produit','=','tbl_produit.id_produit')
                ->select('tbl_societe.*','tbl_categorie.nom_categorie','tbl_produit.nom_produit')
                ->where('tbl_produit.id_produit',$id_produit)
                ->where('tbl_societe.statut_publication', 1)
                ->limit(18)
                ->get();
        $gerer_societe_par_produit = view('pages.produit_par_societe')
        ->with('societe_par_produit', $societe_par_produit);
        return view('layout')
        ->with('pages.produit_par_societe', $gerer_societe_par_produit);
        }
    
        public function details_societe_par_id($id_societe)
        {
            $societe_par_details = DB::table('tbl_societe')
                ->join('tbl_categorie','tbl_societe.id_categorie','=','tbl_categorie.id_categorie')
                ->join('tbl_produit','tbl_societe.id_produit','=','tbl_produit.id_produit')
                ->select('tbl_societe.*','tbl_categorie.nom_categorie','tbl_produit.nom_produit')
                ->where('tbl_societe.id_societe',$id_societe)
                ->where('tbl_societe.statut_publication', 1)
                ->first();
        $gerer_societe_par_details = view('pages.details_societe')
        ->with('societe_par_details', $societe_par_details);
        return view('layout')
        ->with('pages.details_societe', $gerer_societe_par_details);
    }

}
