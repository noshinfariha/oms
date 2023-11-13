@extends("Backend.master")
@section('content')
<h2>Orphans Information</h2>

<a href="{{url('/orphan/form')}}">
  <button type="button" class="btn btn-dark">Add Orphan</button>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Orphan Name</th>
        <th scope="col">Address</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Image</th>
        <th scope="col">Religion</th>
        <th scope="col">Gender</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($orphansdata as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->orphan_name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->date}}</td>
        <td><img class="border border-warning rounded-pill" width="110" height="50" src="{{url('/uploads/' . $item->photo)}}" alt=""></td>
        <td>{{$item->religion}}</td>
        <td>{{$item->gender}}</td>
        <td>
          <a href='#'class="btn btn-primary">Edit</a>
          <a href='#'class="btn btn-success">Add</a>
          <a href='#'class="btn btn-danger">Delete</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>
</a>
{{ $orphansdata->links() }}
@endsection