
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Management:</div>
                    <div class="card-body">
                        @foreach ($users as $user)
                            {{ $user->name }} - {{ $user->email }} <br>
                        @endforeach
                        {{-- <button href="{{ URL::previous() }}" class="btn btn-primary" type="button">Go Back!</button> --}}
                        <a href="{{ URL::previous() }}" class="btn btn-info text-white" role="button">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
@endsection

