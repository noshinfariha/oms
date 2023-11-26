@extends("Backend.master")
@section('content')
<h2>Accounts Information</h2>

<a href="{{route('account.form')}}">
  <button type="button" class="btn btn-dark">Account info</button>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Orphan Name</th>
        <th scope="col">Age</th>
        <th scope="col">Image</th>
        <th scope="col">Gender</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($accountsdata as $item)
      <tr>
        <td>{{$item->orphan_name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->image}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->status}}</td>
        <td>
        <a href='#'class="btn btn-primary">View</a>
          <a href='#'class="btn btn-success">Delete</a>
          <a href='#'class="btn btn-danger">Edit</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>
</a>
@endsection