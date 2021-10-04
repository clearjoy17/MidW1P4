@extends('base')

@section('content')

<style>
    .col-md-4{
        margin-top: 7%;
    }
  body{
        background-color: rgb(3, 109, 56);
    }
</style>

<div class="container">
    <div class="col-md-4 offset-4">
        <div class="card">
            <div class="card-header bg-secondary text-white text-center ">
                <h3>Delete Item</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/dashboard/delete/' . $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <h5 class="mt-2 mb-3">Are you sure you want to delete this item?: {{ $item->name }}? </h5>

                    <div class="text-center">
                        <button class="btn btn-danger" type="submit">Delete</button>
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary text-white">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
