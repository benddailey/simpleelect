@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ballots</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($ballots as $ballot)
                            <li class="list-group-item">
                                <a href="{{ route('ballots.edit', $ballot) }}">
                                    {{ $ballot->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-footer">
                    <a role="button" class="btn btn-success" href="{{ route('ballots.create') }}">New Ballot</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
