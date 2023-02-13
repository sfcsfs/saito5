<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function result(Request $request)
    {
        $category = $request -> input('search_category');
        if (empty($category)){
            $x = "検索項目を選択してください";
            $category_name = ['ID','NAME','COMMENT'];
            return view('user/search',['NAME' => $category_name,'X' => $x]); //検索項目未設定は検索画面に強制送還
        }
        $word = $request -> input('search_word');
        $search_data = array(
        	'category' => $category,
        	'word' => $word
        );
        $user_data = User::where($category, 'like', "%$word%") -> get();
        $Auth_data = Auth::id();
        $my_data = User::where('id', $Auth_data) -> first();#自分のデータを取り出す
        return view('user/result',['Search' => $search_data, 'UUser' => $user_data, 'My_data' => $my_data]);
    }
}