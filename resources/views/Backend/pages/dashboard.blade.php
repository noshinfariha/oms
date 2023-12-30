@extends('Backend.master')


@section('content')

<div class="row">
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">weekend</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Total donation</p>
<h4 class="mb-0">{{$donations}}</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Total orphans</p>
<h4 class="mb-0">{{$orphans}}</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Total Staff</p>
<h4 class="mb-0">{{$staff}}</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">weekend</i>
</div>
<div class="text-end pt-1">
<p class="text-sm mb-0 text-capitalize">Expenses</p>
<h4 class="mb-0">{{$expenses}}</h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
</div>
</div>
</div>
</div>
@endsection
