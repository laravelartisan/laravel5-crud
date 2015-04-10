<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>
  {{--<form action="{{URL::to('file/upload')}}">--}}
  <form action="{{URL::to('photo/upload')}}" enctype="multipart/form-data" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="file" name="photo"/>
  {{--<input type="file" name="upload"/>--}}
  <input type="submit" name="up" value="upload"/>
  </form>



</body>
</html>