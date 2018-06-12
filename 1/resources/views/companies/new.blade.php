@extends('layouts.master')

@section('title', 'Add company')

@section('content')
    <main>
        <div class="container">

            <h2>Add company form</h2>

            <form method="post" action="{{ route('companies.create') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit">Create company</button>
                </div>

            </form>

            @include('partials.errors')

        </div>
    </main>
@endsection
