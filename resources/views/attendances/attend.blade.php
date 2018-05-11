@extends('master')
@section('title', '出席登録 | 出席管理')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <attendance-form></attendance-form> <!-- これも Vue Component -->
        </div>
    </div>
@endsection