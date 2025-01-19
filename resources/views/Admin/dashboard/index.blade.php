@extends('Admin.layouts.app')

@section('title', __('app.dashboard'))

@section('content')
<div class="container-fluid py-4">
    <!-- Page Title and Language Selector -->
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
        <h1 class="h2 fw-bold text-primary">@lang('app.dashboard')</h1>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                @lang('app.lang')
            </button>
            <ul class="dropdown-menu" aria-labelledby="langDropdown">
                <li><a class="dropdown-item" href="{{ route('language', 'en') }}">English</a></li>
                <!-- Add more language options as needed -->
            </ul>
        </div>
    </div>

    <!-- Greeting Section -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card bg-gradient-primary text-white shadow">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h3>HELLO, {{ session('admin') }}</h3>
                        <p class="mb-0">Welcome to Look4Land. Let's manage your business efficiently!</p>
                    </div>
                    <i class="mdi mdi-account-circle-outline display-4"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Metrics Section -->
    <div class="row">
        <!-- Total Product Types -->
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="mdi mdi-tag-multiple-outline text-primary display-4 mb-3"></i>
                    <h4 class="mb-2">Types</h4>
                    <p class="text-muted">Total Product Types</p>
                </div>
            </div>
        </div>

        <!-- Total Orders -->
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="mdi mdi-cart-outline text-success display-4 mb-3"></i>
                    <h4 class="mb-2">Orders</h4>
                    <p class="text-muted">Total Orders</p>
                </div>
            </div>
        </div>

        <!-- Total Sales -->
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="mdi mdi-currency-usd text-warning display-4 mb-3"></i>
                    <h4 class="mb-2">TK</h4>
                    <p class="text-muted">Total Sales</p>
                </div>
            </div>
        </div>

        <!-- Total Customers -->
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="mdi mdi-account-multiple-outline text-danger display-4 mb-3"></i>
                    <h4 class="mb-2">Customers</h4>
                    <p class="text-muted">Total Customers</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor and Sales Section -->
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="mdi mdi-map-marker-outline text-info display-4 mb-3"></i>
                    <h4 class="mb-2">Land Queries</h4>
                    <p class="text-muted">Managed Lands</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="mdi mdi-briefcase-outline text-primary display-4 mb-3"></i>
                    <h4 class="mb-2">Vendor Sales</h4>
                    <p class="text-muted">Vendor Partner Sales</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="mdi mdi-cash-multiple text-success display-4 mb-3"></i>
                    <h4 class="mb-2">Earnings</h4>
                    <p class="text-muted">10% Commission on Each Sale</p>
                </div>
            </div>
        </div>
    </div>

    <!-- To-Do List Section -->
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h4 class="card-title text-center">To-Do List</h4>
                    <div class="add-items d-flex mb-3">
                        <input type="text" class="form-control todo-list-input" placeholder="Enter a task...">
                        <button class="btn btn-primary ms-2 todo-list-add-btn">Add</button>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Add new product requests
                            <i class="remove mdi mdi-close text-danger"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Check approved products
                            <i class="remove mdi mdi-close text-danger"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center completed">
                            Pack orders
                            <i class="remove mdi mdi-close text-danger"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Track total revenue
                            <i class="remove mdi mdi-close text-danger"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
