@extends('layouts.skeleton')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Web</h4>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="row g-3 needs-validation custom-input" action="{{ url('web') }}" method="POST"
                                enctype="multipart/form-data" novalidate="">

                                @csrf
                                <input type="hidden" name="form_name" value="create_web">
                                <div class="col-12">
                                    <label class="col-sm-12 col-form-label">Web Url</label>
                                    <input class="form-control" type="text" name="url" required="">
                                    <div class="invalid-feedback">Please enter your valid Web Url </div>
                                    <div>
                                        @error('url')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="col-sm-12 col-form-label">Web Name</label>
                                    <input class="form-control" type="text" name="name" required="">
                                    <div class="invalid-feedback">Please enter your valid Web Name </div>
                                    <div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="col-sm-12 col-form-label">Web Description</label>
                                    <textarea name="description" id="" cols="5" rows="5" class="form-control" value=""></textarea>
                                    <div class="invalid-feedback">Please enter your valid Web Description </div>
                                    <div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="col-sm-12 col-form-label">Web PIC</label>
                                    <input class="form-control" type="text" name="pic" required="">
                                    <div class="invalid-feedback">Please enter your valid Web PIC </div>
                                    <div>
                                        @error('pic')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="col-sm-12 col-form-label">PIC Contact</label>
                                    <input class="form-control" type="text" name="pic_contact" required="">
                                    <div class="invalid-feedback">Please enter your valid PIC Contact </div>
                                    <div>
                                        @error('pic_contact')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mt-5 d-flex justify-content-end">
                                    <button class="btn btn-login" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
