<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px">
    <th>№</th>
    <th>internal_history_id</th>
    <th>external_id</th>
    <th>external_commission</th>
    @foreach($data as $key=>$elem)
        <tr>
            <td>{{$key}}</td>
            <td>{{$elem['internal_history_id']}}</td>
            <td>{{$elem['external_id']}}</td>
            <td>{{$elem['external_commission']}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
