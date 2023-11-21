@extends ('Backend.master')
@section('content')

<div class="container">
    <div class="container rounded bg-white mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span>
                <span class="text-black-50">demogmail@gmail.com</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Admin Profile</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Role</div>
                                <div class="col-1">:</div>
                                <div class="col-7">Admin</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Name</div>
                                <div class="col-1">:</div>
                                <div class="col-7">Noshin Fariha</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Mobile</div>
                                <div class="col-1">:</div>
                                <div class="col-7">+880 1992704337</div>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Present Address</div>
                                <div class="col-1">:</div>
                                <div class="col-7">House- 34, Road- 20, Gazipur Sadar, Gazipur.</div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">Permanent Address</div>
                                <div class="col-1">:</div>
                                <div class="col-7">House- 34, Road- 20, Gazipur Sadar, Gazipur.</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Edit Profile</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection