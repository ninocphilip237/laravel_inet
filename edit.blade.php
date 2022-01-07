<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
@foreach($array as $b) 
 <?php
 $g=explode(",",$b->language);
 ?>
<form action="update&{{$b->id}}" method="post" enctype="multipart/form-data">
{{csrf_field()}};
<table>

<tr>
<th>name</th>
<td><input type="text" name="name" class="form-control" value="{{$b->name}}"></td>
</tr>
<tr>
<th>age</th>
<td><input type="number" name="age" class="form-control" value="{{$b->age}}"></td>
</tr>
<tr>
<th>address</th>
<td><textarea name="address">{{$b->name}}</textarea ></td>
</tr>
<tr>
<th>mobile</th>
<td><input type="tel" name="mobile" class="form-control" value="{{$b->name}}"></td>
</tr>
<tr>
<th>gender</th>
<td><input type="radio"  value="male" name="gen" class="form-control"@if($b->gender=="male")checked @endif>male <input type="radio"  value="female" name="gen" class="form-control" @if($b->gender=="female")checked @endif>female</td>
</tr>
<tr>
<th>language</th>
<td><input type="checkbox" name="language" value="malayalam" class="form-control"@if($g[0]=="malayalam")checked @endif>malayalam 
<input type="checkbox" name="language" value="english" class="form-control" @if($g[1]=="english")checked @endif>english<input type="checkbox" name="language" value="hindi" class="form-control" @if($g[2]=="hindi")checked @endif>hindi </td>
</tr>
<tr>
<th>email</th>
<td><input type="email" name="email" class="form-control" value="{{$b->email}}"></td>
</tr>
<tr>
<th>password</th>
<td><input type="password" name="password" class="form-control" value="{{$b->password}}"></td>
</tr>
<tr>
<th>PHOTO</th>
<td><input type="file" name="img" class="form-control"><img src="images/{{$b->photo}}"></td>
</tr> 
<tr>
<td><input type="submit" value="update" name="update" onClick="return get()"></td>
</tr>
</table>
</form>
@endforeach
</body>
</html>