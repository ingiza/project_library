$(document).ready(function(){
    console.log("am working!!!")
    new WOW().init();
    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
            type: 'doughnut',
            data: {
                labels: ["Red", "Green", "Yellow", "Dark Grey"],
                datasets: [{
                data: [50, 50, 100, 203],
                backgroundColor: ["#ff0000", "#008000", "#ffff00", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#8fbc8f", "#FFC870", "#616774"]
            }]
        },
        options: {
            responsive: true
        }
    });
});
