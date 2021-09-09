<script type="text/javascript">
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["PKWT", "ORGANIK"],
    datasets: [{
      data: [<?php echo $this->db->query("select status from data_pegawai where status='Karyawan Tetap'")->num_rows(); ?>,
      <?php echo $this->db->query("select status from data_pegawai where status='Karyawan Tidak Tetap'")->num_rows(); ?>,
      ],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#dddfeb'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#dddfeb'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>

<script type="text/javascript">
// Area Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data:  {
    labels: [<?php echo $this->db->query("select grade from data_pegawai")->num_rows(); ?>],
    datasets : [{
      label: "Berdasarkan Posisi Jabatan",
      backgroundColor: 'rgb(23, 125, 255)',
      borderColor: 'rgb(23, 125, 255)',
      data: [<?php echo $this->db->query("select grade from data_pegawai")->num_rows(); ?>,
      <?php echo $this->db->query("select grade from data_pegawai")->num_rows(); ?>,
    ],
    }],
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero:true
        }
      }]
    },
  }
});
</script>