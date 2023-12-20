@extends("Backend.master")
@section('content')
<h2>Expense Information</h2>
<a href="{{route('expense.form')}}" type="button" class="btn btn-dark">Add Expense</a>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Category ID</th>
        <th scope="col">Expense By</th>
        <th scope="col">Description</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
    </thead>
    <tbody>
@foreach($expensedata as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->category_id}}</td>
        <td>{{$item->expense_by}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->amount}}</td>
        <td>{{$item->date}}</td>
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