@extends("Backend.master")
@section('content')
<h2>Adoption Information</h2>

<a href="{{route('adoption.print')}}" type="button" class="btn btn-primary"> Print</a>

<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Orphan Name</th>
        <th scope="col">Applicant Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th> 
        <th scope="col">Occupation</th>
        <th scope="col">Source of income</th>
        <th scope="col">Marital Status</th>
        <th scope="col">GD number</th>
        <th scope="col">GD Form</th>
        <th scope="col">Status</th>
         <th scope="col">Action</th>        
     </tr>  
    </thead>
    <tbody>
@foreach($adoptionsdata as $item)
      <tr>
    
        <td>{{$item->orphans->orphan_name}}</td>
        <td>{{$item->applicant_name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->occupation}}</td>
        <td>{{$item->source_income}}</td>
        <td>{{$item->marital_status}}</td>
        <td>{{$item->gd_number}}</td>
        <td>{{$item->gd_form}}</td>
        <td>{{$item->status}}</td>


       <td>
        <a href="{{route('adoption.accept',$item->id)}}" class="btn btn-primary">Accept</a>
          <a href="{{route('adoption.reject', $item->id) }}"class="btn btn-success">Reject</a>
        </td>
      </tr>
@endforeach
    </tbody>
  </table>

{{ $adoptionsdata->links() }}
@endsection