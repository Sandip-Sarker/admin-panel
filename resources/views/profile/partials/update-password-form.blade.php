<div class="bg-white rounded-3 shadow-sm p-4" style="max-width: 900px; width: 100%;">
<form style="max-width: 600px;" method="post" action="{{ route('password.update') }}">
    @csrf
    @method('put')
    <h6 class="fw-semibold mb-1 text-dark">Update Password</h6>
    <p class="text-muted small mb-4">
        Ensure your account is using a long, random password to stay secure.
    </p>

    <div class="mb-3">
        <label for="update_password_current_password" class="form-label small text-dark">Current Password</label>
        <input type="password" class="form-control" id="update_password_current_password" name="current_password"  autocomplete="current-password" />
    </div>

    <div class="mb-3">
        <label for="update_password_password" class="form-label small text-dark">New Password</label>
        <input type="password" class="form-control" id="update_password_password"  name="password" autocomplete="new-password"/>
    </div>

    <div class="mb-4">
        <label for="update_password_password_confirmation" class="form-label small text-dark">Confirm Password</label>
        <input type="password" class="form-control" id="update_password_password_confirmation" name="password_confirmation" autocomplete="new-password"/>
    </div>

    <div class="d-flex align-items-center">
        <button type="submit" class="btn btn-dark btn-sm fw-semibold px-3">Save</button>
        @if (session('status') === 'password-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 mx-3 mt-2"
            >{{ __('Saved.') }}</p>
        @endif
    </div>   
</form>
</div>