@extends("Backend.master")
@section('content')
<h2>Orphans Information</h2>

<a href="{{route('orphan.form')}}" type="button" class="btn btn-dark">Add Orphan</a>
<a href="{{route('orphan.print')}}" type="button" class="btn btn-primary">Print</a>

  <table class="table table-striped table-dark" style="background-color: red;">
    <thead>
      <tr>
        <th class="col bg-secondary" scope="col">Orphan Name</th>
        <th class="col bg-secondary"scope="col" style="background-color: green;">ID</th>
        <th class="col bg-secondary"scope="col">Age</th>
        <th class="col bg-secondary"scope="col">Gender</th>
        <th class="col bg-secondary"scope="col">Status</th>
        <th class="col bg-secondary"scope="col">Image</th>
        <th class="col bg-secondary"scope="col">Action</th>
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
          <a href="{{route('orphan.view',$item->id)}}" class="btn btn-primary">View</a>
          <a href="{{route('orphan.edit',$item->id)}}" class="btn btn-danger">Edit</a>
          <a href="{{route('orphan.delete',$item->id)}}" class="btn btn-success">Delete</a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
{{ $orphansdata->links() }}
@endsection