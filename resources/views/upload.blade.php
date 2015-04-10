<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>
  <form action="{{URL::to('file/upload')}}">
  <input type="file" name="upload"/>
  <input type="submit" name="up" value="upload"/>
  </form>
</body>
</html>