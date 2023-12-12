@extends("Backend.master")
@section('content')
<h2>Donation Information</h2>
<table class="table table-striped table-dark">
    
    <thead>
      <tr>
        <th scope="col">Amount</th>
        <th scope="col">Payment Method</th> 
        <th scope="col">Receiver Account</th> 
        <th scope="col">Transaction ID</th> 
        <th scope="col">Receipt</th> 
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($donationsdata as $item)
      <tr>
        <td>{{$item->amount}}</td>
        <td>{{$item->payment_method}}</td>
        <td>{{$item->receiver_account}}</td>
        <td>{{$item->transaction_id}}</td>
        <td>{{$item->receipt}}</td>
        <td>
        <a href="{{route('donation.view',$item->id)}}" class="btn btn-primary">View</a>
        <a href="{{route('donation.edit', $item->id)}}" class="btn btn-danger">Edit</a>
          <a href="{{route('donation.delete', $item->id)}}" class="btn btn-success">Delete</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>

{{ $donationsdata->links() }}
@endsection