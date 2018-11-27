@extends('layouts.app')
@section('logout')
	<a href="{{ route('admin.logout') }}"
	onclick="event.preventDefault();
	document.getElementById('logout-form').submit();">
	Logout
	</a>
	<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
	{{ csrf_field() }}
	</form>
@endsection

@section('content')
	<div class="container">
	<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<center><h1>Ubah Pemesanan</h1> </center>
	@if (count($errors) > 0)
	<div class="alert alert-danger">
	<strong>Sorry!</strong> Something wrong with your input data.<br><br>
	<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
	</ul>
	</div>
	@endif
	{!! Form::model($pesan, ['method' => 'PATCH','route' => ['pemesanan.update', $pesan->id]]) !!}
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>Nama:</strong>
	{!! Form::text('name', null, array('placeholder' => 'Nama','class' => 'form-control')) !!}
	</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>NIM	:</strong>
	{!! Form::text('nim', null, array('placeholder' => 'Nomor Induk Mahasiswa','class' => 'form-control')) !!}
	</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>Nomor Telepon	:</strong>
	{!! Form::text('no_telp', null, array('placeholder' => 'Nomor Telepon Yang Aktif','class' => 'form-control')) !!}
	</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>Prodi :</strong>
	{!! Form::text('prodi', null, array('placeholder' => 'Prodi','class' => 'form-control')) !!}
	</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>Tanggal Pinjam	:</strong>
	{!! Form::text('tgl_pinjam', null, array('placeholder' => 'Tanggal Pinjam','class' => 'form-control')) !!}
	</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-12">
	<div class="form-group">
	<strong>Ruang :</strong>
	{!! Form::select('ruang', ['R. Sidang Herman Yohanes' => 'R. Sidang Herman Yohanes', 'Ruang Pertemuan' => 'Ruang Pertemuan', 'Laboratorium Komputer' => 'Laboratorium Komputer', 'Laboratorium Elektronika' => 'Laboratorium Elektronika', 'Laboratorium Multimedia' => 'Laboratorium Multimedia', 'Ruang Kelas U 202' => 'Ruang Kelas U 202', 'Laboratorium Grafika' => 'Laboratorium Grafika', 'Ruang Kelas S 100' => 'Ruang Kelas S 100', 'HALL' => 'HALL'], null, ['placeholder' => '-	- Pilih Ruangan -	-']); !!}
</div>
</div> 
	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
	<button type="submit" class="btn btn-primary">Submit</button>
	</div>
	</div>
	{!! Form::close() !!}
	</div>
	</div>
@endsection
