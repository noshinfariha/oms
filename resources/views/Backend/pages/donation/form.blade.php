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
            <form action="{{route('donation.store')}}"method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1"> Amount</label>
                    <input type="number" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount">
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
                    <label for="exampleInputEmail1">Receiver Account</label>
                    <input required type="text" name="receiver_account" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Transaction ID</label>
                    <input required type="text" name=" transaction_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Receipt</label>
                    <input  type="file" name="receipt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </main >
</body>

</html>
