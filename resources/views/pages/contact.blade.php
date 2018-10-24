
@extends('layouts.default')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Contact Us</h1>
        </div>
    </div>




    <form action="{{route('contact.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">Message</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
    </div>
@endsection