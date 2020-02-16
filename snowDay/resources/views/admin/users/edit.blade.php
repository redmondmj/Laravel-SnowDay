
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Edit User: {{ $user->name }}</div>
                    <div class="card-body">
                    <form action="{{ route('admin.users.update', $user) }}" method="post">
                        {{ method_field('put') }}
                        @csrf
                        @foreach ($roles as $role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{ $role->id }}" id="roles_{{ $role->name }}">
                                <label for="roles_{{ $role->name }}">{{ $role->name }}</label>
                            </div>
                        @endforeach
                        <button class="btn btn-info text-white float-left" type="submit">Update</button>
                    </form>

                        <a href="{{ URL::previous() }}" class="btn btn-info text-white float-left ml-5" role="button">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
@endsection

