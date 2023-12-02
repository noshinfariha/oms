@extends("Backend.master")
@section('content')
<h2>Parents Information</h2>

<a href="{{route('parents.form')}}" type="button" class="btn btn-dark">Add Parent</a>

<table class="table table-striped table-dark">
    <thead>
      <tr>   
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
@foreach($fariha as $item)
      <tr>
        <td>{{$item->full_name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
        <td><img class="border border-warning rounded-pill" width="110" height="50" src="{{url('/uploads/' . $item->image)}}" alt=""></td>
        <td>
        <a href='#'class="btn btn-primary">View</a>
        <a href="{{route('parents.edit',$item->id)}}" class="btn btn-danger">Edit</a>
         <a href="{{route('parents.delete', $item->id)}}" class="btn btn-success">Delete</a>

        </td>
        </tr>
@endforeach
    </tbody>
  </table>

{{ $fariha->links() }}
@endsection