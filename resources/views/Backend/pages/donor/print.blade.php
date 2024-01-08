@extends("Backend.master")
@section('content')
<h2>Donors Information</h2>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Full Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        </tr>
    </thead>
    <tbody>
@foreach($donorsdata as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
        <td>
        </td>
       </tr>
@endforeach
<button onclick="printlist()">Print List</button>
    <script>
    function printlist() {
        window.print();
    }
    </script>
    </tbody>
  </table>

{{ $donorsdata->links() }}
@endsection