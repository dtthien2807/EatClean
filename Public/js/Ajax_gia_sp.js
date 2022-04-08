$(document).ready(function () {
//alert("1");
    $("#slider-range").mouseup(function () {

        var leftPrice = $("#slider-range").slider("values", 0);
        var rightPrice = $("#slider-range").slider("values", 1);
        var form_data = {"leftPrice": leftPrice, "rightPrice" : rightPrice};

//            alert(11);
        $.ajax({
            type:"POST",
            data: form_data,
            url:"xl_loc_san_pham.php",
            success: function(data){
                //alert(data);
                $(".single-pro").html(data);
            }
        });


//        $("slider-range").mousedown(function (e) {
//            alert($( "#slider-range" ).slider( "values", 0 ) + " - " + $( "#slider-range" ).slider( "values", 1 ));
//        });
    });
});

