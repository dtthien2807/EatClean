$(document).ready(function(){
    $.ajax({
        url : "Models/m_chart_order.php",
        type : "GET",
        data:{action:'fetch'},
        dataType:"JSON",
        success : function(data) {
            console.log(data);

            var tongtien = [];
            var date_order = [];
            var color = [];

            for (var i in data) {
                date_order.push(data[i].date_order);
                tongtien.push(data[i].tongtien);
                color.push(data[i].color);
            }
            var chart_datas = {
                labels: date_order,
                datasets: [
                    {
                        label: "Doanh số",
                        backgroundColor: color,
                        color: '#fff',
                        data: tongtien
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
                data:chart_datas,
                options:options
            });
        },
        error : function(data) {

        }
    });
});