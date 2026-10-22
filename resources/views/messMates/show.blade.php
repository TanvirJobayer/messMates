<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mess Mate Details</title>
</head>
<body>
    <h1>Mess Mate Details</h1>
    <hr>
    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th colspan="2">Detail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{$messMate->id}}</td>
                <td align="center" rowspan="7">
                    <button onclick="window.location.href='/messMates/{{$messMate->id}}/edit'" style="background-color: blue; color: white;">Edit</button>
                    <br><br>
                    <form action="/messMates/{{$messMate->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Are you Sure you want to Delete this data ?')" style="background-color: red; color: white;" type="submit">Delete</button>
                    </form>

                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$messMate->name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$messMate->email}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{$messMate->phone}}</td>
            </tr>
            <tr>
                <td>District</td>
                <td>{{$messMate->district}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{$messMate->status}}</td>
            </tr>
            <tr>
                <td>Age</td>
                <td>{{$messMate->age}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <p>Back to Main Menu: 👉 &nbsp;
        <button onclick="window.location.href='/messMates'" style="background-color: bisque"> Mess Mates </button>
    </p>
</body>
</html>
