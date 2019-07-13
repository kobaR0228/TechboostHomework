@extends('layouts.profile')
@section('title', '登録済みニュースの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール</h2>
        </div>

        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="20%">id</th>
                                <th width="20%">名前</th>
                                <th width="20%">性別</th>
                                <th width="20%">趣味</th>
                                <th width="20%">自己紹介</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <th>{{ $profile->id }}</th>
                                    <td>{{ str_limit($profile->name, 100) }}</td>
                                    <td>{{ str_limit($profile->gender, 100) }}</td>
                                    <td>{{ str_limit($profile->hobby, 250) }}</td>
                                    <td>{{ str_limit($profile->introduction, 250) }}</td>
                                    <td><a href="{{ action('Admin\ProfileController@edit', ['id' => $profile->id]) }}" class="btn btn-primary">編集</a></td>
                                </tr>
                                
                         

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection