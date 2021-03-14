<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
<table border="1px;">      
	<tr>
		<td>Name</td>
        <td>Action</td>
	</tr>
    @foreach ($data as $data)
	<tr>   
     	 
     	 <td>  {{ $data['frutes_name'] }}</td>
     	 <td><a href="/editView/{{ $data['id']}}">Edit</a>||<a href="/delete/{{ $data['id']}}">Delete</a></td>
    <tr>
         @endforeach
         
	</table>
    <br>
    <form action="/process" method='post'>
        @csrf
        <input type="text" placeholder="Enter Frut's name" name='name'>
        <input type="submit" value='insert'>
    </form>
</body>
</html>