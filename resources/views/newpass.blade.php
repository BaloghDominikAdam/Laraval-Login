@extends('layout')
@section('content')


    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">Regisztráció</h1>
        <div class="card mx-auto" style="width: 30rem">
            <div class="card-body">
                <form action="/reg" method="post">
                @csrf
                <div class="py-2">
                    <label for="newpassword" class="form-label">Jelszó:</label>
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
                    <label for="oldpassword" class="form-label">Jelszó:</label>
                    <input type="password" name="oldpassword" id="oldpassword" class="form-control">
                    @error('oldpassword')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="oldpassword_confirmation" class="form-label">Jelszó újra:</label>
                    <input type="password" name="oldpassword_confirmation" id="oldpassword_confirmation" class="form-control">
                    @error('oldpassword_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>



                </form>
            </div>

        </div>
    </main>


@endsection

