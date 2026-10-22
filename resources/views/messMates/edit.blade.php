<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Mess Mate Detail</title>
</head>
<body>
    <h1>Edit Mess Mate Detail</h1>
    <hr>
    <br>
    <form action="/messMates/{{$messMate->id}}" method="post">
        @csrf
        @method('put')
        <fieldset style="width: fit-content">
            <legend>Edit Mess Mate's Detail here: 👇 </legend>
            <br>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$messMate->name}}">
            <br><br>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$messMate->email}}">
            <br><br>
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{$messMate->phone}}">
            <br><br>
            <label for="district">District</label>
            <input type="text" name="district" value="{{$messMate->district}}">
            <br><br>
            <label for="status">Status</label>
            <input type="text" name="status" value="{{$messMate->status}}">
            <br><br>
            <label for="age">Age</label>
            <input type="text" name="age" value="{{$messMate->age}}">
            <br><br>
            <button type="submit" style="background-color: green; color: white;">Update Data</button>
        </fieldset>
    </form>
    <br>
    <p>Back to Main Menu: 👉 &nbsp;
        <button onclick="window.location.href='/messMates'" style="background-color: bisque"> Mess Mates </button>
    </p>
</body>
</html>
