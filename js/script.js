let form = document.querySelectorAll('input');
let arrPresion = [];
let arrTiempo = [];

let canGraphics = document.getElementById("graphics");
new Chart("graphics", {
     type: "bar",
     data: {
       labels: arrTiempo,
       datasets:[{
         fill: false,
         lineTension: 0,
         backgroundColor: "rgba(0, 0, 255, 1.0)",
         borderColor: "rgba(0, 0, 255, 0.1)",
         data: arrPresion
       }]
     },
     options: {
       legend: {display: true},
       scales: {
         yAxes: [{ticks: {min: 6, max:16}}]
       }
     }
 });

for(let i = 0; i < form.length; i++){
  console.log(i);
  let presion;
  let tiempo;
  if(document.getElementById("presion"+i).value != null) {
    presion = document.getElementById("presion"+i).value;
    tiempo = document.getElementById("tiempo"+i).value;
    arrPresion.push(presion);
    arrTiempo.push(tiempo);
  } 
}




