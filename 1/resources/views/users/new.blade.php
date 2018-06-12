@extends('layouts.master')

@section('title', 'Add user')

@section('content')
    <main>
        <div class="container">

            <h2>Add user form</h2>

            <form method="post" action="{{ route('users.create') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="login_name">Login Name</label>
                    <input type="text" id="login_name" name="login_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="company_id">Company</label>
                    <select name="company_id" id="company_id">
                        <option value="">Select company</option>
                        @foreach($companies as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit">Create user</button>
                </div>

            </form>

            @include('partials.errors')
        </div>
    </main>
@endsection
