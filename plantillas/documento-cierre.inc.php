<!--firebase-->
<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.4/firebase-firestore.js"></script>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
</script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
</script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js">
</script>
<script type="text/javascript" src="<?php echo RUTA_JS?>mdb-filter.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- datatables JS 
<script type="text/javascript" src="<?php echo RUTA_JS?>datatables/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>main.js"></script>-->

<script type="text/javascript" src="<?php echo RUTA_JS?>loader.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>app.js"></script>
<script type="text/javascript" src="<?php echo RUTA_JS?>sombra.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".button-e").click(function() {
        var value = $(this).attr("data-filter");
        if (value == "all") {
            $(".filter").show("1000");
        } else {
            $(".filter").not("." + value).hide("3000");
            $(".filter").filter("." + value).show("3000");
        }
        //add active class
        $("ul .button-e").click(function() {
            $(this).addClass('activar').siblings().removeClass('activar');
        })
    })
})
</script>
<script type="text/javascript">
new WOW().init();
</script>
</body>

</html>