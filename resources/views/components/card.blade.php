<div class="clue_card">
    <div class="clue_card_wrapper">
        <div class="card_top">
            <p class="title">
                {{ $title }}
            </p>
            <p class="sub_title">
                {{ $subTitle }}
            </p>
        </div>
        <div class="card_bottom">
            <div class="img_box">
                <img src="{{ asset($imgUrl) }}" alt="">
            </div>
            @if ($path === '')
                <button type="button" onclick="openCamera({{ $clueId }})">Take Photo</button>
            @else
                <button type="button" onclick="openModal('{{ $path }}', '{{ $clueId }}')">View
                    Photo</button>
                <x-photo-modal :path="$path" :id="$clueId" />
            @endif
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#cameraPhoto').on('change', function() {
            if (this.files.length > 0) {
                $('#uploadForm').submit();
            }
        });

        // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //     if (event.target != document.getElementById("content-" + <?php echo $clueId; ?>)) {
        //         console.log('yes');
        //         modal.style.display = "none";
        //     }
        // }
    });

    function openCamera(clue_id) {
        $('#clue_id').val(clue_id);
        $('#cameraPhoto').click();
    }

    function openModal(path, clueId) {
        modal = document.getElementById("modal-" + clueId);
        modal.style.display = "block";
    }
</script>
