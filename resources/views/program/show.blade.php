@extends('main')

@section('title','Programs  ')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Programs</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Data</a></li>
                        <li><a href="#">Detail</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">

        <div class="animated fadeIn">

            <div class="animated fadeIn">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
    
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Detail Programs</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('programs') }}" class="btn btn-default btn-sm">
                                <i class="fa fa-forward"></i> Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width:30%">Edulevel</th>
                                            <td>{{ $program->edulevel->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Programs</th>
                                            <td>{{ $program->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Student Price</th>
                                            <td>{{ $program->student_price }}</td>
                                        </tr>
                                        <tr>
                                            <th>Student Max</th>
                                            <td>{{ $program->student_max }}</td>
                                        </tr>
                                        <tr>
                                            <th>Info</th>
                                            <td>{{ $program->info }}</td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $program->created_at }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>

    </div>
    
@endsection