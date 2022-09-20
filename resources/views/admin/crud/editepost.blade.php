@extends('admin.layouts.app')

{{-- page Title --}}
@section('title','Edite Blog Post')

{{-- Page Header --}}
@section('header')
<x-admin.contentheder title='Edite Blog Post'/>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
{{-- page content --}}
@section('content')
<div id="summernote"></div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $('#summernote').summernote({
      placeholder: 'Hello Bootstrap 4',
      tabsize: 2,
      height: 100
    });
  </script>
@endsection
