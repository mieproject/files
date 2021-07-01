@extends('mie-ui::layouts.contentLayoutMaster')

@section('title', __('MIE Files'))

@section('content')
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="card-alert card gradient-45deg-red-pink">
                <div class="card-content white-text">
                    <p>
                        <i class="material-icons">error</i> <div class="alert alert-danger">{{ $error }}</div></p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endforeach
    @endif
    @if (session('status'))
        <div class="card-alert card gradient-45deg-green-teal">
            <div class="card-content white-text">
                <p>
                    <i class="material-icons">check</i>  {!!  session('status') !!}</p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <!--Basic Card-->

    <div class="card">
        <div class="card-content">
            <p class="caption"><a href="https://github.com/JeremyFagis/dropify" target="_blank">Dropify</a> Override your
                input files with style.</p>
        </div>
    </div>
    <div class="divider mb-1"></div>
    <!--file-upload-->
    <div id="file-upload" class="section">
        <!--Default version-->
        <div class="row section">
            <div class="col s12 m4 l3">
                <p>Default version</p>
            </div>
            <div class="col s12 m8 l9">
                <input type="file" id="input-file-now" class="dropify" data-default-file="" />
            </div>
        </div>
        <!--Default value-->
    </div>

@endsection


{{-- vendor script --}}
@section('vendor-script')
    <script src="{{asset('vendors/dropify/js/dropify.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{asset('js/scripts/form-file-uploads.js')}}"></script>
@endsection


{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/css/dropify.min.css')}}">
@endsection

@section('page-style') @endsection
