@extends("Backend.master")
@section('content')
<h2>Accounts Information</h2>



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

<button onclick="printlist()">Print List</button>
    <script>
    function printlist() {
        window.print();
    }
    </script>
    </tbody>
  </table>

@endsection