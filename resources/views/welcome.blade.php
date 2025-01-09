@extends('layout')
@section('content')


    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">Szép cicás kép</h1>
        @guest
        <p class="fs-5 text-center">
            Jelentkezz be hogy látsd a macskát!
        </p>
        @else
        <p class="fs-5 text-center">
            <img src="{{asset('assets/img/macska.jpg')}}" alt="macskaskep" title="Szép cica">
        </p>
        @endguest
    </main>


@endsection

