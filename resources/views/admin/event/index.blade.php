@extends('layouts.admin')

@push('header-post-scripts')
    <link rel="stylesheet" href="{{ asset('dist-assets/css/plugins/datatables.min.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('dist-assets/css/plugins/sweetalert2.min.css') }}">
@endpush

@section('title', __('Events'))

@section('content')
    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ __('Events List') }}</h4>
                    <div class="table-responsive">
                        {!! $dataTable->table(['class' => 'display table table-striped table-bordered dataTable']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer-post-scripts')
    <script src="{{ asset('dist-assets/js/plugins/datatables.min.js') }}"></script>
    <script src="//cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    {{$dataTable->scripts()}}
    <script src="{{ asset('dist-assets/js/plugins/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('dist-assets/js/scripts/sweetalert.script.min.js') }}"></script>
    <script>
        $(document).on('click', '.delete-swal', function () {
            let item_id = $(this).data('id');

            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                buttonsStyling: true
            }).then(function () {
                $.ajax({
                    url: '/admin/events/' + item_id,
                    type: 'DELETE',
                    success: function () {
                        $('#events-table').DataTable().draw();
                        swal('Deleted!', 'Event has been deleted.', 'success')
                    },
                    error: function () {
                        swal('Oops!', 'Something went wrong.', 'error')
                    }
                });
            }, function () {
            });
        });
    </script>
@endpush
