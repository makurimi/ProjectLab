@extends('template.navbar')
@section('container')

<style>
body{
        background-color:#ececec;
    }
</style>
<br>
<form action="/manage" class="d-flex">
            <button type="btn" class="btn btn-outline-secondary btn-lg" >Back</button>
        </form>
<br>
<div class="row justify-content-center">
<div class="card col-md-6">
  <div class="card-header">
    Update Product
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
         <div class="col-12">
                <div class="card-body">
                    <form action="/" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="">
                        </div>
                        <div class="mb-4">
                            <label for="category" class="form-label @error('category') is-invalid @enderror">Category</label>
                            <select class="form-control" id="category">
                        <option>Select a Category</option>
                        <option>Beauty</option>
                        <option>Camera</option>
                            </select>
                            </div>

                        <div class="mb-4">
                          <label for="detail" class="form-label">Detail</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>

                        <div class="mb-4">
                          <label for="price" class="form-label">Price</label>
                          <input type="text" name="price" class="form-control" id="price" >
                        </div>

                        <div class="mb-4">
                          <label for="image" class="form-label">Photo</label>
                          <input class="form-control" type="file" id="image">
                        </div>

                        <div class="mb-3">
                            <button type="btn" class="btn btn-outline-secondary btn-lg">Update</button>
                        </div>

                      </form>
                </div>
         </div>
        </div>
            </div>

@endsection
