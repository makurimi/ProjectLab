@extends('template.navbar')
@section('container')

<style>
body{
        background-color:#ececec;
    }
</style>
<br>
<div class="row justify-content-center">
<div class="card col-md-6">
  <div class="card-header">
    Profile
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
         <div class="col-12">
                <div class="card-body">
                        <div class="mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="mb-4">
                            <label for="name" class="form-label">Email</label>
                            <input type="text" name="name" class="form-control" id="name" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="mb-4">
                            <label for="name" class="form-label">Gender</label>
                            <input type="text" name="name" class="form-control" id="name" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="mb-4">
                            <label for="name" class="form-label">Date of Birth</label>
                            <input type="text" name="name" class="form-control" id="name" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
                        </div>
                        <div class="mb-4">
                            <label for="name" class="form-label">Country</label>
                            <input type="text" name="name" class="form-control" id="name" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
                        </div>

                </div>
         </div>
        </div>
            </div>

@endsection
