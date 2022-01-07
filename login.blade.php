<html>
<head>
<body>
<form action="jack" method="post" enctype="multipart/form-data">
{{csrf_field()}};
<table>
<tr>
<th>email</th>
<td><input type="email" name="email" /></td>
</tr>
<tr>
<th>password</th>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td><input type="submit" name="submit" onclick="return get()"></td>
</tr>

</table>
</form>
<table>
</table>
</body>
</head>
</html>