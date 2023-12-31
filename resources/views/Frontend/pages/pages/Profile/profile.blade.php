@extends('Frontend.master')
@section('container')

<div class="p-5">
    <div class="rounded bg-white mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="">
                    <span> </span>
                </div>
            </div>
            <div class="col-md-5 border-right m-3">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2 class="text-right">Profile</h2>

                    <div class="row mt-2 ">
                        <div class="col-md-12">
                            <div class="row">
                                <span class="font-weight-bold">{{auth()->user()->name}}</span><br>
                                <span class="text-black-50">{{auth()->user()->email}}</span>
                                <br><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Role : {{auth()->user()->role}}</div>
                                <div class="col-7"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Name : {{auth()->user()->name}}</div>
                                <div class="col-7"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Mobile : {{auth()->user()->phone}}</div>
                                <div class="col-7"></div>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Present Address : {{auth()->user()->address}}</div>
                                <div class="col-1"></div>
                                <div class="col-7"></div>
                            </div>
                        </div>

                    </div>
                    <br><br>


                </div>

            </div>
            <br><br>

        </div>
    </div>

</div>
@if(count($adoptions) > 0)
<div class=" m-6 border border-warning">
    <table class="table table-striped table-dark ">
        <thead>
            <tr>
                <th scope="col">Orphan Name</th>
                <th scope="col">Applicant Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Occupation</th>
                <th scope="col">Source of Income</th>
                <th scope="col">GD Number</th>
                <th scope="col">GD Form</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
           
            @foreach($adoptions as $adoption)
            
            <tr>
            <td>{{ optional($adoption->orphans)->orphan_name }}</td>
                <td>{{$adoption->applicant_name}}</td>
                <td>{{$adoption->phone}}</td>
                <td>{{$adoption->address}}</td>
                <td>{{$adoption->occupation}}</td>
                <td>{{$adoption->source_income}}</td>
                <td>{{$adoption->gd_number}}</td>
     <td> <a href="{{url('/uploads/' . $adoption->gd_form)}}"  target="blank" class="btn btn-sm btn-danger">View</a></td>
                <td>{{$adoption->status}}</td>
                <td >
                @if($adoption->status=='pending')
                <a href="{{route('adoption.cancel', $adoption->id)}}"class="btn btn-success">Cancel Adoption</a>
                    @endif

                    @if($adoption->status !='adopted')
                    <a href="{{route('update', $adoption->id)}}" class="btn btn-m  btn-success">Update</a>
                    @endif

                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    @else
    <b><p style="text-align: center;">No Activity Yet</p></b>
@endif
    <div class="mt-5 text-center"><a href="{{route('User_Logout')}}" class="btn btn-primary profile-button" type="button">Logout</a></div>
    <br><br>
</div>
</div>
</div>

@endsection
