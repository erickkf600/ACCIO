var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Segunda", "Terça", "Quarta", "Quinta", "Quinta", "Sexta", "Sabado", "Domingo"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 16530, 16000],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#e2aa00',
            borderWidth: 6,
            pointBackgroundColor: '#e2aa00'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });


      /*função imprimir*/
      function myFunction() {
      window.print();
}

/*função janela*/
      function drive() {
      window.open('https://www.google.com/intl/pt/drive/','Drive','LEFT=50, WIDTH=1000, HEIGHT=1000');
    }

    function email() {
      window.open('https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin','Email','LEFT=50, WIDTH=1000, HEIGHT=1000');
    }

    function dropBox() {
      window.open('https://www.dropbox.com/pt_BR/','Drive','LEFT=50, WIDTH=1000, HEIGHT=1000');
    }


  