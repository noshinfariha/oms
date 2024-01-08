@extends('frontend.master')

@section('container')

<h2>Search result for : {{ request()->search }} found {{$orphans->count()}} orphans.</h2>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@if($orphans->count()>0)
    @foreach ($orphans as $orphan)

                    <div class="col mb-5">
                        <div class="card h-100">

                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Orphan</div>
                        

                            <a href="{{route('forntend.orphan.view',$orphan->id)}}">
                                <img class="card-img-top" src="{{url('/uploads/'.$orphan->image)}}" alt="..." />
                            
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        
                                        <h5 class="fw-bolder">{{$orphan->name}}</h5>
                                       
                                        {{ $orphan->name }} 
                                    </div>
                                </div>
                            </a>

                        
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('orphan.search',$orphan->id)}}">View</a></div>
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('orphan.search',$orphan->id)}}">Adopt Now</a></div>
                            </div>
                        </div>
                    </div>   
                @endforeach

                @else

                    <h1>No orphan found.</h1>
                @endif


</div>
@endsection