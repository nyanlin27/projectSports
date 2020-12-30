@extends('backend_master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('leagues.index') }}" class="btn btn-danger btn-sm my-2 float-right"> <i class="mdi mdi-chevron-double-left menu-icon
                        "></i> Back</a>
                <h4 class="card-title">Edit League</h4>
                <p class="card-description">
                    edit league
                </p>
                <form class="forms-sample" method="POST" action="{{ route('leagues.update', $league->id) }}"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputName1">League Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"   value="{{ $league->name }}" id="exampleInputName1"  >
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Country</label>
                        <input type="text" class="form-control @error('country') is-invalid @enderror" type="text" placeholder="Enter Post Title" name="country" value="{{ $league->name }}" id="exampleInputName1" placeholder="post title" name="country">
                            @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="photo">Upload</label>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Photo</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Photo</a>
                            </li>
                          </ul>
                          <div class="tab-content my-2" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><img src="{{ asset($league->photo) }}"  width ="300px" alt="Old Photo"></div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <input type="file" name="photo" class="file-upload-default @error('photo') is-invalid @enderror" placeholder="Enter Post Photo" >
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                                @error('photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                          </div>

                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->

@endsection
