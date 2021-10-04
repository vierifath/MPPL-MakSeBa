@extends('adminlte.master')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Cuisines : {{$admin->cuisine_name}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">            
                    <li class="breadcrumb-item active">Home</li>
                    <li class="breadcrumb-item active">Cuisines</li>
                    <li class="breadcrumb-item"><a href="#">Edit</a></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="row">
    <div class="col-sm-12">
        <div class="card ">
            <form role="form" method="POST" action="{{ route('admins.update',$admin->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="cuisine_name">Nama Masakan</label>
                                <input type="text" class="form-control" id="cuisine_name" name="cuisine_name" placeholder="Masukkan Nama Masakan" value="{{ $admin->cuisine_name }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="description">Deskripsi Masakan</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi Masakan" value="{{ $admin->description }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="ingredients">Bahan Masakan</label>
                                <input type="text" class="form-control" id="ingredients" name="ingredients" placeholder="Masukkan Bahan Masakan" value="{{ $admin->ingredients }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="recipe">Cara Masak</label>
                                <input type="text" class="form-control" id="recipe" name="recipe" placeholder="Masukkan Cara Masak" value="{{ $admin->recipe }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset('/adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>

<script>
    $('.datemask').inputmask('yyyy', {
        'placeholder': 'yyyy'
    })
</script>
@endpush