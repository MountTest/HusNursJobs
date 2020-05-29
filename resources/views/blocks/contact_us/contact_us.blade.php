<section class="contact-us-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        $('.btn-text').on('click', function (e) {
            let btn = e.currentTarget();
            console.log(btn);
        })
    </script>
@endpush

