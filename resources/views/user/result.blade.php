@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    検索結果
                </div>
                <div class="card-body">
                	 <div class="result">
                        <form method="post" action="search">
                        	<div class="category">
                        		検索項目: {{ $Search['category'] }}
                        	</div>
                        	<div class="word">
                        		検索ワード: {{ $Search['word'] }}
                        	</div>
                        	@if ($UUser->isNotEmpty()) <!--ただの!emptyでは全部すり抜けるので修正-->
                        	<table>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>COMMENT</th>
                                    <th>回答の一致数(相性度)</th>
                                    
                                </tr>
                                @foreach($UUser as $Data)
                                <tr>
                                @php
                                    $tt = $My_data['はいなら0いいえなら1　左からスタート現在8個'];
                                    $cc = $Data['はいなら0いいえなら1　左からスタート現在8個'];
                                    $kazu= mb_strlen($cc);
                                    $yyy = 0;
                                    for($j=0;$j<$kazu;$j++){
                                        $e1 = substr($tt, $j, 1);
                                        $e2 = substr($cc, $j, 1);


                                        if($e1 == $e2){
                                            $yyy = $yyy + 1;
                                        }
                                    }
                                    
                                    
                    
                                    
                                    @endphp
                                    
                                    <td>{{ $Data['id'] }}</td>
                                    <td>{{ $Data['name'] }}</td>
                                    <td>{{ $Data['comment'] }}</td>
                                    <td>{{ $yyy }}</td>

                                    
                                </tr>
                                @endforeach    
                            </table>
                            @else
                        	<p>検索条件に一致するユーザーは登録されていません</p>
                        	@endif
                        	<input type="hidden" value="{{ $Search['category'] }}" name="search_category" >
                            <input type="hidden" value="{{ $Search['word'] }}" name="search_word" >
                            <input type="submit" value="検索画面にもどる">
                            @csrf
                        </form>
                    </div>
                    <div class="to_home">
                    <a href="/home">ホーム画面へ</a>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
