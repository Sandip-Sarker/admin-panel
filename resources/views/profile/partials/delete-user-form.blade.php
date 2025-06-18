<div class="bg-white rounded-3 shadow-sm p-4" style="max-width: 900px; width: 100%;">
                    
                        <h2 class="fw-semibold mb-2" style="font-size: 1rem; color: #111827;">
                            Delete Account
                        </h2>
                        <p class="mb-4 " style="font-size: 0.875rem; max-width: 600px;">
                            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
                        </p>
                        <button type="button" class="btn-delete" onclick="openConfirmModal()">
                            Delete Account
                        </button>
                        </div>
                    </form>    
                </div>

    {{-- modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                <div class="modal-content p-4">
               
                    <div class="modal-body">
                        <h2 class="fw-semibold fs-6 mb-2 text-dark">
                        Are you sure you want to delete your account?
                        </h2>
                        <p class="text-secondary small mb-4">
                        Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm.
                        </p>
                        
                            @csrf
                            @method('delete')
                            <input type="password" name="password" class="form-control mb-4" placeholder="Password" />

                            <div class="d-flex justify-content-end gap-3">
                            <button type="button" class="btn btn-light text-secondary fw-semibold px-3 py-2" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-danger fw-semibold px-4 py-2">
                                Delete Account
                            </button>
                            </div>
                    </div>
                </div>   
            </form>
        </div>
    </div>

 <script>
    function openConfirmModal() {
        $('#deleteModal').modal('show');
    }
</script>
