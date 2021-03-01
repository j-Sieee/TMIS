
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
              <form method="post" action="">
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

<script>


</script>