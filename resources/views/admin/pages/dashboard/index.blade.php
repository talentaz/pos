@extends('admin.layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') POS @endslot
        @slot('title') Dashboards @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-12">

        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- echarts js -->
    <script src="{{ URL::asset('/assets/libs/echarts/echarts.min.js') }}"></script>
@endsection
