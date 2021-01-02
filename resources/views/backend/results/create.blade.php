@extends('backend_master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('results.index') }}" class="btn btn-danger btn-sm my-2 float-right"> <i class="mdi mdi-chevron-double-left menu-icon
                        "></i> Back</a>
                <h4 class="card-title">Create Result</h4>
                <p class="card-description">
                    create result
                </p>

                <form class="forms-sample" action="{{ route('results.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="match_id">Match Name</label>
                                <select name="match_id" id="match_id" class="form-control">
                                    @foreach($matches as $match)
                                        <option value="{{ $match->id }}" >{{ $match->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hometeam_id">Home Team</label>
                                <select name="hometeam_id" id="hometeam_id" class="form-control">
                                    @foreach($teams as $team)
                                        <option value="{{ $team->id }}" >{{ $team->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="awayteam_id">Away Team</label>
                                <select name="awayteam_id" id="awayteam_id" class="form-control">
                                    @foreach($teams as $team)
                                        <option value="{{  $team->id }}" >{{  $team->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="home_goal">Home Goal</label>
                                <input type="number" class="form-control @error('home_goal') is-invalid @enderror" name="home_goal" id="home_goal" value="{{ old('home_goal') }}">
                                @error('home_goal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="away_goal">Away Team</label>
                                <input type="number" class="form-control @error('away_goal') is-invalid @enderror" name="away_goal" id="away_goal" value="{{ old('away_goal') }}">
                                @error('away_goal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

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
