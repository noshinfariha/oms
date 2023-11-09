@extends("Backend.master")
@section('content')
<h2>Donation Information</h2>
<a href="{{url('/donations/form')}}">
<button type="button" class="btn btn-dark"> Add Donation</button>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Donation Amount</th>
        <th scope="col">Donation Type</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
@foreach($donationsdata as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->donation_amount}}</td>
        <td>{{$item->donation_type}}</td>
        <td>{{$item->status}}</td>
      </tr>
@endforeach
    </tbody>
  </table>
</a>
@endsection