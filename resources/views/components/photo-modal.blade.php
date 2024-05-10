<div id="modal-{{ $id }}" class="photo-modal">
    <div class="modal-content" id="content-{{ $id }}">
        <div class="modal-header">
            <span class="header-span">Modal Header</span>
            <span id="close-{{ $id }}" class="close">&times;</span>
        </div>
        <div class="modal-body">
            <img src="{{ asset($path) }}" alt="" id="modalImg">
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var modal = document.getElementById("modal-" + <?php echo $id; ?>);

        // Get the <span> element that closes the modal
        var span = document.getElementById("close-" + <?php echo $id; ?>);

        // When the user clicks the button, open the modal 


        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    })
</script>
