<!-- Create a partial view _flash_modal.blade.php -->
<!-- Modal Structure -->
<div class="modal fade" id="flashModal" tabindex="-1" role="dialog" aria-labelledby="flashModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="flashModalLabel">Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success mb-0">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger mb-0">
                        <strong>{!! $message !!}</strong>
                    </div>
                @endif

                @if ($message = Session::get('warning'))
                    <div class="alert alert-warning mb-0">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('info'))
                    <div class="alert alert-info mb-0">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger mb-0">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add this script section -->
<script>
$(document).ready(function() {
    // Check if there are any flash messages or errors
    if (
        @if(Session::has('success') || Session::has('error') || Session::has('warning') || Session::has('info') || $errors->any())
            true
        @else
            false
        @endif
    ) {
        // Show the modal
        $('#flashModal').modal('show');
        
        // Auto hide after 10 seconds
        setTimeout(function() {
            $('#flashModal').modal('hide');
        }, 10000);
    }
});
</script>