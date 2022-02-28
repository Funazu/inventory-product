@extends('template')

@section('content')
<div class="row mt-5 justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating mb-1">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

@endsection