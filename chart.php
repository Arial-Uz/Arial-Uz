<!DOCTYPE html>
<html lang="uz">

<head>
  <meta charset="UTF-8">
  <title>Qizil Gradient Chiziqli Chart + Year Filter</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
  <style>
    /* === Sizning avvalgi CSS’ingiz o‘zgarishsiz === */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      height: 100vh
    }

    .chart-container {
      width: 600px;
      height: 400px;
      background: #210202;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, .1);
      display: flex;
      flex-direction: column;
      overflow: hidden
    }

    .chart-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 15px;
      font-size: 1rem;
      color: #FF0000
    }

    .chart-header h2 {
      margin: 0;
      font-size: 1rem;
      color: inherit
    }

    .year-select {
      background-color: #210202;
      color: #FF0000;
      border: 1px solid #FF0000;
      border-radius: 4px;
      padding: 5px 10px;
      font-size: .9rem;
      cursor: pointer;
      outline: none;
      transition: background-color .3s
    }

    .year-select:hover {
      background-color: rgba(255, 0, 0, .15)
    }

    .year-select option {
      background: #210202;
      color: #FF0000;
    }

    .year-select option:hover,
    .year-select option:checked,
    .year-select option:focus .chartBox {
        {
        background: #210202;
        color: #FF0000;
      }
    }

    canvas {
      width: 100% !important;
      height: 100% !important
    }
  </style>
</head>

<body>
  <div class="chart-container">
    <div class="chart-header">
      <h2>Total Sales</h2>
      <select id="yearFilter" class="year-select">
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023" selected>2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
      </select>
    </div>
    <div class="chartBox">
      <canvas id="myChart"></canvas>
    </div>
  </div>

  <script>
    const ctx = document.getElementById('myChart').getContext('2d');

    /* Gradient (o‘zgarmadi) */
    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(255,0,0,0.15)');
    gradient.addColorStop(1, 'rgba(255,0,0,0)');

    const labels = ["Yan", "Feb", "Mart", "Apr", "May", "Iyn", "Iyl", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const yearData = {
      2020: [40, 60, 55, 30, 100, 80, 70, 20, 85, 60, 40, 90],
      2021: [50, 45, 70, 95, 60, 110, 120, 50, 70, 100, 55, 90],
      2022: [20, 30, 40, 50, 60, 120, 80, 110, 60, 70, 80, 100],
      2023: [60, 55, 65, 70, 90, 150, 100, 60, 55, 70, 90, 80],
      2024: [10, 40, 70, 80, 90, 95, 105, 65, 50, 60, 75, 100],
      2025: [70, 65, 80, 110, 40, 75, 115, 90, 95, 85, 100, 120]
    };
    let currentYear = '2023';

    /* Fonni bo‘yaydigan plagin (o‘zgarmadi) */
    const chartAreaBg = {
      id: 'chartAreaBg',
      beforeDraw(chart) {
        const { ctx, chartArea: { left, top, width, height } } = chart;
        ctx.save();
        ctx.fillStyle = '#210202';
        ctx.fillRect(left, top, width, height);
        ctx.restore();
      }
    };

    const chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels,
        datasets: [{
          label: 'Monthly Sales',
          data: yearData[currentYear],
          fill: true,
          backgroundColor: gradient,
          borderColor: '#FF0000',
          borderWidth: 2,
          tension: 0.3,
          pointBackgroundColor: '#210202',
          pointBorderColor: '#FF0000',
          pointHoverBackgroundColor: '#FF0000',
          pointHoverBorderColor: '#210202',
          pointRadius: 4,
          pointHoverRadius: 6
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        layout: { padding: 0 },
        scales: {
          y: {
            beginAtZero: true,
            /* === GRID CHIZIQLARI O‘CHIRILDI === */
            grid: { display: false, drawBorder: false },
            ticks: { color: '#FF0000', padding: 3 }
          },
          x: {
            /* === GRID CHIZIQLARI O‘CHIRILDI === */
            grid: { display: false, drawBorder: false },
            ticks: {
              color: '#FF0000',
              autoSkip: false,
              maxRotation: 0,
              minRotation: 0,
              font: { weight: 'bold', size: 10 },
              padding: 3
            }
          }
        },
        plugins: {
          legend: { display: false },
          tooltip: { enabled: true }
        }
      },
      plugins: [chartAreaBg]
    });

    document.getElementById('yearFilter').addEventListener('change', e => {
      currentYear = e.target.value;
      chart.data.datasets[0].data = yearData[currentYear];
      chart.update();
    });
  </script>
</body>

</html>

// mana shu