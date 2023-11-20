@extends("Backend.master")
@section('content')
<h2>Expense Category</h2>

<a href="{{route('expensecategory.form')}}">
  <button type="button" class="btn btn-dark">Add Category</button>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Date</th>
        <th scope="col">Category</th>
        <th scope="col">Description</th>
        <th scope="col">Payment Method</th>
        <th scope="col">Amount</th>
        <th scope="col">Invoice Number</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($expensecategory as $item)
      <tr>
        <!-- <th scope="row">{{$item->id}}</th> -->
        <td>{{$item->date}}</td>
        <td>{{$item->category}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->payment_method}}</td>
        <td>{{$item->amount}}</td>
        <td>{{$item->invoice_number}}</td>
          <td>
          <a href='#'class="btn btn-primary">View</a>
          <a href='#'class="btn btn-success">Delete</a>
          <a href='#'class="btn btn-danger">Edit</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>
</a>
{{ $expensecategory->links() }}
@endsection