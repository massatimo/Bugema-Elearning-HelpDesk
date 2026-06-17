@extends('layouts.app')

@section('content')

<!-- Hero Banner -->
<div class="card border-0 shadow-sm rounded-4 mb-5 overflow-hidden hero-card">

    <div class="row g-0">

        <div class="col-lg-7">

            <div class="p-5">

                <div class="d-flex justify-content-between align-items-start mb-3">
                    <span class="badge bg-primary px-3 py-2">
                        Bugema University
                    </span>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm logout-btn"><i class="bi bi-box-arrow-right me-1"></i>Logout</button>
                    </form>
                </div>

                <h2 class="fw-bold">
                    Hi, {{ Auth::user()->name }} 👋
                </h2>

                <p class="text-muted mt-3">

                    Welcome back to the School Management System.

                    Manage students, teachers, reports and academic
                    activities from one dashboard.

                </p>

                <button class="btn btn-light hero-open mt-3 fw-semibold">
                    <i class="bi bi-speedometer2 me-2"></i>Open Dashboard
                </button>

            </div>

        </div>

        <div class="col-lg-5 bg-primary d-flex align-items-center justify-content-center">

            <i class="bi bi-mortarboard-fill text-white"
               style="font-size:160px;"></i>

        </div>

    </div>

</div>

<!-- Search -->

<div class="card border-0 shadow-sm rounded-4 mb-4">

    <div class="card-body">

        <div class="row">

            <div class="col-md-2">

                <select class="form-select">

                    <option>All Modules</option>

                </select>

            </div>

            <div class="col-md-6">

                <input
                    class="form-control"
                    placeholder="Search modules...">

            </div>

            <div class="col-md-2">

                <button class="btn btn-light w-100">

                    Sort

                </button>

            </div>

            <div class="col-md-2">

                <button class="btn btn-light w-100">

                    Grid View

                </button>

            </div>

        </div>

    </div>

</div>

<h3 class="fw-bold mb-4">

School Management Modules

</h3>

<div class="row">

    <!-- Students -->

    <div class="col-lg-4 mb-4">

        <div class="card border-0 shadow rounded-4 h-100 module-card">

            <div class="bg-primary text-white text-center p-5">

                <i class="bi bi-mortarboard-fill"
                   style="font-size:70px"></i>

            </div>

            <div class="card-body">

                <h4>Students</h4>

                <p class="text-muted">

                    Admissions, registration,
                    profiles and student records.

                </p>

                <button class="btn btn-primary rounded-pill">

                    Open Module

                </button>

            </div>

        </div>

    </div>

    <!-- Teachers -->

    <div class="col-lg-4 mb-4">

        <div class="card border-0 shadow rounded-4 h-100 module-card">

            <div class="bg-success text-white text-center p-5">

                <i class="bi bi-person-workspace"
                   style="font-size:70px"></i>

            </div>

            <div class="card-body">

                <h4>Teachers</h4>

                <p class="text-muted">

                    Manage lecturers,
                    departments and staff.

                </p>

                <button class="btn btn-success rounded-pill">

                    Open Module

                </button>

            </div>

        </div>

    </div>

    <!-- Reports -->

    <div class="col-lg-4 mb-4">

        <div class="card border-0 shadow rounded-4 h-100 module-card">

            <div class="bg-warning text-center text-dark p-5">

                <i class="bi bi-bar-chart-line-fill"
                   style="font-size:70px"></i>

            </div>

            <div class="card-body">

                <h4>Reports</h4>

                <p class="text-muted">

                    Attendance,
                    finance and examination reports.

                </p>

                <button class="btn btn-warning rounded-pill">

                    Open Module

                </button>

            </div>

        </div>

    </div>

    <!-- Library -->

    <div class="col-lg-4 mb-4">

        <div class="card border-0 shadow rounded-4 h-100 module-card">

            <div class="bg-info text-white text-center p-5">

                <i class="bi bi-book-fill"
                   style="font-size:70px"></i>

            </div>

            <div class="card-body">

                <h4>E-Library</h4>

                <p class="text-muted">

                    Books,
                    journals and digital resources.

                </p>

                <button class="btn btn-info text-white rounded-pill">

                    Open Module

                </button>

            </div>

        </div>

    </div>

    <!-- Finance -->

    <div class="col-lg-4 mb-4">

        <div class="card border-0 shadow rounded-4 h-100 module-card">

            <div class="bg-danger text-white text-center p-5">

                <i class="bi bi-cash-stack"
                   style="font-size:70px"></i>

            </div>

            <div class="card-body">

                <h4>Finance</h4>

                <p class="text-muted">

                    Fees,
                    invoices,
                    payments.

                </p>

                <button class="btn btn-danger rounded-pill">

                    Open Module

                </button>

            </div>

        </div>

    </div>

    <!-- Settings -->

    <div class="col-lg-4 mb-4">

        <div class="card border-0 shadow rounded-4 h-100 module-card">

            <div class="bg-secondary text-white text-center p-5">

                <i class="bi bi-gear-fill"
                   style="font-size:70px"></i>

            </div>

            <div class="card-body">

                <h4>Settings</h4>

                <p class="text-muted">

                    Users,
                    permissions and system settings.

                </p>

                <button class="btn btn-secondary rounded-pill">

                    Open Module

                </button>

            </div>

        </div>

    </div>

</div>

@endsection