<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<a class="btn btn-primary" href="{{route('posts.create')}}" role="button" style="margin-right:15px;" >Add</a>
<a class="btn btn-danger" href="{{route('posts.felete.all')}}" role="button" >Delete All</a>
<a class="btn btn-danger" href="{{route('posts.felete.truncate')}}" role="button" >Delete Truncate</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
   
      <th scope="col">title</th>
      <th scope="col">body</th>
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($p as $i)
    <tr>
      <th scope="row">{{$i->id}}</th>
     
      <td>{{$i->title}}</td>
      <td>{{$i->body}}</td>
      <td >
      
      <a class="btn btn-primary" href="{{route('posts.edit',$i->id)}}" role="button" style="margin-right:15px;" >Edit</a>
      <a class="btn btn-danger" href="{{route('posts.delete',$i->id)}}" role="button" >Delete</a> 
      
    </td>
    </tr>
    <tr>
    
     
    @endforeach
  </tbody>
</table> 
</body>
</html>