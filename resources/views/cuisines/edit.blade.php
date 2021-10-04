@extends('template.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card ">
            <form role="form" method="POST" action="{{ route('cuisines.update',$cuisine->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="cuisine_name">Nama Masakan</label>
                                <input type="text" class="form-control" id="cuisine_name" name="cuisine_name" placeholder="Masukkan Nama Masakan" value="{{ $cuisine->cuisine_name }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="description">Deskripsi Masakan</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi Masakan" value="{{ $cuisine->description }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="ingredients">Bahan Masakan</label>
                                <input type="text" class="form-control" id="ingredients" name="ingredients" placeholder="Masukkan Bahan Masakan" value="{{ $cuisine->ingredients }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="recipe">Cara Masak</label>
                                <input type="text" class="form-control" id="recipe" name="recipe" placeholder="Masukkan Cara Masak" value="{{ $cuisine->recipe }}" required>
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