<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Category</h4>
      </div>
      <div class="modal-body">
          <form data-toggle="validator" action="{{ route('category.store') }}" method="POST" id="create-form">
          {{ csrf_field() }}
        <div class="form-group">
          <label class="control-label" for="name">Name:</label>
          <input type="text" name="name" class="form-control" data-error="Please enter name." required />
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="image">Image:</label>
          <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
          <label class="control-label" for="description">Description:</label>
          <textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
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