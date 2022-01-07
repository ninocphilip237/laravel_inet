<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
@foreach($array as $b)
name:{{$b->name}}<br>
age:{{$b->age}}<br>
gender:{{$b->gender}}
<a href="logout">logout</a>
@endforeach
</body>
</html>