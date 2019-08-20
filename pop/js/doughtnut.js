$(document).ready(function(){
$.ajax({
    url : "http://localhost/pop/data3.php",
    method : "GET",
    success : function(response) {
        console.log(response);
        data = JSON.parse(response);
        console.log(response);
        var edad = [];
        var cantidad = [];

        for (var i in data) {
            edad.push(data[i].edad);
            cantidad.push(data[i].cantidad);
        }

        var data1 = {
            labels: edad,
            datasets : [
                {
                    label : 'Ubicacion',
                    backgroundColor : [ "#DEB887", "#A9A9A9", "#DC143C", "#F4A460", "#2E8B57"],
                    borderColor : [ "#CDA776", "#989898", "#CB252B", "#E39371", "#1D7A46"],
                    data: cantidad
                }
            ]
        };

        var ctx1 = $("#doughnut-chartcanvas-1");

        var chart1 = new Chart( ctx1, {
            type : "doughnut",
            data : data1,
         
        } );

    },
    error : function(data) {

        console.log(data);

    }
});

})

