@extends('layouts.admin.includes.main')
@section('title', 'suppliers')
@section('content')
<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Suppliers</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
            <li class="breadcrumb-item">Edit</li>
        </ul>
    </div>
    <div class="page-header-right ms-auto">
        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
            <a href="{{ route('suppliers.index') }}" class="btn btn-light-brand">
                <i class="feather-arrow-left me-2"></i>
                <span>Back</span>
            </a>
            <button type="submit" form="supplierForm" class="btn btn-primary">
                <i class="feather-save me-2"></i>
                <span>Save</span>
            </button>
        </div>
    </div>
</div>

<div class="main-content">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="supplierForm" action="{{ route('suppliers.update', $supplier) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xl-6">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                   value="{{ old('name', $supplier->name) }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">NIF</label>
                            <input type="text" name="NIF" class="form-control" placeholder="NIF" maxlength="20"
                                   value="{{ old('NIF', $supplier->NIF) }}">
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address" maxlength="255"
                                   value="{{ old('address', $supplier->address) }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                   value="{{ old('email', $supplier->email) }}" required>
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" maxlength="20"
                                   value="{{ old('phone', $supplier->phone) }}" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection