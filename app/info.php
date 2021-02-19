<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{

    public function save_infoo($request){

        $request->validate([

            'name' => 'required',
            'email' => 'email|required',
            'type' => 'required',
            'subject' => 'required',
        ]);


        $new_info = new info;
        $new_info->name = $request->name;
        $new_info->email = $request->email;
        $new_info->type = $request->type;
        $new_info->subject = $request->subject;
        $new_info->avatar = $request->avatar;

        $new_info->save();
        }


}
