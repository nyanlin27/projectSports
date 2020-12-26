@extends('backend_master')
@section('content')
  <div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-primary my-2 float-right">Back</a>
              <h4 class="card-title">Basic form elements</h4>
              <p class="card-description">
                Basic form elements
              </p>

              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputName1">Post Title</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="post title" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Textarea</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="10"></textarea>
                  </div>
                <div class="form-group">
                  <label>File upload</label>
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- content-wrapper ends -->


@endsection
