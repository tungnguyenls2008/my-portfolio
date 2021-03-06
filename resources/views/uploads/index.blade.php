@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Uploads</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Uploads
{{--                             <a class="pull-right" href="{{ route('uploads.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>--}}
                         </div>
                         <div class="card-body">
                             @include('uploads.table')
                              <div class="pull-right mr-1">
                                  {{ $uploads->links() }}

                              </div>

                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

