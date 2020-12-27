@extends('backend_master')
@section( 'content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('posts.create') }}" class="btn btn-info float-right"> Add Post <i class="mdi mdi-chevron-double-right menu-icon
                    "></i></a>
                <h4 class="card-title">Bordered table</h4>
                <p class="card-description">
                  Add Post
                </p>
                    <div class="row">
                        @foreach($posts as $post)
                        {{-- <div class="col-md-3 my-2">
                            <div class="card" style="width: 15rem;">
                                <img src="{{ $post->photo }}" class="card-img-top" alt="post image">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $post->name }}</h5>
                                  <p class="card-text">{{ $post->description }}</p>
                                  <button class="btn btn-primary btn-sm">Edit</button>
                                  <button class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-3 my-2">
                            <div class="card" style="width: 15rem;">
                                <img src="{{ $post->photo }}" class="card-img-top" alt="post photo">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $post->name }}</h5>
                                  <p class="card-text">{{ $post->description }}</p>
                                </div>
                                <div class="card-body">
                                  <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm float-right">Edit</a>
                                  <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete')" class="d-inline-block">
                                      @csrf
                                      @method('DELETE')
                                      <input type="submit" class="btn btn-danger btn-sm" value="Delete" name="btnsubmit">
                                  </form>
                                </div>
                             </div>
                        </div>
                        @endforeach
                    </div>

              </div>
            </div>
        </div>
    </div>
</div>
@endsection
