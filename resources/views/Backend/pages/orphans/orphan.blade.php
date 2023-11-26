@extends("Backend.master")
@section('content')
<h2>Orphans Information</h2>

<a href="{{route('orphan.form')}}">
  <button type="button" class="btn btn-dark">Add Orphan</button>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Orphan Name</th>
        <th scope="col">ID</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Status</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orphansdata as $item)
      <tr>
        <td>{{$item->orphan_name}}</td>
        <td>{{$item->id}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->status}}</td>
 <td><img class="border border-warning rounded-pill" width="110" height="50" src="{{url('/uploads/' . $item->image)}}" alt=""></td>
         <td>
          <a href='#' class="btn btn-primary">View</a>
          <a href="{{route('orphan.edit',$item->id)}}" class="btn btn-danger">Edit</a>
          <a href="{{route('orphan.delete',$item->id)}}" class="btn btn-success">Delete</a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</a>
{{ $orphansdata->links() }}
@endsection