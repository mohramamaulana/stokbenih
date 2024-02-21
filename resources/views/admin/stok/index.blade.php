@extends('layouts.dashboard')

@push('styles')
<link href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" rel="stylesheet"/>
@endpush

@section('konten')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Halaman Stok</h2>
        </div>
        <div class="pull-right mb-3">
            <a class="btn btn-success" href="{{ route('stok.create') }}"> Tambah data Stok </a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif





{{-- <div class="d-flex justify-content-center">
  {!! $data->links('pagination') !!}
</div>  --}}
<div id="wrapper"></div>

<div class="modal fade" id="mdlStok" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <label for="nameLarge" class="form-label">Name</label>
              <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" />
            </div>
          </div>
          <div class="row g-2">
            <div class="col mb-0">
              <label for="emailLarge" class="form-label">Email</label>
              <input type="text" id="emailLarge" class="form-control" placeholder="xxxx@xxx.xx" />
            </div>
            <div class="col mb-0">
              <label for="dobLarge" class="form-label">DOB</label>
              <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY" />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/datastok.js') }}"></script>
@endpush

@endsection
