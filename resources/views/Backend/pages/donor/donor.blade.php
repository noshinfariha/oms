@extends("Backend.master")
@section('content')
<h2>Donors Information</h2>
<a href="{{route('donor.print')}}" type="button" class="btn btn-primary">Print</a>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        </tr>
    </thead>
    <tbody>
@foreach($donorsdata as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
       </tr>
@endforeach
    </tbody>
  </table>

{{ $donorsdata->links() }}
@endsection