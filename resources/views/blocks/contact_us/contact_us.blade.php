<section class="contact-us-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <p class="contact-us-text" id="header-text">
                    Get started with FitSmallBusiness’ #1 choice for online bookkeeping.
                </p>
                <p class="">
                    Try the best—free. Sign up for a free trial and get full access to Bench.
                    We’ll do a month of your bookkeeping in one business day, and deliver a set of financial statements for you to keep.
                </p>
                <button class="btn btn-primary btn-text">Touch</button>
                <form class="contact-us-form" action="">
                    <ul>
                        <li>
                            <input type="text wobble-hor-bottom" placeholder="Full Name">
                        </li>
                        <li>
                            <input type="text " placeholder="Full Name">
                        </li>
                        <li>
                            <button class="btn btn-primary ">Contact US</button>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="col-5 text-center">
                <img src="https://images.ctfassets.net/88a6qmzs2wdz/5Fdi0iNZ4zeaFh9RAAn9kk/500927abde48b7c081bcbc304f22992e/Yellow-CTA-B.jpg?h=228&q=90&w=370" alt="" class="img-fluid">
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

