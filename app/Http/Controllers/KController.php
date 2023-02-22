<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Kaitou;

class KController extends Controller
{
    public function k(Request $request)
    {
        $u = 5; #$dから抜き出すための初期変数
        $hh = 0;
        $Auth_data = Auth::id();
        $User_data = User::where('id', $Auth_data)->first(); #ログインしている人の情報を取得
        $r = mb_strlen($User_data->はいなら0いいえなら1　左からスタート現在8個); #回答の数を取得
        for ($y = 1; $y < $r + 1; $y++) {
            $d = $request->input("$y");
            $g = substr($d, 5, 1); #$dの必要なところだけ取り出し
            if ($y === 1) {
                $hh = $g; #格納変数召喚の儀
            } else {
                $hh = $hh . $g; #あとは足していけば$User_data->はいなら0いいえなら1　左からスタート現在8個が更新される
            }
        }


        $User_data->はいなら0いいえなら1　左からスタート現在8個 = $hh;
        $User_data->save();
        return redirect()->route('edit');
    }



    /*
    public function k2(Request $request)
    {
        
        
        $form = $request->all();
       
        

        $kaitou = new Kaitou;
        if ($kaitou->id > 8){
            return redirect("/home/edit");

        }
        
        unset($form["_token"]);
        $kaitou->fill($form)->save();
        return redirect("/home/edit");  //現在は問題を増やすボタンは押せないように

    }*/
}
