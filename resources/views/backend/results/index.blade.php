@extends('backend_master')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('results.create') }}" class="btn btn-info float-right"> Add Result <i class="mdi mdi-chevron-double-right menu-icon
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
                        <th>Home Team</th>
                        <th>Away Team</th>
                        <th>Home Goal</th>
                        <th>Away Goal</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $result->match->name}}</td>
                                <td> <img src="{{ $result->match->team->photo }}" alt="Team Logo">  {{ $result->match->team->name }}</td>
                                <td><img src="{{ $result->match->otherteam->photo }}" alt="Team Logo">{{ $result->match->otherteam->name }}</td>
                                <td>
                                    {{ $result->home_goal }}
                                </td>
                                <td>{{ $result->away_goal }}</td>
                                <td>
                                    <a href="{{ route('results.edit', $result->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                      <form action="{{ route('results.destroy', $result->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete')" class="d-inline-block">
                                          @csrf
                                          @method('DELETE')
                                          <input type="submit" class="btn btn-danger btn-sm" value="Delete" name="btnsubmit">
                                      </form>
                                      {{-- <a href="{{ route('results.create', $match->id) }}" class="btn btn-primary btn-sm">Result</a> --}}
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
