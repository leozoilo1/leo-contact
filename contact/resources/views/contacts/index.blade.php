<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>
<body>
    <h1>Contacts</h1>
    <div>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                
            </tr>   
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->pNumber }}</td>
                <td><input type="submit" value="edit"></td>
                <td><input type="submit" value="delete"></td>
            </tr>
            @endforeach
        </table>
    </div>    
</body>
</html>
