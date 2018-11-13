@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Questions</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($questions as $question)
                            <li class="list-group-item">
                                <a href="{{ route('questions.edit', $question) }}">
                                    {{ $question->code }}: {{ $question->text }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-footer">
                    <a role="button" class="btn btn-success" href="{{ route('questions.create') }}">New Question</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
