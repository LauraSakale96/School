@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pieslēgties') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="epasts" class="col-sm-4 col-form-label text-md-right">{{ __('E-Pasta Adrese') }}</label>

                            <div class="col-md-6">
                                <input id="epasts" type="email" class="form-control{{ $errors->has('epasts') ? ' is-invalid' : '' }}" name="epasts" value="{{ old('epasts') }}" required autofocus>

                                @if ($errors->has('epasts'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('epasts') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="paroole" class="col-md-4 col-form-label text-md-right">{{ __('Parole') }}</label>

                            <div class="col-md-6">
                                <input id="parole" type="password" class="form-control{{ $errors->has('parole') ? ' is-invalid' : '' }}" name="parole" required>

                                @if ($errors->has('parole'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('parole') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Atcerēties') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Pieslēgties') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Aizmirsāt paroli?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
