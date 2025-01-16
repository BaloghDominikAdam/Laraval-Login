@extends('layout')
@section('content')


    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">{{Auth::user()->name}} Adatai!</h1>
        <p>Név: {{Auth::use()->name}}</p>
        <p>Regisztráció ideje: {{date_fromat(date_create(Auth::user()->created_at, 'Y. m. d. - h:m'))}}</p>
        <p>Bio: {{Auth::use()->bio}}</p>

        <p>
            <a class="btn btn-primary" href="/newpass">Jelszómódosíáts</a>
            <a class="btn btn-danger" href="/del">Regisztráció törlés</a>
        </p>
    </main>


@endsection

