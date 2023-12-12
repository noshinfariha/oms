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
            <form action="{{route('adoption.update', $adoptionEdit->id)}}"method="post" enctype="multipart/form-data"> 
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Applicant Name</label>
                    <input value="{{$adoptionEdit->applicant_name}}" type="text" name="applicant_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input value="{{$adoptionEdit->phone}}" type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Number">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input value="{{$adoptionEdit->address}}" type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Date of Birth</label>
                    <input value="{{$adoptionEdit->date_of_birth}}" type="date" name="date_of_birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Date">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Occupation</label>
                    <input value="{{$adoptionEdit->occupation}}" type="text" name="occupation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Occupation">
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
                <label class="mt-2">Marital Status</label>
                <select class="form-control" name="marital_status" required>
                        <option value="single">Single</option>
                        <option value="single">Married</option>
                        <option value="single">Divorced</option>
                        <option value="single">Widowed</option>
                        <option value="single">Separated</option>
                </select>
            </div>

            <div class="form-group">
                    <label for="exampleInputEmail1">Reasons for adopting a child</label>
                    <textarea class="form-control" name="reasons_child" id="exampleInputEmail1" cols="30" rows="10"></textarea>

                </div>
               

                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main >
</body>

</html>