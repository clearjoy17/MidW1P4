@extends('base')

@section('content')


<body>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-5">
            <div class="card-body">
                <div class="class d-flex justify-content-center">
                    <img src="/picture/register.png" class="rounded-circle" style="height: 100px">
                </div>
            <div class="card-body">
                <form action="{{url('/register')}}" method="post">
                {{csrf_field()}}
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                {{-- <div class="mb-3">
                    <label for="phone">Mobile phone</label>
                    <input type="phone" name="phone" id="phone" class="form-control">
                </div> --}}

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="d-grid gap-2 col-5 mx-auto">
                    <button class="btn btn-primary" type="submit">Register</button>
                    <button class="btn btn-danger" type="submit">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
<style>
    body{
        background-color: rgb(3, 109, 56);

    }
</style>

@stop
