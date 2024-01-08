@extends("Backend.master")
@section('content')
<h2>Accounts Information</h2>

<a href="{{route('account.print')}}" type="button" class="btn btn-primary"> Print</a>

  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Amount</th>   
      </tr>
    </thead>
    <tbody>
@foreach($accountsdata as $item)
      <tr>
        <td>{{$item->amount}}</td>
      </tr>
@endforeach
    </tbody>
  </table>

@endsection