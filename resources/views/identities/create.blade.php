<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear identidad</h1>
    <form method="post" action="{{route('identity.store')}}">
        @csrf
        @method('post')
        <div>
            <label>First Name</label>
            <input type="text" name="FirstName" placeholder="Juan"/>
        </div>
        <div>
            <label>Middle Name</label>
            <input type="text" name="MiddleName" placeholder="Luis"/>
        </div>
        <div>
            <label>Second Name</label>
            <input type="text" name="SecondName" placeholder="Cruz"/>
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" name="LastName" placeholder="Montes"/>
        </div>
        <div>
            <label>CI</label>
            <input type="text" name="CI" placeholder="8470955"/>
        </div>
        <div>
            <label>Personal Number</label>
            <input type="text" name="Number" placeholder="77665544"/>
        </div>
        <div>
            <label>Direction</label>
            <input type="text" name="Direction" placeholder="Irpavi II Calle B"/>
        </div>
        <div>
            <label>Birth Date</label>
            <input type="date" name=BirthDate />
        </div>
        <div>
            <input type="submit" value="Submit new content" />
        </div>
    </form>
</body>
</html>