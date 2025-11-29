@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card card-primary card-outline">
            <div class="card-body text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="https://ui-avatars.com/api/?name={{ $user->name }}"
                     alt="User profile picture">

                <h3 class="profile-username mt-3">{{ $user->name }}</h3>
                <p class="text-muted">{{ $user->email }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Informasi Akun</h3>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Dibuat</th>
                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
                    </tr>
                </table>

                <a href="{{ route('password.change') }}" class="btn btn-warning mt-3">
                    Ganti Password
                </a>
            </div>
        </div>
    </div>
</div>
@stop
