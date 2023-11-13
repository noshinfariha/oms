@extends("Backend.master")
@section('content')
<h2>Donors Information</h2>
<a href="{{url('/donor/form')}}">
<button type="button" class="btn btn-dark">Add Donor</button>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Image</th>
        <th scope="col">Gender</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
@foreach($donorsdata as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->full_name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->image}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->status}}</td>

      </tr>
@endforeach
    </tbody>
  </table>
</a>
{{ $donorsdata->links() }}
@endsection