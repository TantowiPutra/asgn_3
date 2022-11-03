@extends('layout.parent')

<style>
    .card {
        background-color: rgba(51, 41, 46, 1) !important;
        border: none !important;
    }
</style>
@section('container')
    <div class="card" style="width: 18rem;">
        <h2>About Me</h2>
        <img src="https://source.unsplash.com/500x500?people" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">I'm a third-year Computer Science Student at Bina Nusantara University</p>
        </div>
    </div>
@endsection
