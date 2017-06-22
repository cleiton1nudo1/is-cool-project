<html>
<head>
    <title>Is Cool</title>
</head>
<body>
    <h1>Turmas</h1>
    <ul>
        @foreach($turmas as $tur)
            <li>{{ $tur->curso_id }}
            </li>
            <br>
            @endforeach
    </ul>
</body>

</html>