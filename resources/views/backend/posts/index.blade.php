@extends('backend_master')
@section( 'content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('posts.create') }}" class="btn btn-info float-right"> Add Post <i class="mdi mdi-chevron-double-right menu-icon
                    "></i></a>
                <h4 class="card-title">Post List</h4>
                {{ $posts->links() }}{{-- For Paginate --}}
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-md-3 my-2">
                            <div class="card" style="width: 15rem;">
                                <img src="{{ $post->photo }}" class="card-img-top" alt="post">
                                {{-- <a href="" data-toggle="modal" data-target="#staticBackdrop">
                                </a>
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h3 class="modal-title" id="staticBackdropLabel" style="color: black" >{{ $post->name }}<br> <small class="text-danger"> <i class="mdi mdi-calendar-today"></i> {{ $post->updated_at->diffForHumans() }}</small> </h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            {{ $post->description }}
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        </div>
                                  </div> --}}

                                  <small class="text-danger pt-3"> <i class="mdi mdi-calendar-today"></i> {{ $post->updated_at->diffForHumans() }}</small>
                                <div class="card-body">
                                  <h2 class="card-title">{{ $post->name }}</h2>
                                  <p class="card-text">{{ Str::limit($post->description, 50) }}</p>
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
