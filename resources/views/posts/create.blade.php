<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h4>create your post post</h4>
   <br>
  <!--method 1 <form action="{{url('posts/insert')}}" method="post">-->
      <!--method 2--> <form action="{{route('posts.insert')}}" method="post">
    @csrf
   <input type="text" name="t" id="" placeholder="create name of posts"><br> <br> 
   <input type="text" name="b" id=""  placeholder="create body of posts"> <br> <br> 
   <button type="submit">create</button>
   </form>
</body>
</html>