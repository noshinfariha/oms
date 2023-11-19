@extends("Backend.master")
@section('content')
<h2>Orphans Information</h2>

<a href="{{url('/report/form')}}">
  <button type="button" class="btn btn-dark">report info</button>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Orphan Name</th>
        <th scope="col">Address</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Image</th>
        <th scope="col">Religion</th>
        <th scope="col">Gender</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
@foreach($reportsdata as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->orphan_name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->image}}</td>
        <td>{{$item->religion}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->status}}</td>
      </tr>
@endforeach
    </tbody>
  </table>
</a>
@endsection