@extends("Backend.master")
@section('content')
<h2>Parents Information</h2>

<a href="{{route('parents.form')}}" type="button" class="btn btn-dark">Add Parent</a>

<table class="table table-striped table-dark">
    <thead>
      <tr>   
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>       
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
@foreach($fariha as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->phone}}</td>
        
        <td>
        <a href="{{route('parents.view',$item->id)}}" class="btn btn-primary">View</a>
        <a href="{{route('parents.edit',$item->id)}}" class="btn btn-danger">Edit</a>
         <a href="{{route('parents.delete', $item->id)}}" class="btn btn-success">Delete</a>

        </td>
        </tr>
@endforeach
    </tbody>
  </table>

@endsection