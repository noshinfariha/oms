@extends('backend.master')

@section('content')

<br><br><h1 style="text-align: center">Orphan Adoption Report</h1>
<div class="container">
    <form action="{{ route('order.report.search') }}" method="get">
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
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </form>
    
    <div id="orphanReport">

        <h1>Orphan Adoption Reports - {{ date('Y-m-d') }}</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Applicant Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Occupation</th>
                <th scope="col">Source of Income</th>
                <th scope="col">Marital Status</th>
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
                            <td>{{ $applicant->marital_status }}</td>
                            <td>{{ $applicant->gd_number }}</td>
                            <td>{{ $applicant->gd_form }}</td>
                            <td>{{ $applicant->status }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <button onclick="printDiv('orphanReport')" class="btn btn-success">Print</button>
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
