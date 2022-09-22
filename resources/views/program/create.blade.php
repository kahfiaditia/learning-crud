@extends('main')

@section('title','Input data Program  ')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Input Program</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Program</a></li>
                        <li><a href="#">Add Data</a></li>
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
                        <strong>Input Data Program</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('programs') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-forward"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('programs') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Jenjang</label>
                                    <select name="edulevel_id" class="form-control @error('edulevel_id') is-invalid @enderror">
                                        <option value="">-- Pilih --</option>
                                            @foreach ($edulevels as $item)
                                                <option value="{{ $item->id }}" {{ old('edulevel_id') == $item->id ? 'selected': null}}>{{ $item->name }}</option>
                                            @endforeach
                                    </select>
                                    @error('edulevel_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama Program</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" autofocus>
                                        @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label>Harga Member</label>
                                    <input type="number" name="student_price" value="{{ old('student_price') }}" class="form-control @error('student_price') is-invalid @enderror">
                                        @error('student_price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label>Student Max</label>
                                    <input type="number" name="student_max" value="{{ old('student_max') }}" class="form-control @error('student_max') is-invalid @enderror">
                                        @error('student_max')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="info" class="form-control  @error('info') is-invalid @enderror">{{ old('info') }}</textarea>
                                        @error('info')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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