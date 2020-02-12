@extends('layouts.app')

@section('content')
    <div class="container">

        <form method="POST" action="{{ route('votes.vote') }}">
            @csrf

            @guest
                <div class="row d-flex justify-content-center">
                    <p class="display-4 text-center">Hey Stranger!!!</p> 
                </div>
                <div class="form-group row">
                    <label for="guest_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        
                    <div class="col-md-6">
                        <input id="guest_name" type="text" class="form-control @error('guest_name') is-invalid @enderror" name="guest_name" value="{{ old('guest_name') }}" autocomplete="guest_name" autofocus>
        
                        @error('guest_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="guest_school" class="col-md-4 col-form-label text-md-right">{{ __('School Name') }}</label>
        
                    <div class="col-md-6">
                        <input id="guest_school" type="text" class="form-control @error("guest_school") is-invalid @enderror" name="guest_school" value="{{ old("guest_school") }}" autocomplete="guest_school">
        
                        @error("guest_school")
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <p class="display-3 text-center">So, will there be a snow day for your school tomorrow?</p>
                </div>
                
            @else
                <div class="row d-flex justify-content-center">
                    <p class="display-5 text-center">Welcome {{ Auth::user()->name }}!!!</p> 
                </div>
                <div class="row d-flex justify-content-center">
                    <p class="display-4 text-center">So, will there be a snow day for {{ Auth::user()->school ?? school}} tomorrow?</p>
                </div>
    
            @endguest
            
            <div class="row">
                <div class="col-6 d-flex justify-content-center">
                    <button class="btn btn-outline-success btn-lg" name="vote" value="yes" type="submit">Yes!</button>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <button class="btn btn-outline-danger btn-lg" name="vote" value="no" type="submit">No!</button>
                </div>
            </div>  
        </form>
    </div>
    
@endsection