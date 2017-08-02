@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Data Author</h1><br></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> Data Athor 
		<div class="panel-title pull-right">
			<a href="{{URL::previous()}} ">Kembali</a></div></div>

			<div class="panel-body">
				<div class="form-group">
					<label class="control-lable">Nama Athor</label>
					<input type="text" name="nama" class="form-control" value="{{$author->nama}} " readonly>
				</div>
				</form>
				</div>
		</div>
	</div>
@endsection