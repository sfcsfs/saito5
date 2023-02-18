@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    以下の内容で登録します。よろしいですか?
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="edit_table">
                        <form method="POST" action="edit_finish">
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
                                    <td>{{ $data['id'] }}</td>
                                    <td>{{ $data['name'] }}</td>
                                    <td>{{ $data['email'] }}</td>

                                    <td>{{ $data['comment'] }}</td>
                                    <td>{{ $data['created_at'] }}</td>
                                    <td>{{ $data['updated_at'] }}</td>
                                    <td>{{ $data['e'] }}</td>
                                    <td>{{ $data['ed'] }}</td>
                                    <td><input type="submit" value="変更を反映する"></td>
                                    <input type="hidden" value="{{ $data['id'] }}" name="edit_id">
                                    <input type="hidden" value="{{ $data['name'] }}" name="edit_name">
                                    <input type="hidden" value="{{ $data['email'] }}" name="edit_email">

                                    <input type="hidden" value="{{ $data['comment'] }}" name="edit_comment">
                                    <input type="hidden" value="{{ $data['e'] }}" name="e">
                                    <input type="hidden" value="{{ $data['ed'] }}" name="ed">
                                </tr>
                            </table>
                            @csrf
                        </form>

                    </div>
                    <div>
                        <form method="post" action="edit">
                            <input type="hidden" value="{{ $data['id'] }}" name="edit_id">
                            <input type="hidden" value="{{ $data['name'] }}" name="edit_name">
                            <input type="hidden" value="{{ $data['email'] }}" name="edit_email">

                            <input type="hidden" value="{{ $data['comment'] }}" name="edit_comment">
                            <input type="hidden" value="{{ $data['e'] }}" name="e">
                            <input type="hidden" value="{{ $data['ed'] }}" name="ed">
                            <input type="submit" value="戻る">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection