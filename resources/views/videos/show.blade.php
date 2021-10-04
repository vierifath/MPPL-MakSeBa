@extends('adminlte.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>MakSeBa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Home</li>
                    <li class="breadcrumb-item active">Videos</li>
                    <li class="breadcrumb-item"><a href="#">Show</a></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="row">

    <div class="col-md-9">

        <div class="card">
            <div class="card-body">
                <div class="tab-content">

                    <div id="data-diri">

                        <table class="table">
                            <div class="text-center">
                                <img class="img-fluid" src="{{ url('/cuisines_photo/'.$video->photo) }}" alt="Cuisine photo">
                            </div>
                            <tbody>

                                <tr>
                                    <td>ID</td>
                                    <td>{{ $video->id }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Masakan</td>
                                    <td>{{ $video->cuisine_name }}</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>{{ $video->description }}</td>
                                </tr>
                                <tr>
                                    <td>Bahan</td>
                                    <td>{{ $video->ingredients }}</td>
                                </tr>
                                <tr>
                                    <td>Cara Masak</td>
                                    <td>{{ $video->recipe }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $video->user->email }}</td>
                                </tr>
                            </tbody>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card card-primary">
                                        @can('upload video')
                                        <form role="form" method="POST" action="{{ route('videos.update',$video->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="video">upload video</label>
                                                            <input type="file" name="video" id="video" class="form-control " value="{{old('video')}}">
                                                            @error('video')
                                                            <span class="error invalid-feedback">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        @endcan

                                    </div>
                                </div>
                            </div>
                        </table>

                        <form role="form" method="POST" action="{{ route('videos.cancel' , $video->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="text" class="form-control" id="cancel" name="cancel" value="{{ $video->video }}" hidden>
                            <button type="submit" class="btn btn-danger float-right">
                                cancel
                            </button>

                        </form>



                    </div>
                </div>
            </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->

</div>
@endsection