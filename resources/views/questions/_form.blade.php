@csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Question Code</label>

    <div class="col-md-6">
        <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" value="{{ old('code', $question->code) }}" maxlength="12" required autofocus>

        @if ($errors->has('code'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('code') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="text" class="col-md-4 col-form-label text-md-right">Question Text</label>

    <div class="col-md-6">
        <input id="text" type="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="text" value="{{ old('text', $question->text) }}">

        @if ($errors->has('text'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('text') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="ballot_id" class="col-md-4 col-form-label text-md-right">Ballot</label>

    <div class="col-md-6">
        <select id="ballot_id" class="form-control{{ $errors->has('ballot_id') ? ' is-invalid' : '' }}" name="ballot_id">
            <option value="">Select Ballot</option>
            @foreach ($ballots as $ballot)
                <option value="{{ $ballot->id }}" {{ ( $ballot->id == old('ballot_id', $question->ballot_id) ? ' selected' : '' ) }}>{{ $ballot->name }}</option>
            @endforeach
        </select>

        @if ($errors->has('ballot_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('ballot_id') }}</strong>
            </span>
        @endif
    </div>
</div>
