$(document).ready(function(){
    $.ajax({
      url : "http://localhost/pop/data2.php",
      type : "GET",
      success : function(response){
        console.log(response);
        data = JSON.parse(response);
        console.log(response);
        var edad = [];
        var cantidad = [];

        for(var i in data) {
            edad.push(data[i].edad);
            cantidad.push(data[i].cantidad);
        }
  
        var chartdata = {
          labels: edad,
          datasets: [
            {
              label: "Edad",
              fill: false,
              lineTension: 0.1,
              backgroundColor: "rgba(59, 89, 152, 0.75)",
              borderColor: "rgba(59, 89, 152, 1)",
              pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
              pointHoverBorderColor: "rgba(59, 89, 152, 1)",
              data: cantidad
            },
          ]
        };
  
        var ctx = $("#mycanvas2");
  
        var LineGraph = new Chart(ctx, {
          type: 'line',
          data: chartdata
        });
      },
      error : function(data) {
  
      }
    });
  });