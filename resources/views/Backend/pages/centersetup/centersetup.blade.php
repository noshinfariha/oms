@extends("Backend.master")
@section('content')
<h2>Center Setup Information</h2>
<a href="{{route('centersetup.form')}}" type="button" class="btn btn-dark">Create Setup</a>
<a href="{{route('centersetup.print')}}" type="button" class="btn btn-dark">Print</a>

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
    </tbody>
  </table>

{{ $centersetupdata->links() }}
@endsection