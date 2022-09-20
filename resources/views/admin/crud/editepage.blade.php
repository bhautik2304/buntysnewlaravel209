@extends('admin.layouts.app')

{{-- page Title --}}
@section('title','Edite Page')

{{-- Page Header --}}
@section('header')
<x-admin.contentheder title='Edite Page'/>
@endsection

{{-- page content --}}
@section('content')
<div class="container">
    <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Name</label>
          <input type="name" class="form-control bg-dark" value="{{$data->name}}"  id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Page Slug</label>
          <input type="password" class="form-control" value="{{$data->name}}" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Page Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="20">    
          </textarea>
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
</div>
@endsection
