@extends("Backend.master")
@section('content')
<h2>Center Setup Information</h2>


<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Task ID</th>
        <th scope="col">Module</th>
        <th scope="col">Task</th>
        <th scope="col">Status</th> 
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($centersetupdata as $item)
      <tr>
        <td>{{$item->task_id}}</td>
        <td>{{$item->module}}</td>
        <td>{{$item->task}}</td>
        <td>{{$item->status}}</td>
        <td>
  
        <a href="{{ route('centersetup.edit', $item->id) }}"class="btn btn-danger">Edit</a>
          <a href="{{ route('centersetup.delete', $item->id) }}"class="btn btn-success">Delete</a>
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

{{ $centersetupdata->links() }}
@endsection