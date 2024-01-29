<!-- Add User Modal -->
<div class="modal fade" wire:ignore.self id="add_user" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="newCatgoryLabel">Nouvel Utilisateur</h4>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveUser">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type Utilisteur <span class="text-danger">*</span></label>
                                <select wire:model="role_type_user_id" class="form-control">
                                    <option>---</option>
                                    @forelse ($role_name as $type_user)
                                        <option value="{{ $type_user->id }}">{{ $type_user->role_type }}</option>
                                    @empty
                                        <option selected disabled>Pas de Type Utilisateur</option>
                                    @endforelse
                                </select>
                                @error('role_type_user_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nom <span class="text-danger">*</span></label>
                                <input class="form-control" wire:model="nom" type="text">
                                @error('nom')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role Utilisteur <span class="text-danger">*</span></label>
                                <select wire:model="role" class="form-control">
                                    <option>---</option>
                                    @forelse ($roles as $user)
                                        <option value="{{ $user->id }}">{{ $user->nom }}</option>
                                    @empty
                                        <option selected disabled>Pas de Role Utilisateur</option>
                                    @endforelse
                                </select>
                                @error('role')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>E-mail <span class="text-danger">*</span></label>
                                <input class="form-control" wire:model="email" type="email">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div><br>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add User Modal -->

<!-- EDIT User Modal -->
<div class="modal fade" wire:ignore.self id="edit_user" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="newCatgoryLabel">Modifier Utilisateur</h4>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="UpdateUser">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type Utilisteur <span class="text-danger">*</span></label>
                                <select wire:model="role_type_user_id" class="form-control">
                                    <option>---</option>
                                    @forelse ($role_name as $type_user)
                                        <option value="{{ $type_user->id }}">{{ $type_user->role_type }}</option>
                                    @empty
                                        <option selected disabled>Pas de Type Utilisateur</option>
                                    @endforelse
                                </select>
                                @error('role_type_user_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nom <span class="text-danger">*</span></label>
                                <input class="form-control" wire:model="nom" type="text">
                                @error('nom')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role Utilisteur <span class="text-danger">*</span></label>
                                <select wire:model="role" class="form-control">
                                    <option>---</option>
                                    @forelse ($roles as $user)
                                        <option value="{{ $user->id }}">{{ $user->nom }}</option>
                                    @empty
                                        <option selected disabled>Pas de Role Utilisateur</option>
                                    @endforelse
                                </select>
                                @error('role')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>E-mail <span class="text-danger">*</span></label>
                                <input class="form-control" wire:model="email" type="email">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div><br>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Mettre a jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit User Modal -->


<!-- Delete User Modal -->
<div class="modal fade" wire:ignore.self id="delete_user" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="newCatgoryLabel">Supprimer Utilisateur</h4>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-header">
                    <h3>Suppression Utilisateur</h3>
                    <p>Voulez-vous vraiment supprimer?</p>
                </div>
                <form wire:submit.prevent="DestroyUser">
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-primary continue-btn" type="submit">Delete</button>
                            </div>
                            <div class="col-6">
                                <a data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete User Modal -->
