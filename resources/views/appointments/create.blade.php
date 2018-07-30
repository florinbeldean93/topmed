
<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Appointment</h4>
      </div>
      <div class="modal-body">
    		<form data-toggle="validator" action="{{ route('appointments.store') }}" method="POST" id="create-form">
          {{ csrf_field() }}
        	<div class="form-group">
  					<label class="control-label" for="name">Nume:</label>
  				  <input type="text" name="name" class="form-control" data-error="Please enter name." required />
            <div class="help-block with-errors"></div>
  				</div>
          <div class="form-group">
            <label class="control-label" for="email">Email:</label>
            <textarea name="email" class="form-control" data-error="Please enter email." required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="phone">Telefon:</label>
            <textarea name="phone" class="form-control" data-error="Please enter phone." required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="CNP">CNP:</label>
            <textarea name="CNP" class="form-control" data-error="Please enter CNP." required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="birthday">Ziua de nastere(An-Luna-Zi):</label>
            <textarea name="birthday" class="form-control" data-error="Please enter birthday." required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="date">Data(An-Luna-Zi):</label>
            <textarea name="date" class="form-control" data-error="Please enter date." required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="message">Mesaj:</label>
            <textarea name="message" class="form-control" data-error="Please enter details." required></textarea>
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