@extends('backend_master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('results.index') }}" class="btn btn-danger btn-sm my-2 float-right"> <i class="mdi mdi-chevron-double-left menu-icon
                        "></i> Back</a>
                <h4 class="card-title">Create Results</h4>
                <p class="card-description">
                    create result
                </p>

                <form class="forms-sample" action="{{ route('results.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleSelectGender">Match Name</label>
                                  <select class="form-control" id="exampleSelectGender" name="name">
                                    @foreach($matches as $match)
                                        <option value="{{ $match->name }}">{{ $match->name }}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">Home Team</label>
                                  <select class="form-control" id="exampleSelectGender" name="team_id">
                                      {{-- <option value="">1</option>
                                      <option value="">2</option> --}}
                                    @foreach($matches as $match)
                                        <option value="{{ $match->id }}">{{ $match->name }}</option>
                                    @endforeach

                                  </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">Away Team</label>
                                  <select class="form-control" id="exampleSelectGender" name="team_id">
                                      {{-- <option value="">1</option>
                                      <option value="">2</option> --}}
                                    @foreach($matches as $match)
                                        <option value="{{ $match->id }}">{{ $match->otherteam_id }}</option>
                                    @endforeach

                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="matchedate">Home Team Goal</label>
                                <input type="number" name="match_date" id="matchdate" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="matchtime">Away Team Goal</label>
                                <input type="number" name="match_time" id="matchtime" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->

@endsection
