@extends('layouts.app')
@section('title','Home')
@section('content')
<x-banner/>
@section('js')
   <script>
 function appoitment() {
    const name=$('#Name').val()
    const mobaile=$('#Mobaile').val()
    const servicecategury=$('#Servicecategury').val()
    const service=$('#Service').val()
    const appoitmendata={
        name:name,
        mobaile:mobaile,
        servicecategury:servicecategury,
        service:service

    }
    console.log(appoitmendata);

    // $.ajax({
    //     type: "post",
    //     url: "url",
    //     data: ,
    //     dataType: "dataType",
    //     success: function (response) {

    //     }
    // });
}
   </script>
@endsection
@endsection
