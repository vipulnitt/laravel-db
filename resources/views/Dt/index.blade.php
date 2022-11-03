<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="style.css" type="Text/Css" rel="Stylesheet"> 
</head>
<body>

<form method="post" action="show">
    @csrf
<h1>Employee Details</h1>
<button type="submit" class ="lgn" name="show">Show Details</button>
</form>

<form method="post" action="enter">
@csrf
<button type="submit" class="lgn" name="enter">Enter Details</button>
</form>
</body>
</html>