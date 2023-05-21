$(function () {
    'use strict'


    var colors = {
        primary: "#6571ff",
        secondary: "#7987a1",
        success: "#05a34a",
        info: "#66d1d1",
        warning: "#fbbc06",
        danger: "#ff3366",
        light: "#e9ecef",
        dark: "#060c17",
        muted: "#7987a1",
        gridBorder: "rgba(77, 138, 240, .15)",
        bodyColor: "#000",
        cardBg: "#fff"
    }

    var fontFamily = "'Roboto', Helvetica, sans-serif"


    // Orders Chart
    if ($('#ordersChart').length) {
        var options2 = {
            chart: {
                type: "bar",
                height: 60,
                sparkline: {
                    enabled: !0
                }
            },
            plotOptions: {
                bar: {
                    borderRadius: 2,
                    columnWidth: "60%"
                }
            },
            colors: [colors.primary],
            series: [{
                name: '',
                data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63]
            }],
            xaxis: {
                type: 'datetime',
                categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022",],
            },
        };
        new ApexCharts(document.querySelector("#ordersChart"), options2).render();
    }
    // Orders Chart - END



    // Growth Chart
    if ($('#growthChart').length) {
        var options3 = {
            chart: {
                type: "line",
                height: 60,
                sparkline: {
                    enabled: !0
                }
            },
            series: [{
                name: '',
                data: [41, 45, 44, 46, 52, 54, 43, 74, 82, 82, 89]
            }],
            xaxis: {
                type: 'datetime',
                categories: ["Jan 01 2022", "Jan 02 2022", "Jan 03 2022", "Jan 04 2022", "Jan 05 2022", "Jan 06 2022", "Jan 07 2022", "Jan 08 2022", "Jan 09 2022", "Jan 10 2022", "Jan 11 2022",],
            },
            stroke: {
                width: 2,
                curve: "smooth"
            },
            markers: {
                size: 0
            },
            colors: [colors.primary],
        };
        new ApexCharts(document.querySelector("#growthChart"), options3).render();
    }
    // Growth Chart - END

    // $.ajax({
    //     url: config.baseUrl + 'general/dashboard/get_all_deliveries',
    //     method: 'GET',
    //     dataType: 'json',
    //     success: function(response){
    //         // Assuming response is an array containing the fetched data
    //         var deliveries = response;

    //         // Log each delivery object to the console
    //         deliveries.forEach(function(delivery) {
    //             console.log(delivery);
    //         });
    //     },
    //     error: function(xhr, status, error) {
    //         console.log('Error:', error);
    //     }
    // });



    // // Monthly Sales Chart
    // if ($('#monthlySalesChart').length) {
    //     var options = {
    //         chart: {
    //             type: 'bar',
    //             height: '318',
    //             parentHeightOffset: 0,
    //             foreColor: colors.bodyColor,
    //             background: colors.cardBg,
    //             toolbar: {
    //                 show: false
    //             },
    //         },
    //         theme: {
    //             mode: 'light'
    //         },
    //         tooltip: {
    //             theme: 'light'
    //         },
    //         colors: [colors.primary],
    //         fill: {
    //             opacity: .9
    //         },
    //         grid: {
    //             padding: {
    //                 bottom: -4
    //             },
    //             borderColor: colors.gridBorder,
    //             xaxis: {
    //                 lines: {
    //                     show: true
    //                 }
    //             }
    //         },
    //         series: [{
    //             name: 'Sales',
    //             data: [152, 44, 72]
    //         }],
    //         xaxis: {
    //             type: 'month',
    //             categories: ['Manuary', 'February', 'March'],
    //             axisBorder: {
    //                 color: colors.gridBorder,
    //             },
    //             axisTicks: {
    //                 color: colors.gridBorder,
    //             },
    //         },
    //         yaxis: {
    //             title: {
    //                 text: 'Number of Deliveries',
    //                 style: {
    //                     size: 9,
    //                     color: colors.muted
    //                 }
    //             },
    //         },
    //         legend: {
    //             show: true,
    //             position: "top",
    //             horizontalAlign: 'center',
    //             fontFamily: fontFamily,
    //             itemMargin: {
    //                 horizontal: 8,
    //                 vertical: 0
    //             },
    //         },
    //         stroke: {
    //             width: 0
    //         },
    //         dataLabels: {
    //             enabled: true,
    //             style: {
    //                 fontSize: '10px',
    //                 fontFamily: fontFamily,
    //             },
    //             offsetY: -27
    //         },
    //         plotOptions: {
    //             bar: {
    //                 columnWidth: "50%",
    //                 borderRadius: 4,
    //                 dataLabels: {
    //                     position: 'top',
    //                     orientation: 'vertical',
    //                 }
    //             },
    //         },
    //     }

    //     var apexBarChart = new ApexCharts(document.querySelector("#monthlySalesChart"), options);
    //     apexBarChart.render();
    // }
    // // Monthly Sales Chart - END


    if ($('#monthlySalesChart').length) {
        $.ajax({
            url: config.baseUrl + 'general/dashboard/get_all_deliveries',
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                // Assuming response is an array containing the fetched data
                var deliveries = response;

                // Create an object to store the count of deliveries per month
                var monthlyCounts = {};
                // console.log(deliveries)
                // Iterate over the deliveries and count them per month
                deliveries.forEach(function (delivery) {
                    console.log(delivery);
                    var dateString = delivery.delivery_date; // Assuming the date is in a different format
                    var dateParts = dateString.split('-'); // Split the date string
                    var year = parseInt(dateParts[0]);
                    var month = parseInt(dateParts[1]);
                    var day = parseInt(dateParts[2]);

                    // Create a new Date object with the parsed year, month, and day
                    var deliveryDate = new Date(year, month - 1, day);

                    // Get the month name from the delivery date
                    var monthName = deliveryDate.toLocaleString('default', { month: 'long' });

                    if (monthlyCounts[monthName]) {
                        monthlyCounts[monthName]++;
                    } else {
                        monthlyCounts[monthName] = 1;
                    }
                });

                // Extract the month names and counts from the monthlyCounts object
                var months = Object.keys(monthlyCounts);
                var counts = Object.values(monthlyCounts);

                // Chart options
                var options = {
                    chart: {
                        type: 'bar',
                        height: '318',
                        parentHeightOffset: 0,
                        foreColor: colors.bodyColor,
                        background: colors.cardBg,
                        toolbar: {
                            show: false
                        },
                    },
                    theme: {
                        mode: 'light'
                    },
                    tooltip: {
                        theme: 'light'
                    },
                    colors: [colors.primary],
                    fill: {
                        opacity: .9
                    },
                    grid: {
                        padding: {
                            bottom: -4
                        },
                        borderColor: colors.gridBorder,
                        xaxis: {
                            lines: {
                                show: true
                            }
                        }
                    },
                    series: [{
                        name: 'Deliveries',
                        data: counts // Use the delivery counts
                    }],
                    xaxis: {
                        type: 'category',
                        categories: months, // Use the month names
                        axisBorder: {
                            color: colors.gridBorder,
                        },
                        axisTicks: {
                            color: colors.gridBorder,
                        },
                    },
                    yaxis: {
                        title: {
                            text: 'Number of Deliveries',
                            style: {
                                size: 9,
                                color: colors.muted
                            }
                        },
                    },
                    legend: {
                        show: true,
                        position: "top",
                        horizontalAlign: 'center',
                        fontFamily: fontFamily,
                        itemMargin: {
                            horizontal: 8,
                            vertical: 0
                        },
                    },
                    stroke: {
                        width: 0
                    },
                    dataLabels: {
                        enabled: true,
                        style: {
                            fontSize: '10px',
                            fontFamily: fontFamily,
                        },
                        offsetY: -27
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: "50%",
                            borderRadius: 4,
                            dataLabels: {
                                position: 'top',
                                orientation: 'vertical',
                            }
                        },
                    },
                };

                var apexBarChart = new ApexCharts(document.querySelector("#monthlySalesChart"), options);
                apexBarChart.render();
            },
            error: function (xhr, status, error) {
                console.log('Error:', error);
            }
        });
    }





    // Cloud Storage Chart
    if ($('#storageChart').length) {
        var options = {
            chart: {
                height: 260,
                type: "radialBar"
            },
            series: [67],
            colors: [colors.primary],
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 15,
                        size: "70%"
                    },
                    track: {
                        show: true,
                        background: colors.light,
                        strokeWidth: '100%',
                        opacity: 1,
                        margin: 5,
                    },
                    dataLabels: {
                        showOn: "always",
                        name: {
                            offsetY: -11,
                            show: true,
                            color: colors.muted,
                            fontSize: "13px"
                        },
                        value: {
                            color: colors.bodyColor,
                            fontSize: "30px",
                            show: true
                        }
                    }
                }
            },
            fill: {
                opacity: 1
            },
            stroke: {
                lineCap: "round",
            },
            labels: ["Storage Used"]
        };

        var chart = new ApexCharts(document.querySelector("#storageChart"), options);
        chart.render();
    }
    // Cloud Storage Chart - END


});