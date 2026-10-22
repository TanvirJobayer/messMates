<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Mess Mate</title>
</head>
<body>
    <h1>Add a Mess Mate</h1>
    <hr>
    <br>
    <form action="/messMates" method="post">
        @csrf
        <fieldset style="width: fit-content">
            <legend>Input Mess Mate's Detail here: 👇 </legend>
            <br>
            <label for="name">Name</label>
            <input type="text" name="name" id="">
            <br><br>
            <label for="email">Email</label>
            <input type="text" name="email" id="">
            <br><br>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="">
            <br><br>
            <label for="district">District</label>
            <input type="text" name="district" id="">
            <br><br>
            <label for="status">Status</label>
            <input type="text" name="status" id="">
            <br><br>
            <label for="age">Age</label>
            <input type="text" name="age" id="">
            <br><br>
            <button type="submit" style="background-color: green; color: white;">Save Data</button>
        </fieldset>
    </form>
    <br>
    <p>Back to Main Menu: 👉 &nbsp;
        <button onclick="window.location.href='/messMates'" style="background-color: bisque"> Mess Mates </button>
    </p>
</body>
</html>
