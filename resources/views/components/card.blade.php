<div class="clue_card">
    <div class="clue_card_wrapper">
        <div class="card_top">
            <span class="title">
                {{ $title }}
            </span>
            <p class="sub_title">
                {{ $point }} POINTS
            </p>
            <span class="description">
                {{ $description }}
            </span>
        </div>
        <div class="card_bottom">
            @if (strlen($imgUrl) > 2)
                <div class="img_box">
                    <img src="{{ asset($imgUrl) }}" alt="">
                </div>
            @else
            @endif
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
