@extends('Frontend.master')
@section('container')

<div class="container">
    <div class="container rounded bg-white mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="">
                    <span> </span>
                </div>
            </div>
            <div class="col-md-5 border-right m-3">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <div class="row mt-2">
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
                    <div class="container border border-warning">
                        <table class="table table-striped table-dark ">
                            <thead>
                                <tr>
                                    <th scope="col">Orphan Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orphansdatas as $orphansdata)
                                <tr>
                                    <td>{{$orphansdata->orphan_name}}</td>
                                    <td>sdfghj</td>
                                    <td>sdfghj</td>
                                    <td>sdfghj</td>
                                    
                                    <td>
                                        <a href="#" class="btn btn-danger">Cancel Adoption</a>
                                        <a href="{{route('adoption.store')}}" class="btn btn-success">Update</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br><br> 
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