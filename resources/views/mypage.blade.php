@extends('layout')
@section('content')


    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">{{Auth::user()->name}} Adatai!</h1>
        @isset($sv)
        <p class="text-success">{{$sv}}</p>
        @endisset
        <p>Név: {{Auth::user()->name}}</p>
        <p>Regisztráció ideje: {{date_format(date_create(Auth::user()->created_at) , 'Y. m. d. - h:m')}}</p>
        <p>Bio: {{Auth::user()->bio}}</p>

        <p>
            <a class="btn btn-primary" href="/newpass">Jelszómódosíáts</a>
            <a class="btn btn-danger" href="/del">Regisztráció törlés</a>
        </p>
    </main>


@endsection

