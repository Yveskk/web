@extends('layouts.app')
@section('content')
@include('flash')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Tableau de données</h5>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Tableau</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tableau de données</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h3>Adminstrators List</h3></div>
            <div class="card-body">
                @include('admins.table')

            </div>
        </div>
    </div>
</div>

@endsection
