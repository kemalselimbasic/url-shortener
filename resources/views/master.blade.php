<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Url-shortener</title>
</head>
<body>



<div class="container" style="margin-top: 10px"><h1>URL-Shortener</h1></div>
@yield('error')
<div class="container" style="margin-top: 20px">
<form action="/url"  method="POST">
<div class="form-group">
<input type="text" class="form-control" name="url" placeholder="Insert your url!" required>
<input type="text" class="form-control" name="slug" placeholder="Insert your slug! Leave blank for random!" >
{{csrf_field()}}
<input type="submit" class="btn btn-success" value="Submit">
</div>

</div>

    @yield('preview')



</form>
</body>
</html>
