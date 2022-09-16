@extends('main')

@section('title','Input data Edulevel  ')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Input</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Add Data</a></li>
                        <li><a href="#">Pelajaran</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">

        <div class="animated fadeIn">

            

            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Input Data Pelajaran</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('pelajaran') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-forward"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('pelajaran') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nama Pelajaran</label>
                                    <input type="text" name="nama_pelajaran" class="form-control" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" name="kelas" class="form-control" autofocus required>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="desc" class="form-control" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    
@endsection