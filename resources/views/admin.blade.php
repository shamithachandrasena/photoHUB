@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome Administrator!

                    You can create Albums and Upload photos to PhotoHUB
                    
                    Also you can delete the images and albums
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
