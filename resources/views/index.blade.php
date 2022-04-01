<html>
<head>
<title>Song of Solomon (Canticles)</title>
</head>
<body>
<h1>{{ $bible_name }}</h1>
<h2>{{ $bible_version }}</h2>
    @for($i = 1; $i <= $num_of_chapters; $i++)
    <h3>
        <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
    </h3>
    @endfor
    <h3>
        <a href="/read-all-chapters">Read All Chapters</a>
    </h3>
</body>
</html>