@extends("Backend.master")
@section('content')
<h2>Donors Information</h2>
<a href="{{route('donor.form')}}" type="button" class="btn btn-dark">Add Donor</a>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Full Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
         <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
@foreach($donorsdata as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>
        <a href="{{route('donor.view',$item->id)}}" class="btn btn-primary">View</a>
        <a href="{{ route('donor.edit', $item->id) }}"class="btn btn-danger">Edit</a>
          <a href="{{ route('donor.delete', $item->id) }}"class="btn btn-success">Delete</a>
        </td>
       </tr>
@endforeach
    </tbody>
  </table>

{{ $donorsdata->links() }}
@endsection