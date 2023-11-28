@extends("Backend.master")
@section('content')
<h2>Expense Information</h2>
<a href="{{route('expense.form')}}">
<button type="button" class="btn btn-dark">Add Expense</button>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Expense Title</th>
        <th scope="col">Expense Amount</th>
        <th scope="col">Expense Description</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>
@foreach($expensedata as $item)
      <tr>
        <td>{{$item->expense_title}}</td>
        <td>{{$item->expense_amount}}</td>
        <td>{{$item->expense_description}}</td>
        <td>
        <a href='#'class="btn btn-primary">View</a>
        <a href='#'class="btn btn-danger">Edit</a>
        <a href="{{route('expense.delete',$item->id)}}" class="btn btn-success">Delete</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>
</a>
{{ $expensedata->links()}}
@endsection