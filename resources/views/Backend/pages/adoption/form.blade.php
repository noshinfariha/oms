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
            <form action="{{route('adoption.store')}}"method="post">
                @csrf
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Orphan id</label>
                    <input type="number" name="orphan_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
                </div> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Adoption id</label>
                    <input required type="number" name="adoption_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="id">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Parents id</label>
                    <input type="number" name="parents_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Adoption date</label>
                    <input type="date" name="adoption_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter date">
                </div>



                <div class="form-group">
                <label class="mt-2">Orphan ID</label>
                <select class="form-control" name="orphan_id" required>
                    @foreach($orphans as $orphan)
                        <option value="{{$orphan->id}}">{{$orphan->id}}</option>
                    @endforeach
                </select>
            </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main >
</body>

</html>