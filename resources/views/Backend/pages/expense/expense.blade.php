@extends("Backend.master")
@section('content')
<h2>Expense Information</h2>
<a href="{{url('/expense/form')}}">
<button type="button" class="btn btn-dark">Add Expense</button>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Expense Title</th>
        <th scope="col">Expense Amount</th>
        <th scope="col">Expense Description</th>
    </thead>
    <tbody>
@foreach($expensedata as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->expense_title}}</td>
        <td>{{$item->expense_amount}}</td>
        <td>{{$item->expense_description}}</td>

      </tr>
@endforeach
    </tbody>
  </table>
</a>
{{ $expensedata->links()}}
@endsection