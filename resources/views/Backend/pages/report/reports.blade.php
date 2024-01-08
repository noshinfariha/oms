@extends('backend.master')

@section('content')




<a class="btn btn-dark col-3" href="#adoption">Adoption</a>
<a class="btn btn-dark col-3" href="#donation">Donation</a>
<a class="btn btn-dark col-3" href="#orphan">Orphan</a>





<br><br><h1 id="adoption" style="text-align: center"></h1>
<div class="container">
    <form action="{{ route('adoption.report.search') }}" method="get">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="">From date:</label>
                <input name="from_date" type="date" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="">To date:</label>
                <input name="to_date" type="date" class="form-control">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    
    <div id="orphanReport">

        <h1> Adoption Report - {{ date('Y-m-d') }}</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Applicant Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Occupation</th>
                <th scope="col">Source of Income</th>
                <th scope="col">GD Number</th>
                <th scope="col">GD Form</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
                @if(isset($applicants))
                    @foreach($applicants as $key => $applicant)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $applicant->applicant_name }}</td>
                            <td>{{ $applicant->phone }}</td>
                            <td>{{ $applicant->address }}</td>
                            <td>{{ $applicant->occupation }}</td>
                            <td>{{ $applicant->source_income }}</td>
                            <td>{{ $applicant->gd_number }}</td>
                            <td>{{ $applicant->gd_form }}</td>
                            <td>{{ $applicant->status }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <button onclick="printDiv('orphanReport')" class="btn btn-primary">Print</button>
</div>

<hr>

<br><br><h1 id="donation" style="text-align: center"></h1>
<div class="container">
    <form action="{{ route('donation.report.search') }}" method="get">
        <div class="row">
            <div class="col-md-4">
                <label for="">From date:</label>
                <input name="from_date" type="date" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="">To date:</label>
                <input name="to_date" type="date" class="form-control">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    
    <div id="orphanReport">

        <h1> Donation Report - {{ date('Y-m-d') }}</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Amount</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Receiver Account</th>
                <th scope="col">Transaction ID</th>
                <th scope="col">Receipt</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
                @if(isset($donations))
                    @foreach($donations as $key => $donation)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $applicant->amount }}</td>
                            <td>{{ $applicant->payment_method }}</td>
                            <td>{{ $applicant->receiver_account }}</td>
                            <td>{{ $applicant->transaction_id}}</td>
                            <td>{{ $applicant->receipt}}</td>
                            <td>{{ $applicant->status }}</td>
                            
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <button onclick="printDiv('orphanReport')" class="btn btn-primary">Print</button>
</div>

<hr>

<br><br><h1 id="orphan" style="text-align: center"></h1>
<div class="container">
    <form action="{{ route('orphan.report.search') }}" method="get">
        <div class="row">
            <div class="col-md-4">
                <label for="">From date:</label>
                <input name="from_date" type="date" class="form-control">
            </div>
            <div class="col-md-4">
                <label for="">To date:</label>
                <input name="to_date" type="date" class="form-control">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    
    <div id="orphanReport">

        <h1>Orphan Report - {{ date('Y-m-d') }}</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Orphan Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Status</th>
                <th scope="col">Image</th>
                
            </tr>
            </thead>
            <tbody>
                @if(isset($orphans))
                    @foreach($orphans as $key => $orphan)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $applicant->id }}</td>
                            <td>{{ $applicant->orphan_name}}</td>
                            <td>{{ $applicant->age }}</td>
                            <td>{{ $applicant->gender}}</td>
                            <td>{{ $applicant->status }}</td>
                            <td>{{ $applicant->image }}</td>     
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <button onclick="printDiv('orphanReport')" class="btn btn-primary">Print</button>
</div>

<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection
