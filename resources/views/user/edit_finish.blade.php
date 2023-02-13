@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    以下の内容でユーザー情報を保存しました。
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="edit_table">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <!--<th>WORKS_ID</th>-->
                                <th>COMMENT</th>
                                <th>CREATED_AT</th>
                                <th>UPDATED_AT</th>
                                <th>DELETE_FLAG(0=表示, 1=非表示)</th>
                            </tr>
                            <tr>
                                <td>{{ $data['id'] }}</td>
                                <td>{{ $data['name'] }}</td>
                                <td>{{ $data['email'] }}</td>
                                <!--<td>{{ $data['works_id'] }}</td>-->
                                <td>{{ $data['comment'] }}</td>
                                <td>{{ $data['created_at'] }}</td>
                                <td>{{ $data['updated_at'] }}</td>
                                <td>{{ $data['delete_flag'] }}</td>
                            </tr>    
                        </table>
                    </div>
                    <div>
                        <a href="/home">ホーム画面へ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection