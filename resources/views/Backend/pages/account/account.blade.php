@extends("Backend.master")
@section('content')
<h2>Accounts Information</h2>

<a href="{{route('account.form')}}" type="button" class="btn btn-dark"> Account info</a>
<a href="{{route('account.print')}}" type="button" class="btn btn-primary"> Print</a>

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
        <a href="{{route('account.view',$item->id)}}" class="btn btn-primary">View</a>
        <a href="{{route('account.edit',$item->id)}}" class="btn btn-danger">Edit</a>
        <a href="{{route('account.delete', $item->id)}}" class="btn btn-success">Delete</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>

@endsection