<div class="container">
    <div class="row">
        <div class="col-5" style="padding-top: 10%">
            <h1 class="h1 text-pop-up-top" style="margin-top: 0;margin-bottom: 0;">Create, your way</h1><br>
            <h2 class="grey " id="text-h2" style="margin-top: 0;color: #808080">Part spreadsheet, part database, and <br>entirely flexible, teams use Airtable to <br> organize their work, their way.</h2>
            <input type="text" size="30" placeholder="Enter your email address" style="padding: 15px;border-color: #e9e9e9;border-radius: 10px">
            <button  class="get-started "  style="padding: 15px;color: white;background-color: #2d7ff9;border-radius: 10px;" >Get Started </button>
        </div>
        <div class="col-6">
            <img id="img-hover" src="{{ asset('image/shapes_collaboration.png') }}" alt="main" class="img-fluid">
        </div>
    </div>
</div>
@push('scripts')
{{--    <script>--}}
{{--        $('.tablinks').click(function (e) {--}}
{{--            var btn = $(e.currentTarget);--}}
{{--            if(btn.hasClass('btn-active') == false){--}}
{{--                $('.tablinks').removeClass('btn-active');--}}
{{--                btn.addClass('btn-active');--}}
{{--                $.ajax({--}}
{{--                    url: '{{ route('change_tab') }}',--}}
{{--                    method: 'POST',--}}
{{--                    data: {--}}
{{--                        "_token": "{{ csrf_token() }}",--}}
{{--                        "id": btn.data('id'),--}}

{{--                    },--}}
{{--                    success: data => {--}}
{{--                        $('#main').html(data.view);--}}
{{--                    },--}}
{{--                    error: () => {--}}
{{--                        alert('error');--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}
{{--        })--}}
{{--    </script>--}}
<script>
    $('.get-started').click(function (e) {
        let btn = $(e.currentTarget);
        if($('#text-h2').hasClass('text-pop-up-top') == false){
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
