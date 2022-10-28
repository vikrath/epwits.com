@extends('layout.layout')
@section('content')
    <div class="container" id="help-card">
        <div class="card">
            <div class="card-header">
                Help Desk for Developers
            </div>
            <div class="card-body">
                <h5 class="card-title">Dont Forget these when you start developing</h5>
                <p class="card-text">Don't forget to execute the sass, you can type, go to the public folder, and type : 
                    <code>sass --watch scss:css</code>
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection
