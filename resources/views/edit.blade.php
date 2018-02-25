@extends('layouts.template')


@section('title')
Tambah Data
@endsection


@section('content')
	<div class="section">
		<div class="card-panel blue darken-1 white-text">Edit Data</div>
	</div>

	<div class="section">
		<form action="{{url('todo/'.$data->id)}}" method="POST">
			{!! csrf_field() !!}

			<input type="hidden" name="_method" value="put">

			<div class="row">
				<div class="input-field col s12">
					<input type="text" id="judul" name="judul" class="validate" value="{{$data->judul}}">
					<label for="judul">Judul</label>
				</div>
			</div>


			<div class="row">
				<div class="input-field col s12">
					<textarea id="isi" class="materialize-textarea" name="isi">{{$data->isi}}</textarea>
					<label for="isi">Isi</label>
				</div>
			</div>

			<button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Simpan<i class="material-icons right">send</i></button>
		</form>
	</div>


@endsection