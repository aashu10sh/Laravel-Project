<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> {{ "ADDED USER $name "}} </h1>
    @foreach($registers as $item)
        <tr>
{{--            <td>{{ $loop->iteration }}</td>--}}
            <td>{{ $item->name }}</td><br><td>{{ $item->email }}</td><br><td>{{ $item->password }}</td>
        </tr>
    @endforeach
</body>
</html>
