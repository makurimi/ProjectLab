@extends('template.navbar')

@section('container')
<title>Login</title>

<style>
.container{
    padding-top: 50px;
    padding-bottom: 50px;
}

body {
    background-color: #ececec;
}

button{
    align-content: center;
}
</style>

<h1 class="text-center mb-10">Login</h1>
    <div class="container ">
        <div class="row justify-content-center">
         <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputEmail1" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Your Password">
                        </div>
                        <div class="mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="btn" class="btn btn-outline-secondary btn-lg">Login</button>
                        </div>
                        <div class="mb-4">
                        <p>Don't have an account? <a href="/register">Register Here</a>.</p>
                        </div>
                      </form>
                </div>
            </div>
         </div>
        </div>
    </div>
@endsection
