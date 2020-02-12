<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vote</title>
</head>
<body>
 
<p>The vote {{ $vote->id }} is set to {{ $vote->vote }}.</p>

@if ($vote->vote == 1)
    <p>Looks like it might be a snow day!</p>
@else
    <p>Might not be a snow day tomorrow.</p>
@endif
 
</body>
</html>