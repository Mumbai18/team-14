<!DOCTPE html>
    <html>
        <head>
            <title>View Student Records</title>
        </head>
        <body>
            <table border = "1">
            <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            </tr>
            @foreach ($result as $result)
                <tr>
                <td>{{ $result->id }}</td>
                <td>{{ $result->firstName }}</td>
                <td>{{ $result->lastName }}</td>
                <td>{{ $result->emailId }}</td>
                </tr>
            @endforeach
    </table>
    </body>
</html>