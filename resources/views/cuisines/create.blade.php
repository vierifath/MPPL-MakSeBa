@extends('template.master')

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

<div class="row">
    <div class="col-sm-12">
        <div class="card card-primary">
            <form role="form" method="POST" action="{{ route('cuisines.store')  }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" name="photo" id="photo" class="form-control " value="{{old('photo')}}">
                                @error('photo')
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="cuisine_name">Nama Masakan</label>
                                <input type="text" class="form-control" id="cuisine_name" name="cuisine_name" placeholder="Masukkan Nama Masakan" value="{{old('name')}}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi Masakan" value="{{old('description')}}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="ingredients">Bahan</label>
                                <input type="text" class="form-control" id="ingredients" name="ingredients" placeholder="Masukkan Bahan Masakan" value="{{old('ingredients')}}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="recipe">Cara Masak</label>
                                <input type="text" class="form-control" id="recipe" name="recipe" placeholder="Masukkan Cara Masak" value="{{old('recipe')}}" required>
                            </div>
                        </div>
                        <div class="col-sm-6" style="display: flex; align-items: center">
                            <p>Agree to make video of my recipe</p>
                            <!-- radio -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="video" value="1" id="radio-video-a">
                                    <label class="form-check-label" for="radio-video-a">Agree</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="video" value="0" id="radio-video-d">
                                    <label class="form-check-label" for="radio-video-d">Disagree</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection