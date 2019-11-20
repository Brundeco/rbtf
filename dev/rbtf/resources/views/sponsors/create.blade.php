<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Add a new sponsor</h1>

    <form method="POST" action="/sponsors" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div>
            <input type="file" name="sponsorImage">
        </div>
        <div>
            <button type="submit">submit</button>
        </div>
    </form>

</body>
</html>