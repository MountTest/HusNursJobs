<div class="container pb-5" style="padding-top: 15%;">
    <div class="row justify-content-start align-items-center ">
            <div class="col-12 col-lg-4">
                <h1 class="font-weight-bold display-4 d-none d-lg-block" style="">Save your data storage here.</h1><br>
                <h6 class=" pb-3" id="text-h2" style="">Data Warehouse is a data storage area
                    that<br> has been tested for security,so you can store<br> your data here safely but not be afraid of<br> being
                    stolen by others.</h6>
                <a class="get-started pt-2" style="padding: 15px;color: white;background: #9C69E2;border-radius: 50px;">
                    Learn more </a>
            </div>
    </div>
</div>
</section>
@push('scripts')
    <script>
        $('.get-started').click(function (e) {
            let btn = $(e.currentTarget);
            if ($('#text-h2').hasClass('text-pop-up-top') == false) {
                $('#text-h2').removeClass('text-pop-up-top');
                $('#text-h2').addClass('text-pop-up-top');
                $('#img-hover').addClass('text-pop-up-top');
                $('.get-started').addClass('jello-horizontal');
            }
        });
    </script>
    {{--<script>--}}
    {{--    alertify.prompt("Message", function (e, str) {--}}
    {{--        // str is the input text--}}
    {{--        if (e) {--}}
    {{--            // user clicked "ok"--}}
    {{--        } else {--}}
    {{--            // user clicked "cancel"--}}
    {{--        }--}}
    {{--    }, "Default Value");--}}
    {{--</script>--}}
@endpush
