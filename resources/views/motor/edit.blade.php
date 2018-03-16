@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="page-title-box">
              <h4 class="page-title">Edit </h4>
              <ol class="breadcrumb p-0 m-0">
                  
                  <li>
                      <a href="{{ route('Motor.index') }}">Merek </a>
                  </li>
                  <li class="active">
                     Edit Merk
                  </li>
              </ol>
              <div class="clearfix"></div>
          </div>
    </div>
  </div>
  <form method="post" action="{{route('Motor.update',$motor->id) }}" id="form-guru" enctype="multipart/form-data" files="true">
    <input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xs-9">
        <div class="card-box">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Nama<span class="text-danger">*</span></label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" required="" value="{{$motor->nama}}">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Merek<span class="text-danger">*</span></label>
                <input type="text" name="merek" class="form-control" placeholder="Nama Lengkap" required="required" value="{{$motor->merk}}">
                <span class="help-block"></span>
              </div>
            </div>
          </div>

           <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Tipe<span class="text-danger">*</span></label>
                <input type="text" name="tipe" class="form-control" placeholder="Tipe" required="required" value="{{$motor->tipe}}">
                <span class="help-block"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Foto<span class="">*</span></label>
                <img src="{{asset('/img'.$motor->foto)}}">
                <input type="file" name="foto" class="form-control" >
                <span class="help-block"></span>
              </div>
            </div>
          </div>
          </div>
      </div>

      <div class="col-xs-12">
        <div class="card-box">
          <div class="row">
            <div class="col-md-12">
              <hr>
              <div class="pull-right">
                <button class="btn btn-default btn-bordered waves-effect waves-light" type="reset">Reset</button>
                <button class="btn btn-primary btn-bordered waves-effect waves-light" type="submit">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection