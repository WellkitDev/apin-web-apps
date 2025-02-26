
    <nav class="massege">
        <!-- errors message -->
        {{-- @if (session('error')) --}}
          <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
              <div class="alert alert-danger alert-dismissible" role="alert">
                  {{-- {{ session('error') }} --}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
              </div>
          </div>
        {{-- @endif --}}
        @if (session('success'))
          <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
              <div class="alert alert-success alert-dismissible" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
              </div>
          </div>
        @endif
        @if (session('status'))
          <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
              <div class="alert alert-success alert-dismissible" role="alert">
                  {{ session('status') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
              </div>
          </div>
        @endif
      </nav>