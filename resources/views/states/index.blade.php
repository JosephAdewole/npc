@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> States</div>

                <div class="card-body">
                    @foreach ($states as $state)
                        <p>{{$state->name}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
