@extends('backend_master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('leagues.index') }}" class="btn btn-danger btn-sm my-2 float-right"> <i class="mdi mdi-chevron-double-left menu-icon
                        "></i> Back</a>
                <h4 class="card-title">Create League</h4>
                <p class="card-description">
                    create league
                </p>

                <form class="forms-sample" action="{{ route('matches.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleSelectGender">Match Name</label>
                                  <select class="form-control" id="exampleSelectGender" name="name">
                                      {{-- <option value="">1</option>
                                      <option value="">2</option> --}}
                                    @foreach($leagues as $league)
                                        <option value="{{ $league->name }}">{{ $league->name }}</option>
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
                                    @foreach($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                    @endforeach

                                  </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectGender">Away Team</label>
                                  <select class="form-control" id="exampleSelectGender" name="otherteam_id">
                                    @foreach($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                    @endforeach

                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="matchedate">Matches Date</label>
                            <input type="date" name="match_date" id="matchdate" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="matchtime">Matches Time</label>
                            <input type="time" name="match_time" id="matchtime" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputName1">League Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Enter Post Title" name="name" value="{{ old('name') }}" id="exampleInputName1" placeholder="league name" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="exampleInputName1">Country</label>
                        <input type="text" class="form-control @error('country') is-invalid @enderror" type="text" placeholder="Enter Post Title" name="country" value="{{ old('country') }}" id="exampleInputName1" placeholder="league name" name="country">
                            @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div> --}}
                    {{-- <div class="form-group">
                        <label>League Photo</label>
                        <input type="file" name="photo" class="file-upload-default @error('photo') is-invalid @enderror" type="text" placeholder="Enter Post Photo" name="photo" value="{{ old('photo') }}">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                        @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
