@extends('layouts.skeleton')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>
                            Index Web
                        </h4>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <svg class="stroke-icon">
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Master Data</li>
                            <li class="breadcrumb-item active">Web</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- @livewire('user-list', ['segmentName' => $segmentName]) --}}
    </div>
@endsection
