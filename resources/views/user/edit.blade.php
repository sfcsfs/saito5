@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>プロフィールの変更したい箇所に値を入力してください</h1>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="edit_table">
                        <form method="post" action="edit_check">
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <!--<th>WORKS_ID</th>-->
                                    <th>COMMENT</th>
                                    <th>CREATED_AT</th>
                                    <th>UPDATED_AT</th>
                                    <th>性別</th>
                                    <th>年齢</th>
                                </tr>
                                <tr>
                                    <td>
                                        {{ $User['id'] }}
                                        <input type="hidden" value="{{ $User['id'] }}" name="edit_id">
                                    </td>
                                    <td><input type="text" value="{{ $User['name'] }}" name="edit_name"></td>
                                    <td><input type="text" value="{{ $User['email'] }}" name="edit_email"></td>

                                    <td><input type="text" value="{{ $User['comment'] }}" name="edit_comment"></td>
                                    <td>{{ $User['created_at'] }}</td>
                                    <td>{{ $User['updated_at'] }}</td>

                                    <td><input type="text" value="{{ $User['性別'] }}" name="e"></td>
                                    <td><input type="text" value="{{ $User['年齢'] }}" name="ed"></td>
                                    <td><input type="submit" value="プロフィールの変更確認画面へ"></td>
                                </tr>
                            </table>
                            @csrf
                        </form>
                    </div>
                    <br>
                    <br>
                    <h1>回答の変更したい箇所にチェックをしてください</h1>
                    <!--$cにAuthのユーザーの回答すべてを代入-->
                    <!--$dに$cの回答の現在の番号を代入そして$eでそこの部分の回答取り出し $fはラジオボタンのvalue-->
                    @foreach ($items as $a)
                    @php
                    $c = $User['はいなら0いいえなら1　左からスタート現在8個'];
                    $d = $a->id;
                    $e = substr($c, $d-1, 1);
                    $f = 0
                    @endphp



                    <form method="post" action="k">
                        <div class="form-group row">

                            <label for={{$a->id}} class="col-md-4 col-form-label text-md-right">{{$a->text}}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineRadio01" name={{$d}} value="{{$d.'sono0'}}" @if($e==0)checked="checked" @endif>
                                    <label class="form-check-label" for="inlineRadio01">はい</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineRadio02" name={{$d}} value="{{$d.'sono1'}}" @if($e==1)checked="checked" @endif>
                                    <label class="form-check-label" for="inlineRadio02">いいえ</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineRadio03" name={{$d}} value="{{$d.'sono2'}}" @if($e==2)checked="checked" @endif>
                                    <label class="form-check-label" for="inlineRadio03">どうしても答えられない・答えたくない</label>
                                </div>
                                <br>
                                <br>

                            </div>
                        </div>



                        @endforeach

                        <div>
                            <input type="submit" value="回答を変更する">
                            @csrf
                    </form>
                    <br>
                    <input type="button" value="戻る" onclick="history.back()">
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection