<!doctype html>
<head>
    <title>Add Grade</title>
</head>
<body>
    <form method="post" action="/add-user-grade">
        @if($errors->any())
            <p>Greska {{$errors->first()}}</p>
        @endif
        @csrf
        <input type="text" placeholder="predmet" name="predmet">
        <input type="number" placeholder="user id" name="user_id">
        <input type="number" placeholder="ocena" name="ocena">
        <input type="text" placeholder="profesor" name="profesor">
        <button>Dodaj</button>
    </form>


</body>
