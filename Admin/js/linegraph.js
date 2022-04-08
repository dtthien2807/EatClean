$(document).ready(function(){
    $.ajax({
        url : "Models/m_data_onl.php",
        type : "GET",
        success : function(data){
            console.log(data);

            var soluongip = [];
            var date_in = [];

            for(var i in data) {
                date_in.push(data[i].date_in);
                soluongip.push(data[i].soluongip);
            }

            var chartdata = {
                labels: date_in,
                datasets: [
                    {
                        label: "Số người truy cập website",
                        fill: false,
                        lineTension: 1,
                        backgroundColor: "rgba(59, 89, 152, 0.75)",
                        borderColor: "rgba(59, 89, 152, 1)",
                        pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
                        pointHoverBorderColor: "rgba(59, 89, 152, 1)",
                        data: soluongip
                    }
                ]
            };

            var ctx = $("#mycanvas");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error : function(data) {

        }
    });
});