<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

</body><table width="200" border="1">
  <tr>
    <td>name;</td>
    <td>age</td>
    <td>address</td>
    <td>mobile</td>
    <td>gender</td>
    <td>language</td>
    <td>email</td>
    <td>password</td>
    <td>photo</td>
  </tr>
@foreach($array as $b) 
  <tr>
    <td>{{$b->name}}</td>
    <td>{{$b->age}}</td>
    <td>{{$b->address}}</td>
    <td>{{$b->mobile}}</td>
    <td>{{$b->gender}}</td>
    <td>{{$b->language}}</td>
    <td>{{$b->email}}</td>
    <td>{{$b->password}}</td>
    <td><img src="images/{{$b->photo }}" height="100px" width="100px"></td>
   <td><a href="edit&{{$b->id}}">edit</td>
   <td><a href="delete&{{$b->id}}">delete</td> 
  </tr>
  @endforeach
</table>

</html>