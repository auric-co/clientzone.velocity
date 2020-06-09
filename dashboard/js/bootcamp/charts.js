(function ($) {
  // USE STRICT
  "use strict";

//attendance monthly
  try {
       $.ajax({
            type:'GET',
            url:'http://clientzone.velocityhealth.co.za/dashboard/activities/getData/bar/index.php?activity=13',
            success:function(response){
                var data = JSON.parse(response);
                console.log(data.attend);
                var ctx = document.getElementById("attendanceMonthly");
                if (ctx) {
                  ctx.height = 150;
                  var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                      labels: data.sessions,
                      type: 'line',
                      defaultFontFamily: 'Poppins',
                      datasets: [{
                        data: data.attend,
                        label: "Attendance (Per Session)",
                        backgroundColor: 'rgba(0,103,255,.15)',
                        borderColor: 'rgba(0,103,255,0.5)',
                        borderWidth: 3.5,
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointBorderColor: 'transparent',
                        pointBackgroundColor: 'rgba(0,103,255,0.5)',
                      },]
                    },
                    options: {
                      responsive: true,
                      tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Poppins',
                        bodyFontFamily: 'Poppins',
                        cornerRadius: 3,
                        intersect: false,
                      },
                      legend: {
                        display: false,
                        position: 'top',
                        labels: {
                          usePointStyle: true,
                          fontFamily: 'Poppins',
                        },
            
            
                      },
                      scales: {
                        xAxes: [{
                          display: true,
                          gridLines: {
                            display: false,
                            drawBorder: false
                          },
                          scaleLabel: {
                            display: false,
                            labelString: 'Month'
                          },
                          ticks: {
                            fontFamily: "Poppins"
                          }
                        }],
                        yAxes: [{
                          display: true,
                          gridLines: {
                            display: false,
                            drawBorder: false
                          },
                          scaleLabel: {
                            display: true,
                            labelString: 'Value',
                            fontFamily: "Poppins"
                          },
                          ticks: {
                            beginAtZero: true,
                            stepSize: 5,
                            fontFamily: "Poppins"
                          }
                        }]
                      },
                      title: {
                        display: false,
                      }
                    }
                  });
                } 
            }
        }); 
   


  } catch (error) {
    console.log(error);
  }

  
//attendance (yearly)
  try {

    // single bar chart
    
    $.ajax({
            type:'GET',
            url:'http://clientzone.velocityhealth.co.za/dashboard/activities/getData/chart/index.php?activity=13',
            success:function(response){
                var data = JSON.parse(response);
                console.log(data.attend);
                var ctx = document.getElementById("yearlyAttendance");
                if (ctx) {
                  ctx.height = 150;
                  var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                      labels: data.sessions,
                      datasets: [
                        {
                          label: "Attendance (Per Month)",
                          data: data.attend,
                          borderColor: "rgba(0, 123, 255, 0.9)",
                          borderWidth: "0",
                          backgroundColor: "rgba(0, 123, 255, 0.5)"
                        }
                      ]
                    },
                    options: {
                      legend: {
                        position: 'top',
                        labels: {
                          fontFamily: 'Poppins'
                        }
            
                      },
                      scales: {
                        xAxes: [{
                          ticks: {
                            fontFamily: "Poppins"
            
                          }
                        }],
                        yAxes: [{
                          ticks: {
                            beginAtZero: true,
                            stepSize: 10,
                            beginAtZero: true,
                            fontFamily: "Poppins"
                          }
                        }]
                      }
                    }
                  });
                }
            }
    });

  } catch (error) {
    console.log(error);
  }

//line chart
  try {

    //line chart
    var ctx = document.getElementById("lineChart");
    if (ctx) {
      ctx.height = 150;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          defaultFontFamily: "Poppins",
          datasets: [
            {
              label: "My First dataset",
              borderColor: "rgba(0,0,0,.09)",
              borderWidth: "1",
              backgroundColor: "rgba(0,0,0,.07)",
              data: [22, 44, 67, 43, 76, 45, 12]
            },
            {
              label: "My Second dataset",
              borderColor: "rgba(0, 123, 255, 0.9)",
              borderWidth: "1",
              backgroundColor: "rgba(0, 123, 255, 0.5)",
              pointHighlightStroke: "rgba(26,179,148,1)",
              data: [16, 32, 18, 26, 42, 33, 44]
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          responsive: true,
          tooltips: {
            mode: 'index',
            intersect: false
          },
          hover: {
            mode: 'nearest',
            intersect: true
          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins"

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }

        }
      });
    }


  } catch (error) {
    console.log(error);
  }
})(jQuery);