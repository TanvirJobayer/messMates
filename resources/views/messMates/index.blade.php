<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mess Mate Lists</title>
</head>
<body>
    <h1>Mess Mate Lists</h1>
    <hr>
    <p>Click here to add a Mess Mate in detail: 👉
        <button onclick="window.location.href='/messMates/create'" style="background-color: bisque"> Add Mess Mate </button>
    </p>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>District</th>
                <th>Status</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($messMates as $messMate)
            <tr align="center">
                <td>{{$messMate->id}}</td>
                <td>{{$messMate->name}}</td>
                <td>{{$messMate->email}}</td>
                <td>{{$messMate->phone}}</td>
                <td>{{$messMate->district}}</td>
                <td>{{$messMate->status}}</td>
                <td>{{$messMate->age}}</td>
                <td style="white-space: nowrap;">
                    <button onclick="window.location.href='/messMates/{{$messMate->id}}'" style="background-color: green; color: white;">View</button>
                    |
                    <button onclick="window.location.href='/messMates/{{$messMate->id}}/edit'" style="background-color: blue; color: white;">Edit</button>
                    |
                    <form action="/messMates/{{$messMate->id}}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Are you Sure you want to Delete this data ?')" style="background-color: red; color: white;" type="submit">Delete</button>
                    </form>

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" align="center"> <strong>No Data Found</strong> </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
