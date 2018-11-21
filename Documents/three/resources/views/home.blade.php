@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> MEMBER Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><h4>Selamat Datang <strong> PEMESAN </strong>!
                        <p>Cara mudah booking ruangan Departemen TEDI hanya di 
                        <a href="/mesan">Sistem Informasi Peminjaman Ruang Departemen TEDI</a>. </p>
                    </h4></center>
                        <center><h2><i>Booking from Anywhere</i></h2>
                        </center>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('logout')
    <a href="{{ route('user.logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
@endsection
