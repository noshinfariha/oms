@extends("frontend.master")
@section('container')
<br><br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <main class="fluid ">
        <div class="container col-6">
            <h1>
                Input your Information!
            </h1>
            <form action="{{route('update.data',$edit->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant Name</label>
                    <input type="text" name="applicant_name" class="form-control" value="{{$edit->applicant_name}}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input required type="number" name="phone" value="{{$edit->phone}}" class="form-control" placeholder="Enter Number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" value="{{$edit->address}}" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Occupation</label>
                    <input type="text" name="occupation" class="form-control" value="{{$edit->occupation}}"  placeholder="Enter Occupation">
                </div>
                <div class="form-group">
                    <label class="mt-2">Source of Income</label>
                    <select class="form-control" name="source_income" required>
                        <option value="Earnings">Earnings</option>
                        <option value="Public service">Public service</option>
                        <option value="Retirement / passion">Retirement / passion</option>
                        <option value="single">Social Security</option>
                        <option value="single">Other</option>
                    </select>
                </div>
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">GD Number</label>
                    <input type="number" name="gd_number" class="form-control"  placeholder="Enter GD Number" value="{{$edit->gd_number}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">GD Form</label>
                    <input type="file" name="gd_form" class="form-control" placeholder="Enter GD Number" value="{{$edit->gd_form}}">
                </div>
                <div class="form-group">
                    <input type="hidden" name="status" class="form-control"  placeholder="Enter Status">
                </div>

                <button type="submit" class="btn btn-primary mt-2">Update</button>
            </form>
        </div>
    </main>
</body>

</html><br><br><br><br>
@endsection
