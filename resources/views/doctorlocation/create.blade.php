
<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Location</h4>
      </div>
      <div class="modal-body">
    		<form data-toggle="validator" action="{{ route('doctorlocation.store') }}" method="POST" id="create-form">
          {{ csrf_field() }}
        	<div class="form-group">
  					<label class="control-label" for="doctor_id">Doctor's Name:</label>
  				  <input type="text" name="doctor_id" class="form-control" data-error="Please enter name." required />
            <div class="help-block with-errors"></div>
  				</div>
          <div class="form-group">
            <label class="control-label" for="location_id">Locations:</label>
            <input type="text" name="location_id" class="form-control" data-error="Please enter location." required />
            <div class="help-block with-errors"></div>
          </div>
  				<div class="form-group">
  					<button type="submit" class="btn crud-submit btn-success">Submit</button>
  				</div>
    		</form>
      </div>
    </div>
  </div>
</div>