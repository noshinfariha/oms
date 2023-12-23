<!DOCTYPE html>
<html lang="en">

<head>
    @notifyCss
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
            <form action="{{route('expense.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Expense ID</label>
                    <input required type="number" name="expense_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Category ID</label>
                    <input type="number" name="category_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category ID">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Expense By</label>
                    <input type="text" name="expense_by" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Expense By">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="number" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Date">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main>
    <x-notify::notify />
    @notifyJs
</body>

</html>