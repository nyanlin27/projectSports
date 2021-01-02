@extends('backend_master')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('matches.create') }}" class="btn btn-info float-right"> Add League <i class="mdi mdi-chevron-double-right menu-icon
                    "></i></a>
                <h4 class="card-title">Matches Table</h4>
                <p class="card-description">
                  All Matches
                </p>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Match Name</th>
                        <th>Home Match</th>
                        <th>Away Match</th>
                        <th>Match Date</th>
                        <th>Match Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($matches as $match)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $match->name }}</td>
                                <td> <img src="{{ $match->team->photo }}" alt="Team Logo"> {{ $match->team->name }}</td>
                                <td> <img src="{{$match->otherteam->photo}}" alt="Team Logo"> {{ $match->otherteam->name }}</td>
                                <td>{{ $match->match_date }}</td>
                                <td>{{ $match->match_time }}</td>

                                <td>
                                    <a href="{{ route('matches.edit', $match->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                      <form action="{{ route('matches.destroy', $match->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete')" class="d-inline-block">
                                          @csrf
                                          @method('DELETE')
                                          <input type="submit" class="btn btn-danger btn-sm" value="Delete" name="btnsubmit">
                                      </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
