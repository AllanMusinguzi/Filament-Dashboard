@extends('filament::page')

@section('content')
    <div id="react-chart"></div>
@endsection

@push('scripts')
    @vite('resources/js/app.tsx')
@endpush
