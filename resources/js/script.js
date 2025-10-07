//Uso de la librería Chart.js
  // Colores de tu paleta
  const mainColor = '#5985E9';
  const darkColor = '#050F1F';
  const white = '#ffffff';

  // Gráfica de barras
  const barCtx = document.getElementById('barChart').getContext('2d');
  new Chart(barCtx, {
    type: 'bar',
    data: {
      labels: ['Marketing', 'Finance', 'Development', 'HR', 'Sales'],
      datasets: [{
        label: 'Applications Received',
        data: [120, 90, 150, 80, 100],
        backgroundColor: mainColor,
        borderColor: darkColor,
        borderWidth: 1,
        borderRadius: 5,
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false },
        title: {
          display: true,
          text: 'Applications by Department',
          color: darkColor,
          font: { size: 18 }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          ticks: { color: darkColor }
        },
        x: {
          ticks: { color: darkColor }
        }
      }
    }
  });

  // Gráfica de pastel
  const pieCtx = document.getElementById('pieChart').getContext('2d');
  new Chart(pieCtx, {
    type: 'pie',
    data: {
      labels: ['Accepted', 'Rejected', 'In Process'],
      datasets: [{
        label: 'Status Breakdown',
        data: [45, 25, 30],
        backgroundColor: [
          '#5985E9',
          '#ff6384',
          '#ffcd56'
        ],
        borderColor: white,
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: 'Application Status Distribution',
          color: darkColor,
          font: { size: 18 }
        },
        legend: {
          position: 'bottom',
          labels: { color: darkColor }
        }
      }
    }
  });

