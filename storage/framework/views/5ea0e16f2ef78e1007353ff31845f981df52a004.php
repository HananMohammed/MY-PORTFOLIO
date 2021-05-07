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
        <td><?php echo e($username); ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo e($email); ?></td>
    </tr>
    <tr>
        <td>Subject</td>
        <td><?php echo e($subject); ?></td>
    </tr>
    <tr>
        <td>Message</td>
        <td><?php echo e($messages); ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/emails/contact.blade.php ENDPATH**/ ?>