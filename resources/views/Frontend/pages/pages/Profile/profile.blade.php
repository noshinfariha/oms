@extends('Frontend.master')
@section('container')

<div class="container">
    <div class="container rounded bg-white mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" 
                src="">
                <span class="font-weight-bold">{{auth()->user()->name}}</span><br>
                <span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right m-3">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Role</div>
                                <div class="col-1">:</div>
                                <div class="col-7">{{auth()->user()->role}}</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Name</div>
                                <div class="col-1">:</div>
                                <div class="col-7">{{auth()->user()->name}}</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Mobile</div>
                                <div class="col-1">:</div>
                                <div class="col-7">{{auth()->user()->phone}}</div>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Present Address</div>
                                <div class="col-1">:</div>
                                <div class="col-7">{{auth()->user()->address}}</div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="mt-5 text-center"><a href="{{route('User_Logout')}}" class="btn btn-primary profile-button" type="button">Logout</a></div>
                    <br><br>
                </div>
            </div>
            <br><br>
            
        </div>
    </div>
</div>
</div>
</div>

@endsection