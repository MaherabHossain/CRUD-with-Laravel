<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>


   <form action="/edit" method='post'>
        @csrf
        <input type="text" placeholder="Enter Frut's name" name='name' value="{{ $data['frutes_name'] }}">
        <input type="hidden" name='id' value="{{ $data['id'] }}">
        <input type="submit" value='update'>
    </form>

</body>
</html>