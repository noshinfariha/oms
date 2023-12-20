@extends("Backend.master")
@section('content')
<h2>Orphans Information</h2>



  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Orphan Name</th>
        <th scope="col">ID</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Status</th>
        <th scope="col">Image</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($orphansdata as $item)
      <tr>
        <td>{{$item->orphan_name}}</td>
        <td>{{$item->id}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->status}}</td>
 <td><img class="border border-warning rounded-pill" width="110" height="50" src="{{url('/uploads/' . $item->image)}}" alt=""></td>
          
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
{{ $orphansdata->links() }}
@endsection