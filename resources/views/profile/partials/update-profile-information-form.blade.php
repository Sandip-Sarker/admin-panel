<div class="bg-white rounded-3 shadow-sm p-4" style="max-width: 900px; width: 100%;">
    <form method="post" action="{{ route('profile.update') }}" >
        @csrf
        @method('patch')

        {{-- Profile Information --}}
        <h2 class="fw-semibold mb-1" style="font-size: 1rem; color: #0f172a;">Profile Information</h2>
        <p class="text-muted small mb-4">Update your account's profile information and email address.</p>

        {{-- name --}}
        <div class="mb-4">
            <label for="name"  class="form-label small text-secondary">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" />
        </div>
        {{-- email --}}
        <div class="mb-4">
            <label for="email" class="form-label small text-secondary">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" />
        </div>
        {{-- submit --}}
        <button type="submit" class="btn btn-dark btn-sm fw-semibold px-3">SAVE</button>
    </form>
</div>