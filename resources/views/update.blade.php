@extends('layouts.app')

@section('content')





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

              
                
                <div class="card-body">
                      
                      

                    <h3 style ="text-align: center; font-weight: bold;">APPLICATION FOR TRANSFORMER INSTALLATION</h2>
                    <div class="form-group col-md-10">
                    <p class= "font-weight-bold form-control">Name    :  <span id="applicant_name">JESSIE AGAPITO </span>  </p>

                    </div>
                    <div class="form-group col-md-10">
                 
                    <p class= "font-weight-bold form-control ">Address    : <span id="applicant_address">  JESSIE AGAPITO </span>  </p>
                    </div>

                    <div class="form-group col-md-10">

                    <p class= "font-weight-bold form-control">Date    : <span id="applicant_date"> JESSIE AGAPITO </span></p>
                    </div>

                   <div class="form-check">
                   
                    <input type="checkbox" name="installation" value="intallation" checked disabled>
                    <label class="form-check-label" for="installation">NEW INSTALLATION</label>
                    <input type="checkbox" name="additional" value="additional"  disabled>
                    <label class="form-check-label" for="additional">ADDITIONAL</label>
                    <input type="checkbox" name="replacement" value="replacement"  disabled>
                    <label class="form-check-label" for="replacement">REPLACEMENT</label>
                    <input type="checkbox" name="repair" value="repair"  disabled>
                    <label class="form-check-label" for="repair">REPAIR</label>

                    </div>
       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script>
$( document ).ready(function() {
 

  $.ajax({
      url: '/view/details/{id}',
      type: 'GET',
      dataType: "json",
      
      success: function (data){

      console.log(data);
      
      }

  });


});

</script>
