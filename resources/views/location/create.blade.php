
<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Location</h4>
      </div>
      <div class="modal-body">
    		<form data-toggle="validator" action="{{ route('locations.store') }}" method="POST" id="create-form">
          {{ csrf_field() }}
        	<div class="form-group">
  					<label class="control-label" for="name">Nume:</label>
  				  <input type="text" name="name" class="form-control" data-error="Please enter name." required />
            <div class="help-block with-errors"></div>
  				</div>
          <div class="form-group">
            <label class="control-label" for="addess">Adresa:</label>
            <textarea name="address" class="form-control" data-error="Please enter adress." required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="timetable">Orar:</label>
            <textarea name="timetable" class="form-control" data-error="Please enter timetable." required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="Email">Email:</label>
            <textarea name="Email" class="form-control" data-error="Please enter Email." required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="Phone">Telefon:</label>
            <textarea name="phone" class="form-control" data-error="Please enter phone." required></textarea>
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