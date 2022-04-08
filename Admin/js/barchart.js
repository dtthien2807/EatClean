$(document).ready(function(){
    $.ajax({
        url : "Models/m_data_onl.php",
        type : "GET",
        data:{action:'fetch'},
        dataType:"JSON",
        success : function(data) {
            console.log(data);

            var soluongip = [];
            var date_in = [];
            var color = [];

            for (var i in data) {
                date_in.push(data[i].date_in);
                soluongip.push(data[i].soluongip);
                color.push(data[i].color);
            }
            var chart_data = {
                labels: date_in,
                datasets: [
                    {
                        label: "Số người truy cập website",
                        backgroundColor: color,
                        color: '#fff',
                        data: soluongip
                    }
                ]
            };
            var options = {
                responsive:true,
                scales:{
                    yAxes:[{
                        ticks:{
                            min:0
                        }
                    }]
                }
            };
            var group_chart3 = $('#bar_chart');

            var graph3 = new Chart(group_chart3, {
                type:'bar',
                data:chart_data,
                options:options
            });
        },
        error : function(data) {

        }
    });
});