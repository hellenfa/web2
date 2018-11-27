@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat Datang <strong>ADMIN</strong>! </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<<<<<<< HEAD
                    <a href="admin/pemesanan">
=======
                    <a href="admin/pemesanan"> 
>>>>>>> 578f1a3d336f061993da2d97b8fd3486f37ec29d
                        <button type="button" class="btn btn-primary">
                            Kelola Pemesanan
                        </button>
                    </a>
                    <a href="manageadmins">
                        <button type="button" class="btn btn-danger">
                            Manage Admins
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('logout')
    <a href="{{ route('admin.logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
    Logout
    </a>
    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
    </form>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 578f1a3d336f061993da2d97b8fd3486f37ec29d
