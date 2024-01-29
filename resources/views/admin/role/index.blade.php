@extends('layouts.admin')
@section('content')
@include('admin.role.modal')
<div class="container-fluid p-4">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Card -->
            <div class="card mb-4">
                <!-- Card Header -->
                <div class="mt-6 m-5">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCatgory">Add Role </a>
                </div>
                <div class="card-header border-bottom-0">
                    <!-- Form -->
                    <form class="d-flex align-items-center">
                    <span class="position-absolute ps-3 search-icon">
                        <i class="fe fe-search"></i>
                    </span>
                        <input type="search" class="form-control ps-6" placeholder="Search Category" >
                    </form>
                </div>
                <!-- Table -->
                <div class="table-responsive border-0 overflow-y-hidden">
                    <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                        <thead class="table-light">
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkAll" >
                                    <label class="form-check-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Etat</th>
                            <th>Utilisateur</th>
                            <th>Droits</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr id="collapseOne">
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="categoryCheck2" >
                                        <label class="form-check-label" for="categoryCheck2"></label>
                                    </div>
                                </td>
                                <td class="role_id">{{ $role->id }} </td>
                                <td class="role_nom">{{ $role->nom }}</td>
                                <td class="d-none type_id">{{ $role->type }}</td>
                                <td class="type_nom">
                                    @if ($role->type == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger badge-shadow">Inactive</span>
                                    @endif
                                </td>
                                <td>{{ count($role->users) }} </td>
                                <td>{{ count($role->droits) }}</td>
                                <td>
                            <span class="dropdown dropstart">
                                <a
                                    class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                    href="#"
                                    role="button"
                                    id="courseDropdown1"
                                    data-bs-toggle="dropdown"
                                    data-bs-offset="-20,20"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                    <span class="dropdown-header">Action</span>

                                    <a href="#" class="dropdown-item update_modal"  data-bs-toggle="modal" data-bs-target="#edit_custom_policy">
                                        Editer
                                    </a>

                                    <a href="#" class="dropdown-item delete_modal"  data-bs-toggle="modal" data-bs-target="#delete_custom_policy">
                                        Supprimer
                                    </a>

                                </span>
                            </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{--@section('script')--}}
@section('script')
<script>
    $(document).ready(function() {
        $('.update_modal').on('click', function() {
            console.log('Update modal ');
            var _this = $(this).closest('tr');
            $('#e_role_id').val(_this.find('.role_id').text());
            $('#e_role_nom').val(_this.find('.role_nom').text());

            var type_nom = _this.find(".type_nom").text();
            var type_id = _this.find('.type_id').text();

            var option = '<option selected value="' + type_id + '">' + type_nom + '</option>';
            $('#e_role_type').html(option);

            var role_id = $('#e_role_id').val();

            $.ajax({
                url: '/admin/exceptDroit',
                type: 'POST',
                data: { id: role_id, _token: '{{ csrf_token() }}' },
                success: function(resultat) {
                    $('#edit_customleave_select').html(resultat);
                }
            });

            $.ajax({
                url: '/admin/getDroit',
                type: 'POST',
                data: { id: role_id, _token: '{{ csrf_token() }}' },
                success: function(resultat) {
                    $('#droits_listes').html(resultat);
                }
            });
        });

        $('.delete_modal').on('click', function() {
            var _this = $(this).closest('tr');
            $('.e_role_id').val(_this.find('.role_id').text());
        });
    });

</script>
@endsection

