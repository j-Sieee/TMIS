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
      <td><button type="button" id="asdaasd" class="btn btn-outline-dark btn-sm deleteApplicant" data-id="{{$applicant_info->applicant_id}}"> Delete</button></td>
      
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


<script>
$("#asdaasd").click(function(){
  alert("click");


    // var id = $(this).data("id");
    // var token = $("meta[name='csrf-token']").attr("content");

    // alert(id);
   
//     $.ajax(
//     {
//         url: "users/"+id,
//         type: 'DELETE',
//         data: {
//             "id": id,
//             "_token": token,
//         },
//         success: function (){
//             console.log("it Works");
//         }
//     });
   
});


</script>