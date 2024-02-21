@extends('layouts.admin')
@section('content')
    <livewire:admin.enseignant.index>
        @endsection
        @section('script')
            <script>
                window.addEventListener('close-modal', event => {
                    $('#add_enseig').modal('hide');
                    $('#edit_enseig').modal('hide');
                    $('#delete_enseig').modal('hide');
                });
            </script>
@endsection
