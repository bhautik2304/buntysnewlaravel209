@extends('layouts.app')
@section('title',$data[0]['page_title'])
@section('header',$data[0]['meta_discription'])
@section('keywords',$data[0]['keyword'])
@section('robots',checkrobost($data[0]['robbost']))
@section('content')
<div class="container m-5 py-3">
    <div class="d-flex justify-content-center align-content-center my-5 py-5">
        <h1>{{$data[0]['Heading']}}</h1>
    </div>
    <div class="container">
        {!!$data[0]['discription']!!}
    </div>
</div>
@section('js')

@endsection
@endsection
