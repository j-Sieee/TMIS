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
    
      <td>
      <a type="button" onclick="update_Applicant({{$applicant_info->applicant_id}})" class="btn btn-outline-dark btn-sm updateApplicant" data-token="{{ csrf_token() }}" data-id="{{$applicant_info->applicant_id}}">Update</a>
      <button type="button" onclick="delete_Applicant({{$applicant_info->applicant_id}})"  class="btn btn-outline-dark btn-sm deleteApplicant" data-token="{{ csrf_token() }}" data-id="{{$applicant_info->applicant_id}}"> Delete</button></td>
      <!-- onclick="delete_Student({{$applicant_info->applicant_id}})" -->
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Applicant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
              <form method="get" action= "">
                    @csrf
            
         
                   

                  <div class="form-row">
                    <div class="form-group col-md-2">
                      <label for="inputCode">Code</label>
                      <input type="text" class="form-control" name="inputCode" placeholder="Code" value=""> 
                                  
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputfname">First Name</label>
                      <input type="text" class="form-control" name="inputfname" placeholder="First Name" value="">
                    </div>
                 </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputmname">Middle Name</label>
                      <input type="text" class="form-control" name="inputmname" placeholder="Middle Name" value="">
                    </div>
                    <div class="form-group col-md-6" >
                      <label for="inputlname">Last Name</label>
                      <input type="text" class="form-control" name="inputlname" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" name="inputAddress" placeholder="House Number/Street">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputBarangay">Barangay</label>
                      <input type="text" class="form-control" name="inputBarangay" placeholder="Barangay">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCity">Town/City</label>
                      <input type="text" class="form-control" name="inputCity" placeholder="City/Town">
                    </div>                        
                  </div>
                  <div class="form-group"> 
                        Transformer Application Type:
                      <select name="appTypeId" class="custom-select mr-sm-1" id="inlineFormCustomSelect">
                          <option value="asdasd"></option>
                      </select>
                    </div>

                  <div class="form-group">
                  <div class="form-row">    
                  <div class="form-group col-md-6">
                        <label for="appRecord">Application Record</label>
                        <input type="text" class="form-control" name="appRecord" placeholder="Records">
                      </div>
                      <div class="form-group col-md-6" >
                        <label for="appDate">Application Date</label>
                        <input type="date" class="form-control" name="appDate" >
                      </div>
                      </div>

                    </div>

                    <div class="form-group">

                      <!-- <button type="submit" class="btn btn-primary">Submit Application</button> -->
                      </div>

    
  
              </form>
        



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>


function update_Applicant(id){


  $("#exampleModal").modal('show');
 
       
    $.ajax(
    {
      url: '/view/update/' + id,
      type: 'GET',
      dataType: "json",
      data:{
        'id': id,
      },
      success: function (data){


        $.each(data, function (key, value){

            $.each(value, function (index, applicant_data){
              // console.log(applicant_data.applicant_code)
              
            });


        });

      }


    }
  )


}

function delete_Applicant(id){

// alert(id);
  $.ajax(
    {
      url: '/view/delete/' + id,
      type: 'DELETE',
      data:{
        'id': id,
        '_token': "{{ csrf_token() }}",

      },
      success: function (){

        console.log("success");
        location.reload();
      }


    }
  )


}



jQuery(document).ready(function () {



      //   jQuery(".deleteApplicant").click(function(){
    
      //     var id = $(this).data("id");
      //     // alert(id);
      //   var token = $(this).data("token");
      //   $.ajax(
      //   {
      //       url: "/view/"+id,
      //       type: 'DELETE',
      //       data: {
      //           "id": id,
      //           "_token": "{{ csrf_token() }}",
      //       },
      //       success: function ()
      //       {
      //           console.log("it Work");
      //       }
      //   });

        
      // });



})
</script>

