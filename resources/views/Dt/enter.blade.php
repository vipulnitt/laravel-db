<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Details</title>
    <form method="post"  action="submit">
     @csrf
    <br>
    <h1>&nbsp;&nbsp;Enter Details of Employee</h1>
    &nbsp;&nbsp;&nbsp;Name:<input type="text" name="name" >
        <br> <br>
    &nbsp;&nbsp;&nbsp;Position:<input type="text" name="pos" >
        <br> <br>
    &nbsp;&nbsp;&nbsp;Date:<input type="date" name="date" >
        <br> <br>
    &nbsp;&nbsp;&nbsp;<button type="submit" name="sub">Submit</button><br>

</form>
</head>
<body>
</body>
</html>