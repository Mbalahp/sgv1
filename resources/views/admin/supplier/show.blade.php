@extends('layouts.admin.includes.main')
@section('title', 'supplier')
@section('content')<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Supplier</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
            <li class="breadcrumb-item">View</li>
        </ul>
    </div>
    <div class="page-header-right ms-auto">
        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
            <a href="{{ route('suppliers.index') }}" class="btn btn-light-brand">
                <i class="feather-arrow-left me-2"></i>
                <span>Back</span>
            </a>
            <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-icon btn-light-brand">
                <i class="feather-edit"></i>
            </a>
            <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST"
                  onsubmit="return confirm('Apagar este fornecedor?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="feather-trash-2 me-2"></i>
                    <span>Delete</span>
                </button>
            </form>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="card card-body lead-info">
        <div class="mb-4 d-flex align-items-center justify-content-between">
            <h5 class="fw-bold mb-0">
                <span class="d-block mb-2">Supplier Information :</span>
                <span class="fs-12 fw-normal text-muted d-block">Dados do fornecedor</span>
            </h5>
            <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-sm btn-light-brand">Edit Supplier</a>
        </div>

        <div class="row mb-4">
            <div class="col-lg-2 fw-medium">Name</div>
            <div class="col-lg-10">{{ $supplier->name }}</div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-2 fw-medium">Email</div>
            <div class="col-lg-10"><a href="mailto:{{ $supplier->email }}">{{ $supplier->email }}</a></div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-2 fw-medium">Phone</div>
            <div class="col-lg-10"><a href="tel:{{ $supplier->phone }}">{{ $supplier->phone }}</a></div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-2 fw-medium">NIF</div>
            <div class="col-lg-10">{{ $supplier->NIF ?? '-' }}</div>
        </div>
        <div class="row mb-0">
            <div class="col-lg-2 fw-medium">Address</div>
            <div class="col-lg-10">{{ $supplier->address ?? '-' }}</div>
        </div>
    </div>

    <hr>

    <div class="card card-body general-info">
        <div class="mb-4">
            <h5 class="fw-bold mb-0">
                <span class="d-block mb-2">General Information :</span>
                <span class="fs-12 fw-normal text-muted d-block">Registo do fornecedor</span>
            </h5>
        </div>

        <div class="row mb-4">
            <div class="col-lg-2 fw-medium">Created</div>
            <div class="col-lg-10 hstack gap-1">
                <div class="hstack gap-2">
                    <div class="avatar-text avatar-sm">
                        <i class="feather-clock"></i>
                    </div>
                    <span>{{ $supplier->created_at->format('d M, Y H:i') }}</span>
                </div>
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-lg-2 fw-medium">Updated</div>
            <div class="col-lg-10 hstack gap-1">
                <div class="hstack gap-2">
                    <div class="avatar-text avatar-sm">
                        <i class="feather-clock"></i>
                    </div>
                    <span>{{ $supplier->updated_at->format('d M, Y H:i') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

