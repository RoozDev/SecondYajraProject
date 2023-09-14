@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">مدیریت کابران</div>
            <div class="card-body" id="UserDataTable" >
                {!! $dataTable->table() !!}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    {!! $dataTable->scripts() !!}
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
<script>
    $(document).ready(function() {
        $('users-table').DataTable(); // Replace with your DataTable ID
    });
</script>
