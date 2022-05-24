const densityCanvas = document.getElementById("densityChart");

Chart.defaults.font.family = "Teko";
Chart.defaults.font.size = 22;
Chart.defaults.color = "black";

let densityData = {
  label: 'Density of Planets (kg/m3)',
  data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638]
};

let barChart = new Chart(densityCanvas, {
  type: 'bar',
  data: {
    labels: ["Bilaspur", "Mandi", "Kullu", "Lahaul and Spiti", "Shimla", "Kinnaur", "Kangra"],
    datasets: [densityData]
  }
});