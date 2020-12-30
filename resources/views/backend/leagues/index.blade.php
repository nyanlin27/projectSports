@extends('backend_master')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <a href="{{ route('leagues.create') }}" class="btn btn-info float-right"> Add League <i class="mdi mdi-chevron-double-right menu-icon
                    "></i></a>
                <h4 class="card-title">Leagues Table</h4>
                <p class="card-description">
                  All Leagues
                </p>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>League Name</th>
                        <th>Country</th>
                        <th>League Photo</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                      @foreach($leagues as $league)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $league->name }}</td>
                        <td>{{ $league->country }}</td>
                        <td><img src="{{ $league->photo }}" alt="League Photo"></td>
                        <td>
                            <a href="{{ route('leagues.edit', $league->id) }}" class="btn btn-primary btn-sm">Edit</a>
                              <form action="{{ route('leagues.destroy', $league->id) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete')" class="d-inline-block">
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
