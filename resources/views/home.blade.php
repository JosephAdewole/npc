@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">States</div>

                <div class="card-body">
                    {{$states->count()}}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">LGAs</div>

                <div class="card-body">
                    {{$lgas->count()}}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Wards</div>

                <div class="card-body">
                    {{$wards->count()}}
                </div>
            </div>
        </div><div class="col-md-6">
            <div class="card">
                <div class="card-header">Citizens in the Country</div>

                <div class="card-body">
                    {{$citizens->count()}}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Citizens by Ward</div>

                <div class="card-body">
                    @foreach ($wardcitizencount as $wardcitizenitem)
                        <p>Ward Name : {{$wardcitizenitem->name}}, <span>Citizen Count :{{$wardcitizenitem->citizen_count}}</span></p>
                    @endforeach
                </div>
            </div>
        </div>
        
        
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">LGAs by State</div>

                <div class="card-body">
                    @foreach ($statelgascount as $statecitizenitem)
                        <p>State Name : {{$statecitizenitem->name}}, <span>LGA Count :{{$statecitizenitem->lga_count}}</span></p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Wards by LGA</div>

                <div class="card-body">
                    @foreach ($lgawardscount as $lgacitizenitem)
                        <p>LGA Name : {{$lgacitizenitem->name}}, <span>Wards Count :{{$lgacitizenitem->ward_count}}</span></p>
                    @endforeach
                </div>
            </div>
        </div>
       
    </div>
    
</div>
@endsection
