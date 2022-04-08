
$(document).ready(function() {
    $('a.button2').click(function() {
        var $key=$(this).attr("id");

        var $soluonginput="#soluong"+$key;

        var $soLuong=$($soluonginput).val();


        var $dongiainput="#dongia"+$key;

        var $dongia=$($dongiainput).val();
        // alert($dongia);
        var form_data = {
            id    : $key,
            soluong : $soLuong,
            dongia  : $dongia,
        };


        $.ajax({
            url:"mua_hang.php",
            type: 'POST',
            async : true,
            data: form_data,
            dataType: 'json',
            success: function(data){
//alert("123");
                alert("Số lượng đặt: " + data['sl'] + ".\nTổng tiền: " + formatCurrency(data['st']) + " vnđ.");
            },
            error: function(error){
                alert(error.statusText)
            }
        });
        return false;
    }); //click
}); // ready
//Định dạng số
function formatCurrency(num)
{
    var num = num.toString().replace(/\$|\,/g,'');
    if(isNaN(num))
        num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num*100+0.50000000001);
    num = Math.floor(num/100).toString();
    for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
        num = num.substring(0,num.length-(4*i+3))+','+
            num.substring(num.length-(4*i+3));
    return (((sign)?'':'-') + num);
}
