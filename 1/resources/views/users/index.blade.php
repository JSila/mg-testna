@extends('layouts.master')

@section('title', 'User list')

@section('content')
    <main>
        <div class="container">
            <table>
                <thead>
                <tr>
                    <th>Full name</th>
                    <th>Login name</th>
                    <th>Company</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->last_name }} {{ $user->first_name }}</td>
                        <td>{{ $user->login_name }}</td>
                        <td title="{{ $user->company->address }}">{{ $user->company->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
