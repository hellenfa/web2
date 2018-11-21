@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <center><h1>VERIFIKASI </h1></center></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><h4><strong>TERIMAKASIH, PESANAN PEMINJAMAN RUANG ANDA TELAH TERCATAT!</strong></h4><br>
                            SETELAH MELAKUKAN PEMESANAN, MOHON UNTUK MENUNGGU KONFIRMASI PESANAN RUANGAN ANDA YANG AKAN DIKIRIM MELALUI SMS KE NOMOR HP ANDA.<br>
                    TERIMA KASIH ATAS PERHATIANNYA</center>
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
