@extends('layouts.app')

@section('page_title')
	Edit Profil
@endsection

@section('content')
	<x-breadcrumb :links="$breadcrumb"/>
	<x-code-base-block title="Edit Profil">
		<form action="{{ route('profile.edit') }}" method="POST">
			@csrf
			@method('PUT')
			<x-form-group-text label="Name" name="name" id="fieldName" :value="old('_token') ? old('name') : $user->name" :message="$errors->first('name')"/>
			<x-form-group-text label="Email" name="email" id="fieldEmail" :value="old('_token') ? old('email') : $user->email" :message="$errors->first('email')"/>
			<div class="form-group">
				<button class="btn btn-alt-primary">Simpan</button>
			</div>
		</form>
	</x-code-base-block>
@endsection
