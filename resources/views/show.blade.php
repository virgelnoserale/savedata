<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View from db</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container-md">
        
            <table class="table table-dark table-striped">
                <thead>
                    <tr class="table-primary">
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($showdata as $showdatas)
                <tr>
                    
                        <td>{{ $showdatas->id }}</td>
                        <td>{{ $showdatas->name }}</td>
                        <td>{{ $showdatas->address }}</td>
                    @endforeach
                </tr>
            </tbody>
            </table>
        
        
    </div>
    <div class="container-md">
        <a href="savedata_link" > <button class="btn btn-danger">Back to registration page</button> </a>

    </div>
</body>
</html>