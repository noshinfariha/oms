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
            <form action="{{route('expensecategory.update', $expensecategoryEdit->id)}}"method="post" enctype="multipart/form-data"> 
                @csrf 
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input value="{{$expensecategoryEdit->category}}" required type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input value="{{$expensecategoryEdit->description}}" required type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
                 </div>
                    
                 <div class="form-group">
                <label for="exampleInputEmail1">Payment Method</label>
                <select name="payment_method" id="" class="form-control" required>
                    <option value="Bkash">Bank</option>
                    <option value="Rocket">Bkash</option>
                    <option value="Rocket">Rocket</option>
                 </select>
            </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input value="{{$expensecategoryEdit->amount}}" required type="text" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Invoice Number</label>
                    <input value="{{$expensecategoryEdit->invoice_number}}" required type="number" name="invoice_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter invoice">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main >
</body>

</html>