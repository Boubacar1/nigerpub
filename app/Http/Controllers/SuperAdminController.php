<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SuperAdminController extends Controller
{    
    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin.dashboard');
    }

    public function deconnexion()
    {
        Session::flush();
        return Redirect::to('/admin');
    }
 /* la fonction AdminAuthCheck empêche l'utilisateur d'effectuer un retour
  * sur l'interface d'administration une fois qu'il s'est déconnecté
  */
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
