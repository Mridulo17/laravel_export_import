<!DOCTYPE html>
<html>
<head>
    <title>Import Excel to database Example </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>

<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
             Import Excel
        </div>
        <div class="card-body">
            <form action="/users/import" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="from-group">
                    <input type="file" name="file">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Import User Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
