@extends('template')

@section('content')
<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating mb-1">
                    <input type="text" name="username" class="form-control" id="username" required>
                    <label for="text">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>

@endsection