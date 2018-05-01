@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nomainīt Paroli') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('parole.epasts') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="epasts" class="col-md-4 col-form-label text-md-right">{{ __('E-Pasta Adrese') }}</label>

                            <div class="col-md-6">
                                <input id="epasts" type="email" class="form-control{{ $errors->has('epasts') ? ' is-invalid' : '' }}" name="epasts" value="{{ old('epasts') }}" required>

                                @if ($errors->has('epasts'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('epasts') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
