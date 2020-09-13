</div>
<!-- chiusura container -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script>
    $("#sidebar ul li").click(function() {
        let id = $(this).attr("rel");
        $('li').css('backgroundColor', 'white');
        $(this).css('backgroundColor', 'orange');
        $.get("view/dettaglio2.php?id=" + id, function(data) {
            $("#detail").html(data);
            console.log("dati aggiorati id ", id);
        })
    });
</script>


</body>

</html>