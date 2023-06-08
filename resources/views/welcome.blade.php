<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SaveData</title>
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="div container-md"><h1>Register your name</h1></div>
    <div class="container-md shadow-sm p-2 d-flex mb-2 br5 ">
        
        <form action="savedata_link" method="POST" class="">
            @csrf
            <div class="input-field">
                <input type="text" name="name" placeholder="Name" class="form-control p-2 m-2 bg-light "  required>
                <input type="text" name="address" placeholder="Address" class="form-control p-2 m-2" required>
            
            <input type="submit" class="btn btn-primary shadow-sm p-2 m-2" value="Click to add new Member">
        </div>
        </form>
    </div>
    <div class="container-md">
        <a href="showdata_link" > <button class="btn btn-success">Show registered Name -User-</button> </a>
        <a href="deletedata_link" > <button class="btn btn-danger">Delete registered Name -Admin-</button> </a>
        <a href="updatedata_link" > <button class="btn btn-warning">Update registered Name -Admin-</button> </a>
      </div>

</body>
</html>