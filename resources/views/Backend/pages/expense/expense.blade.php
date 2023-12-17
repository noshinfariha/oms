@extends("Backend.master")
@section('content')
<h2>Expense Information</h2>
<a href="{{route('expense.form')}}" type="button" class="btn btn-dark">Add Expense</a>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Expense Title</th>
        <th scope="col">Expense Amount</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>
@foreach($expensedata as $item)
      <tr>
        <td>{{$item->expense_title}}</td>
        <td>{{$item->expense_amount}}</td>
        <td>
        <a href="{{route('expense.view',$item->id)}}" class="btn btn-primary">View</a>
        <a href="{{route('expense.edit',$item->id)}}" class="btn btn-danger">Edit</a>
        <a href="{{route('expense.delete',$item->id)}}" class="btn btn-success">Delete</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>

{{ $expensedata->links()}}
@endsection