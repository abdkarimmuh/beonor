@extends('backend.layout.template')
@section('title','Manajemen Organisasi')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary" style="background: linear-gradient(to bottom left, #5F65A3 , #21BCEA)">
                    <h4 class="card-title">Manajemen Organisasi</h4>
                    <p class="card-category">Edit Informasi Organisasi Anda</p>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Nama Organisasi</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Nomor Telepone</label>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Alamat</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Kota</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Negara</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Kode Pos</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Visi & Misi</label>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Struktur Organisasi</label>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <button type="submit" class="btn btn-rose pull-right" style="background: linear-gradient(to bottom left, #5F65A3 , #21BCEA)">Save</button>
                </div>
            </div>
        </div>
    </div>

@endsection