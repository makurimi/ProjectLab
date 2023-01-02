@extends('template.navbar')
@section('container')

<style>
body {
    background-color: #ececec;
}
</style>

<br>
<div class="col-md-3">
            <form action="" class="d-flex">
                <input type="search" class="form-control me-2" placeholder="Search" aria-label="search" name="search">
                <button class="btn btn-outline-dark bi bi-search" type="submit"></button>
            </form>
        </div>
    </div>
<br>
<div class="container">
    <a href="/additem" class="btn btn-success mb-3">Insert Item</a>
    <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success " role="alert">
           {{ $message }}
          </div>
        @endif

<table class="table table-striped mt-10">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Images</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <th scope="row"></th>

            <td>
                <img src="" style="width: 50px" alt="">
            </td>
            <td></td>
            <td><strong>Rp. </strong></td>
            <td></td>
            <td></td>

            <td>
              <a href="" class="btn btn-primary bi bi-pencil-square"></a>
              <a href=""class="btn btn-danger bi bi-trash3"></a>
            </td>
          </tr>


      </tbody>
</table>
    </div>
</div>

@endsection
