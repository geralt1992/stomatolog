<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info;
use App\Mail\Stomatologija_Dakovic_Kovacevic;
use App\Mail\Nova_poruka;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class Main_Controller extends Controller
{

public function main(){

    return view('site_content');
}

public function save_info(Request $request){

    $info = new info;
    $info->save_infoo($request);

    $name = $request->name;
    $subject = $request->subject;
    $mail = $request->email;
    $type = $request->type;

    $dr_mail = 'doktorica@gmail.com';

    Mail::to($mail)->send(new Stomatologija_Dakovic_Kovacevic($name));
    Mail::to($dr_mail)->send(new Nova_poruka($name , $subject , $mail , $type));

    return redirect()->route('main')->with('success' , 'Uspješno posalno, hvala Vam!');
}


public function ostalo(){

    $data_pohvala = DB::table('infos')->where('type' , '=' , 'pohvala' )->get();
    $data_kritika = DB::table('infos')->where('type' , '=' , 'kritika' )->get();
    return view('site_content_part_2' , ['kljuc' => $data_pohvala , 'kljuc_2'=> $data_kritika]);
}



}
