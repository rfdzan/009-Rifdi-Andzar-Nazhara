@extends('layout.default')
@section('content')
<section class="registration">
    <div class="container py-5">
        <div class="w-50 center border rounded px-3 py-3 mx-auto">
            <h1>Login</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" value="" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection