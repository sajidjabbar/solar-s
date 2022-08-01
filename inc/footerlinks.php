<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<!-- Jquery JS -->
<script>
    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
        $('.social-wrapper').hide();
        $('.qr-code-sec .qr-img-wrapper button').click(function() {
            $(this).hide();
            $('.social-wrapper').show();
        })
    })
</script>