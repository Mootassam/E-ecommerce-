@extends('layouts.app')

@section('content')

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                                <input id="name" placeholder="Saisir Name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="form-group">
                                <input id="email" placeholder="Saisir Email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" placeholder="Sasir Password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                            </div>



                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Register') }}
                                </button>

                    </form>

@endsection
