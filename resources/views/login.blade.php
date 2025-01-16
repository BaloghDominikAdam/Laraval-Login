@extends('layout')
@section('content')


    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">Bejelentkezés!</h1>
        <div class="card mx-auto" style="width: 30rem">
            <div class="card-body">
                <form action="/login" method="post">
                @csrf
                    @if ($errors->any())
                    <p class="text-danger">Adja meg mindkét mező adatát!</p>
                    @endif
                    @isset($sv)
                        <p class="text-danger">Név vagy a jelszó nem egyezik!</p>
                    @endisset

                <div class="py-2">
                    <label for="name" class="form-label">Felhasználónév:</label>
                    <input type="text" name="name" id="name" class="form-control" >
                </div>
                <div class="py-2">
                    <label for="password" class="form-label">Jelszó:</label>
                    <input type="password" name="password" id="password" class="form-control">

                </div>
                <div class="py-2">
                    <button type="submit" class="btn btn-dark d-grid gap-2 col-6 mx-auto">Belépés!</button>
                </div>


                </form>
            </div>

        </div>
    </main>


@endsection

