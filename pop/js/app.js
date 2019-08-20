$(document).ready(function(){
    $.ajax({
      url: "http://localhost/pop/data.php",
      method: "GET",
      success: function(response) {
        console.log(response);
        data = JSON.parse(response);
        console.log(response);
        var genero = [];
        var cantidad = [];
  
        for(var i in data) {
          genero.push(data[i].genero);
          cantidad.push(data[i].cantidad);
        }
  
        var chartdata = {
          labels: genero,
          datasets : [
            {
              label: 'Genero',
              backgroundColor: 'rgba(51, 153, 153, 0.75)',
              borderColor: 'rgba(43, 128, 128, 0.75)',
              hoverBackgroundColor: 'rgba(28, 82, 82, 1)',
              hoverBorderColor: 'rgba(28, 82, 82, 1)',
              data: cantidad
            }
          ]
        };
  
        var ctx = $("#mycanvas");
  
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata
        });
      },
      error: function(data) {
        console.log(data);
      }
    });
  });