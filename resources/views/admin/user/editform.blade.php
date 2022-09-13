@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
          <div class="card mb-9">
            <h5 class="card-header">edit User</h5>
            <div class="card-body">
              <div>
                <label for="defaultFormControlInput" class="form-label">Name</label>
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="defaultFormControlInput"
                  aria-describedby="defaultFormControlHelp"
                />

                <label for="defaultFormControlInput" class="form-label"><address></address></label>
                <input
                  type="text"
                  name="address"
                  class="form-control"
                  id="defaultFormControlInput"
                  aria-describedby="defaultFormControlHelp"
                />

                <label for="defaultFormControlInput" class="form-label">email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="defaultFormControlInput"
                  aria-describedby="defaultFormControlHelp"
                />

                <label for="defaultFormControlInput" class="form-label">Phone</label>
                <input
                  type="text"
                  name="Phone"
                  class="form-control"
                  id="defaultFormControlInput"
                  aria-describedby="defaultFormControlHelp"
                />
                <a href="" class="btn btn-primary mt-3">บันทึก</a>
                <a href="category.html" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection