<div class="clue_card">
    <div class="clue_card_wrapper">
        <div class="card_top">
            <p class="title">
                {{ $title }}
            </p>
            <p class="sub_title">
                READY TO START
            </p>
        </div>
        <div class="card_bottom">
            <div class="img_box">
                <img src="{{ asset('/assets/images/blue-mountain.jpeg') }}" alt="">

            </div>
            <form id="uploadForm" action="{{ route('uploadPhoto') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="photo" id="cameraPhoto" accept="image/*" capture="environment"
                    style="display:none;">
                <button type="button" id="cameraButton">Take picture</button>
            </form>
        </div>
    </div>
</div>

<script>
    // function download() {
    //     $.ajax({
    //         method: "GET",
    //         url: "{{ route('downloadFolder') }}",
    //         success: function(result) {
    //             alert('sfsdfsd');
    //         }
    //     });
    // }
    document.getElementById('cameraButton').addEventListener('click', function() {
        console.log('camera btn clicked');
        document.getElementById('cameraPhoto').click();
    });

    document.getElementById('cameraPhoto').addEventListener('change', function() {
        if (this.files.length > 0) {
            document.getElementById('uploadForm').submit();
        }
    });
</script>
