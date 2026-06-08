<!DOCTYPE html>
<html>
<head>
    <title>Evenementen</title>
</head>
<body>

<h1>Evenementen lijst</h1>

<ul>
    @foreach($items as $item)
        <li>{{ $item->naam }} - {{ $item->datum }}</li>
    @endforeach
</ul>

</body>
</html>