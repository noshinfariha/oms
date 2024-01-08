@extends("Frontend.master")
@section('container')
<h2 class="text-center">Donors Information</h2>
<div class="contaier ">
  <table class="table table-striped col-10">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Full Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
      @foreach($donors as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $donors->links() }}
@endsection