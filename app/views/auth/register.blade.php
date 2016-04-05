@extends('layouts.app')

@section('title', 'Register')

@section('content')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <h1>Register</h1>
                <hr>

                {{ HTML::image('Suzi-K-Logo.png', 'Barber Logo', array( 'width' => 120, 'height' => 120 )) }}
                <br>
                <br>
                @include('errors')

                <form method="POST" action="/auth/register">
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" name="first_name" class="form-control" value="{{ Input::old('first_name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" name="last_name" class="form-control" value="{{ Input::old('last_name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" name="address" class="form-control" value="{{ Input::old('address') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Telephone:</label>
                        <input type="telephone" name="telephone" class="form-control" value="{{ Input::old('telephone') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" value="{{ Input::old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="Password" id="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Sign up</button>
                    </div>

                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </form>
            </div>

        </div>
@stop
