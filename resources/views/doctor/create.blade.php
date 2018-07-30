
<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Doctor</h4>
      </div>
      <div class="modal-body">
    		<form data-toggle="validator" action="{{ route('doctors.store') }}" method="POST" id="create-form">
          {{ csrf_field() }}
        	<div class="form-group">
  					<label class="control-label" for="name">Nume:</label>
  				  <input type="text" name="name" class="form-control" data-error="Please enter name." required />
            <div class="help-block with-errors"></div>
  				</div>
          <div class="form-group">
            <label class="control-label" for="job_type">Job:</label>
            <textarea name="job_type" class="form-control" data-error="Please enter job." required></textarea>
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