@extends('adminlte::page')

{{-- Extend and customize the browser title --}}

@section('title')
    {{ config('adminlte.title') }}
    @hasSection('subtitle') | @yield('subtitle') @endif
@stop

@vite('resources/js/app.js')

{{-- Extend and customize the page content header --}}

@section('content_header')
    @hasSection('content_header_title')
        <h1 class="text-muted"> 
            @yield('content_header_title')

            @hasSection('content_header_subtitle')
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    @yield('content_header_subtitle')
                </small>
            @endif
        </h1>
    @endif
@stop

{{-- Rename section content to content_body --}}

@section('content')
    @yield('content_body')
@stop

{{-- Create a common footer --}}

@section('footer')
    <div class="float-right">
        Version: {{ config('app.version', '1.0.0')}}
    </div>

    <strong>
        <a href="{{ config('app.company_url', '#') }}">
            {{ config('app.company_name', 'My company') }}
        </a>
    </strong>
@stop

{{-- Add common Javascript/Jquery code --}}

@push('js')
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js">

    //$(document).ready(function() {
        //Add your common script logic here...
    //});
</script>
@endpush

@stack('scripts')

{{-- Add common CSS customizations --}}

@push('css')
<link rel="stylesheet"
href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css"/>

<style type="text/css">

    {{-- You can add AdminLTE customizations --}}
    /*
    .car-header {
        border-bottom:none;
    }
    .card-title {
        font-weight: 600;
    }*/

    /* Custom styles */
    .nav-link.active {
        font-weight: bold;
    }
</style>
@endpush
{{-- Navigation menu for categories --}}
@section('sidebar-menu')
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('kategori.index') }}" class="nav-link {{ request()->routeIs('kategori.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Manage Kategori
                </p>
            </a>
        </li>
        {{-- Add the 'Add Kategori' button here --}}
        <li class="nav-item">
            <a href="{{ route('kategori.create') }}" class="nav-link">
                <i class="nav-icon fas fa-plus"></i>
                <p>
                    Add Kategori
                </p>
            </a>
        </li>
    </ul>

@stop

