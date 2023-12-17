@extends("Backend.master")
@section('content')
<h2>Adoption Information</h2>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Orphan Id</th>
        <th scope="col">Applicant Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th> 
        <th scope="col">Occupation</th>
        <th scope="col">Source of income</th>
        <th scope="col">Marital Status</th>
        <th scope="col">GD number</th>
        <th scope="col">GD Form</th>
         <th scope="col">Action</th>        
     </tr>
    </thead>
    <tbody>
@foreach($adoptionsdata as $item)
      <tr>
    
        <td>{{$item->orphan_id}}</td>
        <td>{{$item->applicant_name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->occupation}}</td>
        <td>{{$item->source_income}}</td>
        <td>{{$item->marital_status}}</td>
        <td>{{$item->gd_number}}</td>
        <td>{{$item->gd_form}}</td>

       <td>
        <a href="{{route('adoption.view',$item->id)}}" class="btn btn-primary">View</a>
       <a href="{{route('adoption.edit',$item->id)}}" class="btn btn-danger">Edit</a>
          <a href="{{route('adoption.delete', $item->id) }}"class="btn btn-success">Delete</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>

{{ $adoptionsdata->links() }}
@endsection