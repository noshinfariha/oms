@extends("Backend.master")
@section('content')
<h2>Expense Category</h2>

  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
@foreach($expensecategory as $item)
      <tr>
        <!-- <th scope="row">{{$item->id}}</th> -->
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->status}}</td>
          <td>
        
          <a href="{{route('expensecategory.edit', $item->id)}}" class="btn btn-danger">Edit</a>
           <a href="{{route('expensecategory.delete', $item->id)}}" class="btn btn-success">Delete</a>

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

{{ $expensecategory->links() }}
@endsection