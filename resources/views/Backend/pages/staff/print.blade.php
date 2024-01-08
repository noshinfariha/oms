@extends("Backend.master")
@section('content')
<h2>Staff Information</h2>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
@foreach($staffdata as $item)
      <tr>
        <td>{{$item->full_name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
        <td>
    
          <a href="{{route('staff.edit', $item->id)}}" class="btn btn-danger">Edit</a>
           <a href="{{route('staff.delete', $item->id)}}" class="btn btn-success">Delete</a>
        </td>
        </tr>
@endforeach
<button onclick="printlist()">Print List</button>
    <script>
    function printlist() {
        window.print();
    }
    </script>
    </tbody>
  </table>
{{ $staffdata->links() }}
@endsection