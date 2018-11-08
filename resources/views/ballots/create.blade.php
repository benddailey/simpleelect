@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Ballot</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ballots.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="open_at" class="col-md-4 col-form-label text-md-right">Open</label>

                            <div class="col-md-6">
                                <input id="open_at" type="datetime-local" class="form-control{{ $errors->has('open_at') ? ' is-invalid' : '' }}" name="open_at" value="{{ old('open_at') }}">

                                @if ($errors->has('open_at'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('open_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="close_at" class="col-md-4 col-form-label text-md-right">Close</label>

                            <div class="col-md-6">
                                <input id="close_at" type="datetime-local" class="form-control{{ $errors->has('close_at') ? ' is-invalid' : '' }}" name="close_at" value="{{ old('close_at') }}">

                                @if ($errors->has('close_at'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('close_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Ballot
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
