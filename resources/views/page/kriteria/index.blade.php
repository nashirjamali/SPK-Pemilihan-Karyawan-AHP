@extends('master')

@section('content')
<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Kriteria </h2>
            <p class="pageheader-text">Daftar kriteria setiap seleksi</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Kriteria</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->

<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah
                </button>
            </h5>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kriteria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('criteria.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama" class="col-form-label">Nama *</label>
                                    <input id="nama" type="text" class="form-control" name="nama" required>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered first" width="100%">
                        <thead>
                            <tr>
                                <th width="70%">Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kriteria as $key)
                            <tr>
                                <td>{{ $key->nama }}</td>
                                <td>
                                    <form action="{{route('criteria.destroy',[$key->id])}}" method="POST">
                                        <input type="hidden" name="_method" value="Delete">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @stop