@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('aboutMeV2s.index') !!}">About Me V2</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit About Me V2</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($aboutMeV2, ['route' => ['aboutMeV2s.update', $aboutMeV2->id],'enctype'=>'multipart/form-data', 'method' => 'patch']) !!}

                              @include('about_me_v2s.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
