@extends("Backend.master")
@section('content')
<h2>Center Setup Information</h2>
<a href="{{route('centersetup.form')}}">
<button type="button" class="btn btn-dark">Add setup</button>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Task ID</th>
        <th scope="col">Module</th>
        <th scope="col">Task</th>
        <th scope="col">Status</th> 
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Notes</th>
      </tr>
    </thead>
    <tbody>
@foreach($centersetupdata as $item)
      <tr>
        <td>{{$item->task_id}}</td>
        <td>{{$item->module}}</td>
        <td>{{$item->task}}</td>
        <td>{{$item->status}}</td>
        <td>{{$item->start_date}}</td>
        <td>{{$item->end_date}}</td>
        <td>{{$item->notes}}</td>
        <td>
        <a href='#'class="btn btn-primary">View</a>
          <a href="{{ route('centersetup.delete', $item->id) }}"class="btn btn-success">Delete</a>
          <a href='#'class="btn btn-danger">Edit</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>
</a>
{{ $centersetupdata->links() }}
@endsection