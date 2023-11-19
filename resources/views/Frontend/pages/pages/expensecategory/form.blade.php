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
            <form action="{{route('expensecategory.store')}}"method="post" enctype="multipart/form-data">
                @csrf 
                <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input required type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name">
                    @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input required type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="description" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Date of Birth">
                
                </div>
                        
            <div class="form-group">
                    <label for="exampleInputEmail1">Payment Method</label>
                    <input  type="file" name="abc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="number" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Religion">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Invoice Number</label>
                    <input type="number" name="invoice number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Status">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main >
</body>

</html>