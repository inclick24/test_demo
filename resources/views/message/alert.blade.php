<html>
<head>
</head>
<body>
    <p>I m in Alert </p>
    <h2>{{$msg}} {{$a + $b}} </h2>
    @if($v == 5)
        <h3>Value is {{$v}}</h3>
    @endif

    @if($v == 5)
        <h3>Value is  5</h3>
    @else
        <h3>Val {{$v}}</h3>
    @endif

    @foreach($users as $user)
        {{$user}}
    @endforeach
    <br>
    @forelse($users as $user)
        {{$user}}
    @empty
        <h3>No User Found </h3>
    @endforelse
</body>
</html>