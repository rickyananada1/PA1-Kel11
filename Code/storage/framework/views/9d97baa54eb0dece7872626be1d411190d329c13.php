<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<div class="suscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                <div class="suscribe-text text-center">
                    <h3>Welcome to lumbanbinanga.com</h3>
                    <button type="button" class="sus-btn" data-toggle="modal" data-target="#quoteModal">Get A Quote</button>

                    <div class="modal" id="quoteModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Quote For You</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p id="quote"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Suscribe Section -->


<script>
    var quotes = [
        " Bersyukurlah atas apa yang kamu miliki, jangan terlalu fokus pada apa yang kamu inginkan.- John Wooden",
        "Kita tidak dapat mengubah arah angin, tapi kita bisa menyesuaikan layar.- Jimmy Dean - Unknown ",
        "Jangan pernah menyerah pada impianmu, jangan biarkan kegagalan menghentikanmu. - Unknown", 
        "Ketika satu pintu tertutup, pintu yang lain akan terbuka. Tapi sering kali kita terlalu lama memandang pintu yang tertutup, hingga kita tidak melihat pintu yang telah terbuka. - Helen Keller",
        "Hidup bukanlah tentang menemukan diri sendiri, melainkan tentang menciptakan diri sendiri. - Unknown",
        "George Bernard Shaw Orang yang paling bahagia bukanlah mereka yang memiliki segala sesuatu, tapi mereka yang bersyukur atas apa yang mereka miliki. - Unknown", 
        "Ketika kamu merasa bahwa kamu tidak dapat melanjutkan lagi, ingatlah mengapa kamu memulai. - Unknown",
        "Kebahagiaan tidak ada dalam memiliki banyak harta, melainkan dalam kepuasan hati dan ketenangan pikiran. - Unknown  ",
        "Jika kamu ingin mengubah dunia, ubahlah dirimu sendiri terlebih dahulu. - Mahatma Gandhi",
        "Hidup adalah perjalanan, nikmati setiap langkahnya.- Unknown",
    ];

    $(document).ready(function() {
        $('#quoteModal').on('show.bs.modal', function() {
            var quote = quotes[Math.floor(Math.random() * quotes.length)];
            $('#quote').text(quote);
        });
    });
</script>
<?php /**PATH C:\xampp\htdocs\lumbanbinanga.com\PA1-Kel11\Code\resources\views/layouts/body/footer.blade.php ENDPATH**/ ?>