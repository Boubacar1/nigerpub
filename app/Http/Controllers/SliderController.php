<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
session_start();

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.add_slider');
    }

    public function save_slider(Request $request)
    {
    
    $data=array();
    $data['text_slider'] = $request->text_slider;
    $data['statut_publication'] = $request->statut_publication;
    $image=$request->file('image_slider');
    if ($image) {
        $image_name=Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='slider/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);

        if ($success) {
            $data['image_slider']=$image_url;
                DB::table('tbl_slider')->insert($data);
                Session::put('message', 'Slider ajouté !!');
                return Redirect::to('/add-slider');
            }
        }
            $data['image_slider']='';
            DB::table('tbl_slider')->insert($data);
                Session::put('message', 'Slider ajouté sans image !');
                return Redirect::to('/add-slider');
    }

    public function all_slider()
    {
        $this->AdminAuthCheck();
        $all_slider = DB::table('tbl_slider')->get();
        $manage_slider = view('admin.all_slider')
            ->with('all_slider', $all_slider);

        return view('admin_layout')
        ->with('admin.all_slider', $manage_slider);
    }
//fonction pour désactiver un slider............................
    public function slider_inactive($id_slider)
    {
        DB::table('tbl_slider')
            ->where('id_slider', $id_slider)
            ->update(['statut_publication'=> 0 ]);
        Session::put('message', 'Slider désactivé !!');
            return Redirect::to('/all-slider');
    }
//fonction pour activer un slider..............................
    public function slider_active($id_slider)
    {
        DB::table('tbl_slider')
            ->where('id_slider', $id_slider)
            ->update(['statut_publication'=> 1 ]);
        Session::put('message', 'Slider activé !!');
            return Redirect::to('/all-slider');
    }
//fonction pour supprimer un slider............................
    public function delete_slider($id_slider)
    {
        DB::table('tbl_slider')
        ->where('id_slider',$id_slider)
        ->delete();      
        Session::get('message', 'Slider supprimé !');
        return Redirect::to('/all-slider');
    }

//fonction pour editer un slider............................
    public function edit_slider($id_slider)
    {
        // $this->AdminAuthCheck();
        $info_slider = DB::table('tbl_slider')
            ->where('id_slider', $id_slider)
            ->first();
        $info_slider = view('admin.edit_slider')
            ->with('info_slider', $info_slider);

        return view('admin_layout')
        ->with('admin.edit_slider', $info_slider);
    }

//fonction pour mettre à jour un slider............................   
    public function update_slider(Request $request ,$id_slider)
    {
        $data = array();
        $data['id_slider'] = $request->id_slider;
        $data['text_slider'] = $request->text_slider;
        $data['image_slider'] = $request->image_slider;
        $data['statut_publication'] = $request->statut_publication;

        DB::table('tbl_slider')
        ->where('id_slider',$id_slider)
        ->update($data);
        Session::get('message', 'slider modifié !');
        return Redirect::to('/all-slider');
    }
}
