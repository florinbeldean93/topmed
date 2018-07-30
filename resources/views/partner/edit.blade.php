<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Partners</h4>
      </div>
      <div class="modal-body">
      	<form data-toggle="validator" action="/item-ajax/14" method="put" id="edit-form">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label" for="name">Nume:</label>
            <input type="text" name="name" class="form-control" data-error="Please enter name." required />
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="link">Link:</label>
            <textarea input="text" name="link" class="form-control" data-error="Please enter link." required></textarea>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="logo">Logo:</label>
            <input type="file" class="form-control" id="logo" name="logo">
          </div>
          <div class="form-group">
            <label class="control-label" for="order_id">Order:</label>
            <textarea input="text" name="order_id" class="form-control" data-error="Please enter order." required></textarea>
            <div class="help-block with-errors"></div>
          </div>
        <div class="form-group">
					<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
				</div>
      		</form>
      </div>
    </div>
  </div>