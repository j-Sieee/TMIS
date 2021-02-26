@extends('layouts.app')

@section('content')


<div class="container">

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                View Records
            </div>
        </div>
        <div card-body>
        <div class="table-responsive">
        
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Applicant Code</th>
      <th scope="col">Applicant Name</th>
      <th scope="col">Applicant Address</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $applicant_info)
    <tr>

      <th scope="row">{{$applicant_info->applicant_code}}</th>
      <td>{{$applicant_info->NAME}}</td>
      <td>{{$applicant_info->ADDRESS}}</td>
      
      <meta name="csrf-token" content="{{csrf_token()}}">
      <td><button type="button" id="asdaasd" class="btn btn-outline-dark btn-sm deleteApplicant" data-token="{{ csrf_token() }}" data-id="{{$applicant_info->applicant_id}}"> Delete</button></td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>

        </div>
    </div>

</div>

</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

jQuery(document).ready(function () {


        jQuery(".deleteApplicant").click(function(){
    
          var id = $(this).data("id");
          // alert(id);
        var token = $(this).data("token");
        $.ajax(
        {
            url: "view/"+id,
            type: 'DELETE',
            dataType: "JSON",
            data: {
                "id": id,
                "_method": 'DELETE',
                "_token": token,
            },
            success: function ()
            {
                console.log("it Work");
            }
        });

        console.log("It failed");
      });



})
</script>

