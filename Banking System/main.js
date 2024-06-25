var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
  if(!sidebarOpen) {
    sidebar.classList.add("sidebar-responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if(sidebarOpen) {
    sidebar.classList.remove("sidebar-responsive");
    sidebarOpen = false;
  }
}

var barChartOptions = {
  series: [{
    data: [10, 8, 6, 4, 2]
  }],
  chart: {
    type: 'bar',
    height: 350,
    toolbar: {
      show: false
    },
  },
  colors: [
    "#0F877C",
    "#0F877C",
    "#0F877C",
    "#0F877C",
    "#0F877C"
  ],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: '40%',
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  xaxis: {
    categories: ["Adham", "Hamza", "Suad", "Ahmed", "Assem"],
  },
  yaxis: {
    title: {
      text: "Count"
    }
  }
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();

var areaChartOptions = {
  series: [{
    name: 'Number Of Users',
    data: [31, 40, 28, 51, 42, 109, 100]
  }, {
    name: 'Sales',
    data: [11, 32, 45, 32, 34, 52, 41]
  }],
  chart: {
    height: 350,
    type: 'area',
    toolbar: {
      show: false,
    },
  },

  colors: ["#0F877C", "#246dec"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth'
  },
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Number Of Users',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Sales',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  }
};


var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
areaChart.render();


function demoo(){
  window.confirm("Welcome In Bam Sir Wish You All The Best");
}

function demoo2(){
  window.confirm("We Are Bam Team We Support All Your Ideas If You Have Any Idea You Can Deal With Our Official Site Of Bam Bank & We Can Transfer Your Money To Another Customer By Visa Card You Can Write The Form And Start It")
}