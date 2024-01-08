@extends("Backend.master")
@section('content')
<h2>Staff Information</h2>

<a href="{{route('staff.form')}}" type="button" class="btn btn-dark">Add Staff</a>
<a href="{{route('staff.print')}}" type="button" class="btn btn-dark">Print</a>

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
    @php //serial custom to maintain right serial
      $id=0;
      @endphp
@foreach($staffdata as $item)
      <tr>
       <td>{{++$id}}</td>
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
    </tbody>
  </table>
{{ $staffdata->links() }}
@endsection