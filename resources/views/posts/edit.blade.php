<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>edit your post post</h4>
   <br>
  <!--method 1--><!-- <form action="{{url('posts/insert')}}" method="post">-->
   <!--   method 2--> <form action="{{route('posts.update',$pp->id)}}" method="post">
    @csrf

   <input type="text" id="" name="t" value="{{$pp->title}}"><br> <br> 
   <input type="text"  id="" name="b"  value="{{$pp->body}}"> <br> <br> 
   <button type="submit">edit</button>
 </form>
</body>
</html>