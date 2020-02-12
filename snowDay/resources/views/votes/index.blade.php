<?php 

// print_r($votes); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Votes</title>
</head>
<body>
 
<table border="1">
    <tr>
        <th>Id</th>
        <th>Vote</th>
        <th>guest_school</th>
        <th>guest_name</th>
    </tr>
    @for($i = 0; $i < count($votes); $i++)
        <tr>
            <td><a href="/votes/{{ $votes[$i]->id }}">{{ $votes[$i]->id }}</td>
            <td>{{ $votes[$i]->vote }}</td>
            <td>{{ $votes[$i]->guest_school }}</td>
            <td>{{ $votes[$i]->guest_name }}</td>
        </tr>
    @endfor
</table>
 
</body>
</html>