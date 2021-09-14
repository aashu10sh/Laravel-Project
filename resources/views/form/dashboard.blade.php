<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(isset($name))
    <h1> {{ "Added User $name" }} </h1>
@else
    <h1>SHOWING ALL AVAILABE DATA's</h1>
    @endif

    @foreach($registers as $item)
        <tr>
{{--            <td>{{ $loop->iteration }}</td>--}}
            <td>{{ " name : $item->name" }}</td>
            <br>
            <td>{{ " email : $item->email" }}</td>
            <br>
            <td>{{ "password: $item->password" }}</td>
            <br>
            <br>
            <br>
        </tr>
    @endforeach
</body>
</html>
