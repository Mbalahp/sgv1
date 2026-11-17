@extends('layouts.admin.includes.main')
@section('title', 'suppliers')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card stretch stretch-full">
            <div class="card-body">
                <div class="mb-4">
                    <h5 class="fw-bold">Add Supplier</h5>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('suppliers.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                   value="{{ old('name') }}" required>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control"
                                   value="{{ old('email') }}" required>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                   value="{{ old('phone') }}" maxlength="20" required>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="NIF" class="form-label">NIF</label>
                            <input type="text" name="NIF" id="NIF" class="form-control"
                                   value="{{ old('NIF') }}" maxlength="20">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control"
                                   value="{{ old('address') }}" maxlength="255">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-3">
                        <a href="{{ route('suppliers.index') }}" class="btn btn-md bg-soft-danger text-danger">Cancel</a>
                        <button type="submit" class="btn btn-md btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection