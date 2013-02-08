// Load the Visualization API and the piechart package.
google.load('visualization', '1.0', {
    'packages': ['corechart']
});


var options, data, chart;

$(function () {


    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    var tweets_table = $('#tweet-table');


    function getData() {
        // Create array to hold our values for data table
        // Each key is an array which represents a "row" of data
        var values = [];

        // get our values
        $('#tweet-table tr').each(function (i, v) {

            // Create a new "row"
            values[i] = [];

            // Get either th or td and loop
            $(this).children('th,td').each(function (ii, vv) {
                if ($(this).is('td.tweet-count')) {
                    // if we're looking at a numeric column be sure
                    // to pass a integar to the Chart API
                    values[i][ii] = parseInt($(this).html());
                } else {
                    // otherwise just get the text string
                    values[i][ii] = $(this).html();
                }
            });
        });

        return values;
    }

    function drawChart() {
        var values = getData();

        // Create the data table.
        data = google.visualization.arrayToDataTable(values);

        // Set chart options
        options = {

            'width': '100%',
            'height': 500,
            fontSize: 12,
            fontName: 'Segoe UI',
            chartArea: {
                width: '92%',
                height: 400,
                top: 40,
                right: 40,
                bottom: 40,
                left: 40
            },
            backgroundColor: 'transparent',
            title: tweets_table.find('caption').text(),
            titleTextStyle: {
                color: '#111',
                fontSize: 24
            },
            titlePosition: 'none',
            colors: ['#08C'],
            areaOpacity: 0.1,
            lineWidth: 4,
            pointSize: 8,
            legend: {
                position: 'none'
            },
            hAxis: {
                textStyle: {
                    color: '#666'
                },
                gridlines: {
                    color: '#eee',
                    count: 20
                },
                baselineColor: '#eeeeee'
            },
            vAxis: {
                textStyle: {
                    color: '#666'
                },
                gridlines: {
                    color: '#eee',
                    count: 8
                }
            }
        };

        // Instantiate and draw our chart, passing in some options.
        chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }


    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
});


$(window).smartresize(function () {
    chart.draw(data, options);
});