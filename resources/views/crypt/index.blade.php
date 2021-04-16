@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Cryptography</li>
    </ol>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
<p>Using top-of-the-line technic used by military-graded organizations to encrypt and decrypt files in a way that no living things on this planet would be able to crack, at least for now.</p>
                <div class="col-sm-12">
                    <a class="btn btn-lg from-center"
                       href="{{ route('encrypt_view') }}">
                        Encrypt files
                    </a>
                    <a class="btn btn-lg from-center"
                       href="{{ route('decrypt_view') }}">
                        Decrypt files
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

