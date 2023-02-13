<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class EditFinishController extends Controller
{
     public function finish(Request $request)
    {
        $id = $request -> input('edit_id');
        $name = $request -> input('edit_name');
        $email = $request -> input('edit_email');
        //$works_id = $request -> input('edit_works_id');
        $comment = $request -> input('edit_comment');
        $flag = $request -> input('edit_flag');
        $edit_data = User::where('id', $id) -> update([
            'name' => $name,
            'email' => $email,
            //'works_id' => $works_id,
            'comment' => $comment,
            'delete_flag' => $flag
        ]);
        $User_data = User::where('id', $id) -> first();
        return view('user/edit_finish',['data' => $User_data]);
    }
}