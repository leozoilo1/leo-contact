<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create contact</title>
</head>
<body>
    <h1>add a contact</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <h2>{{$error}}</h2>
            @endforeach

        </ul>

        @endif
    </div>
    <form method="post" action="{{route('contacts.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">Enter contact name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label for="pNumber">Enter contact number</label>
            <input type="text" name="pNumber" placeholder="09XXXXXXXXX">
        </div>
        <div>
        <input type="submit" value="Save contact">
    </div>
    </form>

</body>
</html>