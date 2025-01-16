@extends('layout')
@section('content')


    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">Jelszó módosítás</h1>
        <div class="card mx-auto" style="width: 30rem">
            @isset($sv)
            <p class="text-danger">{{$sv}}</p>
            @endisset
            <div class="card-body">
                <form action="/newpass" method="post">
                @csrf
                <div class="py-2">
                    <label for="oldpassword" class="form-label">Régi jelszó:</label>
                    <input type="password" name="oldpassword" id="oldpassword" class="form-control">
                    @error('oldpassword')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="newpassword" class="form-label">Új jelszó:</label>
                    <input type="password" name="newpassword" id="newpassword" class="form-control">
                    @error('newpassword')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="newpassword_confirmation" class="form-label">Jelszó újra:</label>
                    <input type="password" name="newpassword_confirmation" id="newpassword_confirmation" class="form-control">
                    @error('newpassword_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-2">
                    <button type="submit" class="btn btn-dark d-grid gap-2 col-6 mx-auto">Új jelszó!</button>
                </div>



                </form>
            </div>

        </div>
    </main>


@endsection

