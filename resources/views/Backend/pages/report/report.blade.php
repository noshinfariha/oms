@extends("Backend.master")
@section('content')
<h2>Report</h2>

<a href="{{route('report.form')}}" type="button" class="btn btn-dark">Add Report</a>

  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Orphan Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($reportsdata as $item)
      <tr>
        <td>{{$item->orphan_name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->image}}</td>
        <td>{{$item->status}}</td>
        <td>
        <a href="{{route('report.view',$item->id)}}" class="btn btn-primary">View</a>
          <a href="{{route('report.edit',$item->id)}}" class="btn btn-danger">Edit</a>
          <a href="{{route('report.delete',$item->id)}}" class="btn btn-success">Delete</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>

@endsection