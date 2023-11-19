@extends("Backend.master")
@section('content')
<h2>Donation Information</h2>
<a href="{{route('donation.form')}}">
<button type="button" class="btn btn-dark"> Add Donation</button>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Donation Amount</th>
        <th scope="col">Donation Type</th>
        <th scope="col">Payment Option</th> 
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($donationsdata as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->donation_amount}}</td>
        <td>{{$item->donation_type}}</td>
        <td>{{$item->payment_option}}</td>
        <td>
        <a href='#'class="btn btn-primary">Edit</a>
          <a href='#'class="btn btn-success">Add</a>
          <a href='#'class="btn btn-danger">Delete</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>
</a>
{{ $donationsdata->links() }}
@endsection