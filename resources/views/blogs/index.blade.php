@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Blogs</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Blogs
                             <a class="pull-right btn btn-outline-primary" href="{{ route('blogs.create') }}"><i class="fa fa-plus-square fa-lg"></i> Add new Blog Entry</a>
                         </div>
                         <div class="card-body">
                             @include('blogs.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

