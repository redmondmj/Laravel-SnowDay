@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">{{ __('Results') }}</div>
                <div class="card-body" id="result">
                    <p>The result is .</p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Votes') }}</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>User Id</th>
                            <th>Name</th>
                            <th>School</th>
                            <th>Snow Vote</th>
                        </tr>
                        @for($i = 0; $i < count($votes); $i++) <tr>
                            <td><a href="/votes/show/{{ $votes[$i]->id }}">{{ $votes[$i]->id }}</a></td>
                            <td>{{ $votes[$i]->user_id }}</td>
                            <td>{{ $votes[$i]->name }}</td>
                            <td>{{ $votes[$i]->school }}</td>
                            <td>{{ $votes[$i]->vote }}</td>
                            </tr>
                            @endfor
                    </table>
                    <a href="{{ URL::previous() }}" class="btn btn-info text-white" role="button">Go Back</a>

                </div>
            </div>
            <div id="app">
                <example-component></example-component>
            </div>
        </div>
    </div>

</div>


@endsection
