<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Kaitou;
use Illuminate\Pagination\Paginator;



class EditController extends Controller
{
    public function edit()
    {
        $Auth_data = Auth::id();
        $User_data = User::where('id', $Auth_data)->first();
        //$items = Kaitou::with("user")->get();
        $items = Kaitou::paginate(8); //セッションを使えばよりうまくできるか

        
        return view('user/edit', ['User' => $User_data, "items" => $items,
        ]);
    }
    public function return_check(Request $request)
    {
        $id = $request->input('edit_id');
        $edit_data = User::where('id', $id)->first();
        $name = $request->input('edit_name');
        $email = $request->input('edit_email');
        //$works_id = $request -> input('edit_works_id');
        $comment = $request->input('edit_comment');
        $seibetu = $request->input('e');
        $nennrei = $request->input('ed');
        //$flag = $request -> input('edit_flag');
        $User_data = array(

            'id' => $id,
            'name' => $name,
            'email' => $email,
            //'works_id' => $works_id,
            'comment' => $comment,
            'created_at' => $edit_data['created_at'],
            'updated_at' => $edit_data['updated_at'],
            '性別' => $seibetu,
            '年齢' => $nennrei,
            #'delete_flag' => $flag
        );
        return redirect()->route('edit');  #とりあえず初期画面に戻すことに

    }
}
