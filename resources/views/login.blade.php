@extends('navbar')

@section('container')
<title>Login</title>

<style>
.container{
    padding-top: 50px;
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
                    <form action="/datainserted" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text"name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputEmail1" class="form-label">Password</label>
                          <input type="text" name="name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Password">
                        </div>
                        <div class="mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-outline-secondary btn-lg">Login</button>
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
