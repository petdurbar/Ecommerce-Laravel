<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
</head>

<body>
    <h1>Sajilo Mobile</h1>
    <div style="font-size:1rem">The client with {{ $mailData->email }} is trying to reach us</div>
    <p>The Details are:</p>
    <ul class="list-disc">
        <li>First Name: {{ $mailData->firstname }}</li>
        <li>Last Name: {{ $mailData->lastname }}</li>

        <li>Email: {{ $mailData->email }}</li>
        <li>Phone: {{ $mailData->phone }}</li>

        <li>Message: {{ $mailData->message }}</li>
    </ul>
</body>

</html>
