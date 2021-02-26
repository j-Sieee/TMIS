@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

              
                
                <div class="card-body">
                <form method="post" action="/apply">
                @csrf
              <div class="form-row">
              <div class="form-group col-md-2">
                <label for="inputCode">Code</label>
                <input type="text" class="form-control" name="inputCode" placeholder="Code">
              
              </div>
              <div class="form-group col-md-6">
                <label for="inputfname">First Name</label>
                <input type="text" class="form-control" name="inputfname" placeholder="First Name">
              </div>
            </div>

  <div class="form-row">
  
  <div class="form-group col-md-6">
    <label for="inputmname">Middle Name</label>
    <input type="text" class="form-control" name="inputmname" placeholder="Middle Name">
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
        @foreach ($users as $apptrans_type)
        <option value="{{$apptrans_type->application_type_id}}">{{$apptrans_type->application_type_name}}</option>
        @endforeach
       
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

  <button type="submit" class="btn btn-primary">Submit Application</button>
  
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<script>




</script>