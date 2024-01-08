@extends("Backend.master")
@section('content')
<h2>Donation Information</h2>
<table class="table table-striped table-dark">

<a href="{{route('donation.print')}}" type="button" class="btn btn-dark">Print</a>

    
    <thead>
      <tr>
        <th scope="col">Amount</th>
        <th scope="col">Donor Name</th> 
        <th scope="col">Phone</th> 
        <th scope="col">Address</th> 
      </tr>
    </thead>
    <tbody>
@foreach($donationsdata as $item)
      <tr>
        <td>{{$item->amount}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>

      </tr>
@endforeach
    </tbody>
  </table>

{{ $donationsdata->links() }}
@endsection