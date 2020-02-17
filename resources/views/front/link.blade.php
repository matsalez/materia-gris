<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/footer.css">

<!-- include library jquery -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>



$(function() {
    $('a[href*=\\#]:not([href=\\#])').on('click', function() {
        var NavbarHeight = $("div#navbar").height();
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top - NavbarHeight
            }, 1000);
            return false;
        }
    });
});
</script>
