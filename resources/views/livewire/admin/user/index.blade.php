<div>
    @include('livewire.admin.user.modal')
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card Header -->
                    <div class="card-header">
                        <h4>Listes des Administrateurs</h4>
                    </div>
                    <div class="mt-6 m-5">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_user">Nouvel Utilisateur </a>
                    </div>
                    @include('layouts.partials.message')
                    @include('layouts.partials.error')
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
                                <th>E-mail</th>
                                <th>Type Utilisateur</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($users as $items)
                                <tr id="collapseOne">
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck2" >
                                            <label class="form-check-label" for="categoryCheck2"></label>
                                        </div>
                                    </td>
                                    <td>{{ $items->id }}</td>
                                    <td>{{ $items->name}}</td>
                                    <td>{{ $items->email }}</td>
                                    <td>{{ $items->role_type_user->role_type }}</td>
                                    <td>{{ $items->role->nom }}</td>
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

                                                <a wire:click="editUser({{ $items->id }})" href="#" class="dropdown-item update_modal"  data-bs-toggle="modal" data-bs-target="#edit_user">
                                                    Editer
                                                </a>

                                                <a wire:click="deleteUser({{ $items->id }})" href="#" class="dropdown-item delete_modal"  data-bs-toggle="modal" data-bs-target="#delete_user">
                                                    Supprimer
                                                </a>

                                            </span>
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Pas de D'utilisateur</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


