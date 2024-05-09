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
            <button>
                Take picture
            </button>
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
</script>
