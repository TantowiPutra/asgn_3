@extends('layout.parent')

<style>
    .card {
        background-color: rgba(51, 41, 46, 1) !important;
        border: none !important;
    }

    .img {
        height: 100%;
        width: 500;
    }

    .card-body {
        width: 100%;
    }

    .card-title {
        font-size: 30pt;
    }

    .card-text {
        text-align: justify;
    }
</style>
@section('container')
    <div class="image">
        <img class="img" src="https://source.unsplash.com/500x500?people" alt="">
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Hello My Name is Tantowi!</h5>
            <h6 class="card-subtitle mb-2 text-muted">My Biodata</h6>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. In molestiae dicta repellat
                totam laudantium suscipit accusamus officia quidem ab iusto consequuntur, amet eos ullam quas? Quibusdam
                earum suscipit explicabo nesciunt amet quasi odio natus molestiae ipsam beatae, quam veritatis nostrum
                ut fuga. Non perspiciatis earum praesentium porro officia! Recusandae, ab?</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
@endsection
