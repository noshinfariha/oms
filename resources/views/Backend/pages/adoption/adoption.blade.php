@extends("Backend.master")
@section('content')
<h2>Adoption Information</h2>
<a href="{{route('adoption.form')}}">
<button type="button" class="btn btn-dark">Add Adoption</button>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Orphan ID</th>
        <th scope="col">Adoption ID</th>
        <th scope="col">Parents ID</th>
        <th scope="col">Adoption Date</th> 
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($adoptionsdata as $item)
      <tr>
        <th scope="row">{{$item->id}}</th> 
        <td>{{$item->orphan_id}}</td>
        <td>{{$item->adoption_id}}</td>
        <td>{{$item->parents_id}}</td>
        <td>{{$item->adoption_date}}</td>
        <td>
        <a href='#'class="btn btn-primary">View</a>
          <a href="{{ route('adoption.delete', $item->id) }}"class="btn btn-success">Delete</a>
          <a href='#'class="btn btn-danger">Edit</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>
</a>
{{ $adoptionsdata->links() }}
@endsection