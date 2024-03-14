@extends('layout')
<title>Профиль</title>



@section('main-content')
<body>
<h1 class="text-danger">Профиль</h1>
<h2 class="text-danger">Ваши данные:</h2>
<ul>
    <li class="text-danger">Имя: {{Auth::user()->name}}</li>
    <li class="text-danger">Фамилия: {{Auth::user()->surname}}</li>
    <li class="text-danger">Почта: {{Auth::user()->email}}</li>
</ul>

</body>
@endsection
