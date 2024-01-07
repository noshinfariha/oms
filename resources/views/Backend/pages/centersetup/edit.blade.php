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
            <form action="{{route('centersetup.update', $centersetupEdit->id)}}"method="post" enctype="multipart/form-data"> 
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Task id</label>
                    <input value="{{$centersetupEdit->task_id}}"  required type="number" name="task_id" class="form-control"  placeholder="Enter ID">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Module</label>
                    <input value="{{$centersetupEdit->module}}" type="text" name="module" class="form-control"  placeholder="Enter Module">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Task</label>
                    <input value="{{$centersetupEdit->task}}" type="text" name="task" class="form-control"  placeholder="Enter Task">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input value="{{$centersetupEdit->status}}" type="text" name="status" class="form-control"  placeholder="Enter Status">
                 </div>
               
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main >
</body>

</html>