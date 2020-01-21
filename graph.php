<!DOCTYPE html>
<html>
<head>


<title>legend</title>
<style type ="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="Chart.min.js"></script>


</head>
<body>
    <div id="chart-container" style = "margin-left:200px">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].visitor);
                        marks.push(data[i].timeoftheday);

                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Total Visitors',
                                backgroundColor: 'red',
                                borderColor: 'yellow',
                                hoverBackgroundColor: 'green',
                                hoverBorderColor: '#white',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>