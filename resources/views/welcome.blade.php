<html>

<head>
    <title>
        session start section
    </title>
</head>

<body>
    <form action="{{ url('/') }}" method="post">
        <br>
      <label> User Name</label>  <input type="text" name="email">
        <br>
        <label> Password</label> <input type="password" name="password">
        <br>
        <label> Confirme password</label> <input type="password" name="password_confirmation">
        <br>
        @csrf
        <br>
        <button>submit</submit>
</body>

</html>
