@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <chart-component :yesvotes="{!! json_encode($data['yesVotes']) !!}" :novotes="'{{ $data['noVotes'] }}'">
            </chart-component>
            <div class="card mb-3">
                <div class="card-header">Votes</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>User Id</th>
                            <th>Name</th>
                            <th>School</th>
                            <th>Snow Vote</th>
                        </tr>
                        @for($i = 0; $i < count($data['votes']); $i++) <tr>
                            <td><a href="/votes/show/{{ $data['votes'][$i]->id }}">{{ $data['votes'][$i]->id }}</a></td>
                            <td>{{ $data['votes'][$i]->user_id }}</td>
                            <td>{{ $data['votes'][$i]->name }}</td>
                            <td>{{ $data['votes'][$i]->school }}</td>
                            <td>{{ $data['votes'][$i]->vote }}</td>
                            </tr>
                            @endfor
                    </table>
                    <a href="{{ URL::previous() }}" class="btn btn-info text-white" role="button">Go Back</a>

                </div>
            </div>
            <example-component></example-component>
        </div>
    </div>

</div>


@endsection
