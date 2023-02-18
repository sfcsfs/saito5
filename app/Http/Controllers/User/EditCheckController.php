<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class EditCheckController extends Controller
{
    public function check(Request $request)
    {
        $id = $request->input('edit_id');
        $name = $request->input('edit_name');
        $email = $request->input('edit_email');
        //$works_id = $request -> input('edit_works_id');
        $comment = $request->input('edit_comment');
        $seibetu = $request->input('e');
        $nennrei = $request->input('ed');
        //$flag = $request -> input('edit_flag');
        $edit_database = User::where('id', $id)->first();
        $edit_data = array(
            'id' => $id,
            'name' => $name,
            'email' => $email,
            //'works_id' => $works_id,
            'comment' => $comment,
            'created_at' => $edit_database['created_at'],
            'updated_at' => $edit_database['updated_at'],

            'e' => $seibetu,
            'ed' => $nennrei,
            //'delete_flag' => $flag
        );
        return view('user/edit_check', ['data' => $edit_data]);
    }
}
