@extends('admin.layouts.app')

{{-- page Title --}}
@section('title',"Page's")

{{-- Page Header --}}
@section('header')
<x-admin.contentheder title="Page's"/>
@endsection
{{-- page content --}}
@section('content')
<div class="container">
    <div class="container">
        <div class="d-flex justify-content-end align-items-center">
            <button onclick="showform()"  class="btn btn-primary"> Create Page </button>
        </div>
    </div>
    <div class="tablesdata">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Page Name</th>
                <th scope="col">Action</th>
                <th scope="col">Show</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $c=0
                @endphp
                @foreach (Services() as $page)
                <tr>
                  <th scope="row">{{$c++}}</th>
                  <td>{{$page['name']}}</td>
                  <td>
                    <a name="" id="" class="btn btn-primary" href="{{url('/admin/pagedelate/'.$page['id'])}}" role="button">Delate</a>
                  </td>
                  <td><a class="btn btn-primary" href="{{url('service/'.$page['slug'])}}" role="button">Show</a></td>
                </tr>
                @endforeach
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
        <form class="createpage">
            <div class="page">
                <center>Page Name</center>
                  <div class="row m-3">
                    <div class="col-6">
                      <input type="text" class="form-control" id="pagename" placeholder="Page Name" aria-label="Page Name">
                    </div>
                    <div class="col-6">
                      <button type="button" class="btn btn-primary" onclick="next()">Create Page Content</button>
                    </div>
                  </div>
            </div>
            <div class="pagedetail">
                <center>Page Detail</center>
                <div class="row m-3">
                  <div class="col-12 m-4">
                    <input type="text" class="form-control" id="pageheading" placeholder="Page Title">
                  </div>
                  <div class="col-12 m-4">
                    <textarea id="description"></textarea>
                  </div>
                  <div class="col-12 m-4">
                    <button type="button" class="btn btn-primary" onclick="nextseo()">Manage Page seo</button>
                </div>
            </div>
            </div>
            <div class="pageseo">
                <center>Page Seo</center>
                <div class="row m-3">
                  <div class="col-12 m-4">
                    <input type="text" class="form-control" id="keyword" placeholder="Page Seo Keyword" aria-label="First name">
                  </div>
                  <div class="col-12 m-4">
                    <textarea id="seodescription"></textarea>
                  </div>
                  <div class="col-12 m-4">
                    <button type="button" class="btn btn-primary" onclick="createpage()">Create Page</button>
                  </div>
                </div>
            </div>
        </form>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
function tooltips() {
    $('.toast').show();
 }
$(document).ready( ()=> {
    $('.createpage').hide();
    });
function showform() {
        $('.createpage').show();
        $('.page').show();
        $('.pagedetail').hide();
        $('.tablesdata').hide();
        $('.pageseo').hide();
    }
function next() {
    $('.page').hide();
    $('.pagedetail').show();
 }
function nextseo() {
    $('.pagedetail').hide();
    $('.pageseo').show();
 }
$('#description').summernote({
      placeholder: 'Page Content Write Hear...',
      tabsize: 2,
    });
$('#seodescription').summernote({
      placeholder: 'Page Description Write Hear...',
    });
function createpage() {
     const pagename=$('#pagename').val()
     const heading=$('#pageheading').val()
     const pagedesc=$('#description').val()
     const pageseokeyword=$('#keyword').val()
     const pageseodesc=$('#seodescription').val()
     const page={
            page:pagename,
            title:heading,
            heading:pagename,
            desc:pagedesc,
            pagekeyword:pageseokeyword,
            pageseodesc:pageseodesc,
        }
        // const url={{url('api/createpage')}}
        $.ajax({
            type: "post",
            url: 'http://localhost:8000/api/createpage',
            data: page,
            success: function (res) {
                if(!res.status){
                   const tostes='<div class="toast" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><strong class="me-auto">Bunty sallon</strong><small>11 mins ago</small><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body">'+res.msg+'.</div></div>'
                    $('#tostes').append(tostes);
                }

                const tostes='<div class="toast" role="alert" aria-live="assertive" aria-atomic="true"><div class="toast-header"><strong class="me-auto">Bunty sallon</strong><small>11 mins ago</small><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body">'+res.msg+'.</div></div>'
                    $('#tostes').append(tostes);
            }
        });
     }
    </script>
@endsection
