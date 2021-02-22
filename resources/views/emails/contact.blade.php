<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th{
            background-color: grey;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <th>name</th>
    <th>message</th>
    </thead>
    <tbody>
    <tr>
        <td>Username</td>
        <td>{{$username}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$email}}</td>
    </tr>
    <tr>
        <td>Subject</td>
        <td>{{$subject}}</td>
    </tr>
    <tr>
        <td>Message</td>
        <td>{{$messages}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
