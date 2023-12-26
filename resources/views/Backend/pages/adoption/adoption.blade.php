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

  
      <tr>
    
        <td>{{$data->orphans->orphan_name ?? ""}}</td>
        <td>{{$data->applicant_name ?? ""}}</td>
        <td>{{$data->phone ?? ""}}</td>
        <td>{{$data->address ?? ""}}</td>
        <td>{{$data->occupation ?? ""}}</td>
        <td>{{$data->source_income ?? ""}}</td>
        <td>{{$data->marital_status ?? ""}}</td>
        <td>{{$data->gd_number ?? ""}}</td>
        <td>{{$data->gd_form ?? ""}}</td>
        <td>{{$data->status ?? ""}}</td>


       <td>
        <a href="{{route('adoption.accept',$data->id)}}" class="btn btn-primary">Accept</a>
          <a href="{{route('adoption.reject', $data->id) }}"class="btn btn-success">Reject</a>
        </td>
      </tr>

    </tbody>
  </table>

@endsection