<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    



<h2>Orphans Information</h2>


  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">Orphan Name</th>
        <th scope="col">ID</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Status</th>
        <th scope="col">Image</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($orphansdata as $item)
      <tr>
        <td>{{$item->orphan_name}}</td>
        <td>{{$item->id}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->status}}</td>
 <td><img class="border border-warning rounded-pill" width="110" height="50" src="{{url('/uploads/' . $item->image)}}" alt=""></td>
         
      </tr>
      @endforeach
    </tbody>
  </table>

{{ $orphansdata->links() }}







</body>
</html>