@extends('backend_master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('posts.index') }}" class="btn btn-danger btn-sm my-2 float-right"> <i class="mdi mdi-chevron-double-left menu-icon
                        "></i> Back</a>
                <h4 class="card-title">Edit Post</h4>
                <p class="card-description">
                    edit post
                </p>
                <form class="forms-sample" method="POST" action="{{ route('posts.update', $post->id) }}"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputName1">Post Title</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Enter Post Title" name="name" value="{{ $post->name }}" id="exampleInputName1" placeholder="post title" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" type="text" placeholder="Enter Description" name="description" value="" id="exampleTextarea1" rows="20" placeholder="description" name="description">{{$post->description }} </textarea>
                        @error('description')
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
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><img src="{{ asset($post->photo) }}"  width ="300px" alt="Old Photo"></div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <input type="file" name="photo" id="photo" class="form-control-file @error('photo') is-invalid @enderror">
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
