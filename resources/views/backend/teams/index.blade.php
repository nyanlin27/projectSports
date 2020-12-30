@extends('backend_master')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('teams.create') }}" class="btn btn-info float-right"> Add League <i class="mdi mdi-chevron-double-right menu-icon
                    "></i></a>
                <h4 class="card-title">Team Table</h4>
                <p class="card-description">
                  All Team
                </p>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Team Name</th>
                        <th>League Name</th>
                        <th>Photo</th>
                        <th>Country</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                      @foreach($teams as $team)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $team->name }}</td>
                        {{-- <td>{{ $team->league_id }}</td> --}}
                        <td>{{ $team->league->name }}</td>
                        <td><img src="{{ $team->photo }}" alt="Team Photo"></td>
                        <td>{{ $team->league->country }}</td>
                        <td>
                            <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-primary btn-sm">Edit</a>
                              <form action="{{ route('teams.destroy', $team->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete')" class="d-inline-block">
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
