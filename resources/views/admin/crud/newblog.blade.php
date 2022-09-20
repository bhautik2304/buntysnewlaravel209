@extends('admin.layouts.app')

{{-- page Title --}}
@section('title','New Blog')

{{-- Page Header --}}
@section('header')
<x-admin.contentheder title='New Blog'/>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
{{-- page content --}}
@section('content')
<textarea  id="content"></textarea>
<button onclick="datashow()"></button>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $('#content').summernote({
      placeholder: 'Page write Content Hear...',
      tabsize: 2,
    });
    function datashow() {

     }
  </script>
@endsection
