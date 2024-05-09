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
                <button type="button" onclick="">View Photo</button>
            @endif
        </div>
    </div>
</div>

<script>
    function openCamera(clue_id) {
        $('#clue_id').val(clue_id);
        $('#cameraPhoto').click();
    }

    $('#cameraPhoto').on('change', function() {
        if (this.files.length > 0) {
            $('#uploadForm').submit();
        }
    });
</script>
