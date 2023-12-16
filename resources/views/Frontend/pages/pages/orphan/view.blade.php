@extends('Frontend.master')

@section('container')

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center ">
                    <img src="{{url('/uploads/' . $orphansdata->image)}}" alt="Admin" class="rounded-circle" width="150" ml-5>
                    <div class="mt-3 ">
                      <h4>{{$orphansdata->orphan_name}}</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <a href="{{route('forntend.adopt', $orphansdata->id)}}" class="btn btn-primary">Adopt Now</a>

                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Full Name</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$orphansdata->orphan_name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Age</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$orphansdata->age}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Status</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$orphansdata->status}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Gender</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$orphansdata->gender}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0">Address</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>
                  <hr>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>

@endsection