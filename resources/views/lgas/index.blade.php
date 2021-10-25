@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> LGAs</div>

                <div class="card-body">
                    @foreach ($lgas as $lga)
                        <p>{{$lga->name}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
