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
            <form action="{{route('expense.update', $expenseEdit->id)}}"method="post" enctype="multipart/form-data"> 
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input value="{{$expenseEdit->id}}" required type="number" name="id" class="form-control"  placeholder="Enter ID">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input value="{{$expenseEdit->title}}" required type="number" name="expense_amount" class="form-control" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category ID</label>
                    <input value="{{$expenseEdit->category_id}}" required type="number" name="category_id" textarea class ="form-control"  placeholder="Enter Category ID">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Expense By</label>
                    <input value="{{$expenseEdit->expense_by}}" required type="text" name="expense_by" textarea class ="form-control"  placeholder="Enter Expense By">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input value="{{$expenseEdit->description}}" required type="text" name="description" textarea class ="form-control" placeholder="Enter Description">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input value="{{$expenseEdit->amount}}" required type="number" name="amount" textarea class ="form-control"  placeholder="Enter Amount">
                </div>

               <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main >
</body>

</html>