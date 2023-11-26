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
            <form action="{{route('orphan.update', $orphanEdit->id)}}"method="post" enctype="multipart/form-data">
                @csrf 
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Orphan Name</label>
                    <input value="{{$orphanEdit->orphan_name}}" type="text" name="orphan_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input  value="{{$orphanEdit->id}}" type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter id">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input  value="{{$orphanEdit->age}}" required type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter age">

                </div>
                        
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input  value="{{$orphanEdit->image}}"  type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group
                <label for="exampleInputEmail1">Gender</label><br>
                <input type="radio" name="gender"id="male">
                <label for="male">Male</label><br>
                <input type="radio" name="gender"id="female">
                <label for="female">Female</label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input  value="{{$orphanEdit->status}}" type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Status">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main >
</body>

</html>