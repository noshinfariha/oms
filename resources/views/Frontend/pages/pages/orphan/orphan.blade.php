@extends('Frontend.master')

@section('container')
<h2>Orphans Information</h2>

<div class="row text-center pt-4">
  @foreach($orphansdata as $item)
  <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
    <div class="our-team">
      <a href="{{route('forntend.orphan.view',$item->id)}}">
        <div class="team_img"> <img src="{{url('/uploads/' . $item->image)}}" alt="team-image">
        </div>
        <div class="team-content">
          <h3 class="title">{{$item->orphan_name}}</h3>
        </div>
      </a>
    </div>
  </div>
  @endforeach
</div>
@endsection