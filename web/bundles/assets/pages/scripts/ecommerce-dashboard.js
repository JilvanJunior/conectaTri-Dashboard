var EcommerceDashboard = function() {

    function showTooltip(x, y, labelX, labelY) {
        $('<div id="tooltip" class="chart-tooltip">' + (labelY.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,')) + '<\/div>').css({
            position: 'absolute',
            display: 'none',
            top: y - 40,
            left: x - 60,
            border: '0px solid #ccc',
            padding: '2px 6px',
            'background-color': '#fff'
        }).appendTo("body").fadeIn(200);
    }

    var initChart1 = function() {

        var data = [
            ['01/2017', 4],
            ['02/2017', 8],
            ['03/2017', 10],
            ['04/2017', 12],
            ['05/2017', 2125],
            ['06/2017', 324],
            ['07/2017', 1223],
            ['08/2017', 1365],
            ['09/2017', 250],
            ['10/2017', 999],
            ['11/2017', 390]
        ];

        var plot_statistics = $.plot(
            $("#statistics_1"), [{
                data: data,
                lines: {
                    fill: 0.6,
                    lineWidth: 0
                },
                color: ['#f89f9f']
            }, {
                data: data,
                points: {
                    show: true,
                    fill: true,
                    radius: 5,
                    fillColor: "#f89f9f",
                    lineWidth: 3
                },
                color: '#fff',
                shadowSize: 0
            }], {

                xaxis: {
                    tickLength: 0,
                    tickDecimals: 0,
                    mode: "categories",
                    min: 2,
                    font: {
                        lineHeight: 15,
                        style: "normal",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                yaxis: {
                    ticks: 3,
                    tickDecimals: 0,
                    tickColor: "#f0f0f0",
                    font: {
                        lineHeight: 15,
                        style: "normal",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                grid: {
                    backgroundColor: {
                        colors: ["#fff", "#fff"]
                    },
                    borderWidth: 1,
                    borderColor: "#f0f0f0",
                    margin: 0,
                    minBorderMargin: 0,
                    labelMargin: 20,
                    hoverable: true,
                    clickable: true,
                    mouseActiveRadius: 6
                },
                legend: {
                    show: false
                }
            }
        );

        var previousPoint = null;

        $("#statistics_1").bind("plothover", function(event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1]);
                }
            } else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });

    }

    var initChart2 = function() {

        var data = [
            ['01/2017', 10],
            ['02/2017', 0],
            ['03/2017', 10],
            ['04/2017', 12],
            ['05/2017', 212],
            ['06/2017', 324],
            ['07/2017', 122],
            ['08/2017', 136],
            ['09/2017', 250],
            ['10/2017', 99],
            ['11/2017', 190]
        ];

        var plot_statistics = $.plot(
            $("#statistics_2"), [{
                data: data,
                lines: {
                    fill: 0.6,
                    lineWidth: 0
                },
                color: ['#BAD9F5']
            }, {
                data: data,
                points: {
                    show: true,
                    fill: true,
                    radius: 5,
                    fillColor: "#BAD9F5",
                    lineWidth: 3
                },
                color: '#fff',
                shadowSize: 0
            }], {

                xaxis: {
                    tickLength: 0,
                    tickDecimals: 0,
                    mode: "categories",
                    min: 2,
                    font: {
                        lineHeight: 14,
                        style: "normal",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                yaxis: {
                    ticks: 3,
                    tickDecimals: 0,
                    tickColor: "#f0f0f0",
                    font: {
                        lineHeight: 14,
                        style: "normal",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                grid: {
                    backgroundColor: {
                        colors: ["#fff", "#fff"]
                    },
                    borderWidth: 1,
                    borderColor: "#f0f0f0",
                    margin: 0,
                    minBorderMargin: 0,
                    labelMargin: 20,
                    hoverable: true,
                    clickable: true,
                    mouseActiveRadius: 6
                },
                legend: {
                    show: false
                }
            }
        );

        var previousPoint = null;

        $("#statistics_2").bind("plothover", function(event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1]);
                }
            } else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });

    }

    var initChart3 = function() {

        var data = [
            ['01/2017', 10],
            ['02/2017', 0],
            ['03/2017', 10],
            ['04/2017', 12],
            ['05/2017', 212],
            ['06/2017', 324],
            ['07/2017', 122],
            ['08/2017', 136],
            ['09/2017', 250],
            ['10/2017', 99],
            ['11/2017', 190]
        ];

        var plot_statistics = $.plot(
            $("#statistics_3"), [{
                data: data,
                lines: {
                    fill: 0.6,
                    lineWidth: 0
                },
                color: ['#8E44AD']
            }, {
                data: data,
                points: {
                    show: true,
                    fill: true,
                    radius: 5,
                    fillColor: "#8E44AD",
                    lineWidth: 3
                },
                color: '#fff',
                shadowSize: 0
            }], {

                xaxis: {
                    tickLength: 0,
                    tickDecimals: 0,
                    mode: "categories",
                    min: 2,
                    font: {
                        lineHeight: 14,
                        style: "normal",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                yaxis: {
                    ticks: 3,
                    tickDecimals: 0,
                    tickColor: "#f0f0f0",
                    font: {
                        lineHeight: 14,
                        style: "normal",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                grid: {
                    backgroundColor: {
                        colors: ["#fff", "#fff"]
                    },
                    borderWidth: 1,
                    borderColor: "#f0f0f0",
                    margin: 0,
                    minBorderMargin: 0,
                    labelMargin: 20,
                    hoverable: true,
                    clickable: true,
                    mouseActiveRadius: 6
                },
                legend: {
                    show: false
                }
            }
        );

        var previousPoint = null;

        $("#statistics_3").bind("plothover", function(event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1]);
                }
            } else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });

    }

    var initChart4 = function() {

        var data = [
            ['01/2017', 10],
            ['02/2017', 0],
            ['03/2017', 10],
            ['04/2017', 12],
            ['05/2017', 212],
            ['06/2017', 324],
            ['07/2017', 122],
            ['08/2017', 136],
            ['09/2017', 250],
            ['10/2017', 99],
            ['11/2017', 190]
        ];

        var plot_statistics = $.plot(
            $("#statistics_4"), [{
                data: data,
                lines: {
                    fill: 0.6,
                    lineWidth: 0
                },
                color: ['#f4a259']
            }, {
                data: data,
                points: {
                    show: true,
                    fill: true,
                    radius: 5,
                    fillColor: "#f4a259",
                    lineWidth: 3
                },
                color: '#fff',
                shadowSize: 0
            }], {

                xaxis: {
                    tickLength: 0,
                    tickDecimals: 0,
                    mode: "categories",
                    min: 2,
                    font: {
                        lineHeight: 14,
                        style: "normal",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                yaxis: {
                    ticks: 3,
                    tickDecimals: 0,
                    tickColor: "#f0f0f0",
                    font: {
                        lineHeight: 14,
                        style: "normal",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                grid: {
                    backgroundColor: {
                        colors: ["#fff", "#fff"]
                    },
                    borderWidth: 1,
                    borderColor: "#f0f0f0",
                    margin: 0,
                    minBorderMargin: 0,
                    labelMargin: 20,
                    hoverable: true,
                    clickable: true,
                    mouseActiveRadius: 6
                },
                legend: {
                    show: false
                }
            }
        );

        var previousPoint = null;

        $("#statistics_4").bind("plothover", function(event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1]);
                }
            } else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });

    }

    var initChart6 = function() {

        var data = [
            ['01/2017', 10],
            ['02/2017', 0],
            ['03/2017', 10],
            ['04/2017', 12],
            ['05/2017', 212],
            ['06/2017', 324],
            ['07/2017', 122],
            ['08/2017', 136],
            ['09/2017', 250],
            ['10/2017', 99],
            ['11/2017', 190]
        ];

        var plot_statistics = $.plot(
            $("#statistics_6"), [{
                data: data,
                lines: {
                    fill: 0.6,
                    lineWidth: 0
                },
                color: ['#3c91e6']
            }, {
                data: data,
                points: {
                    show: true,
                    fill: true,
                    radius: 5,
                    fillColor: "#3c91e6",
                    lineWidth: 3
                },
                color: '#fff',
                shadowSize: 0
            }], {

                xaxis: {
                    tickLength: 0,
                    tickDecimals: 0,
                    mode: "categories",
                    min: 2,
                    font: {
                        lineHeight: 14,
                        style: "normal",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                yaxis: {
                    ticks: 3,
                    tickDecimals: 0,
                    tickColor: "#f0f0f0",
                    font: {
                        lineHeight: 14,
                        style: "normal",
                        variant: "small-caps",
                        color: "#6F7B8A"
                    }
                },
                grid: {
                    backgroundColor: {
                        colors: ["#fff", "#fff"]
                    },
                    borderWidth: 1,
                    borderColor: "#f0f0f0",
                    margin: 0,
                    minBorderMargin: 0,
                    labelMargin: 20,
                    hoverable: true,
                    clickable: true,
                    mouseActiveRadius: 6
                },
                legend: {
                    show: false
                }
            }
        );

        var previousPoint = null;

        $("#statistics_6").bind("plothover", function(event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1]);
                }
            } else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });

    }


    return {

        //main function
        init: function() {
            initChart1();
            initChart3();
            initChart4();
            initChart6();

            $('#statistics_orders_tab').on('shown.bs.tab', function(e) {
                initChart2();
            });
        }

    };

}();

jQuery(document).ready(function() {    
   EcommerceDashboard.init();
});