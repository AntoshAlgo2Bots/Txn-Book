$(document).ready(function () {
  function loadPie(divId, title, data_pie) {
    google.charts.load("current", { packages: ["corechart"] });

    async function dataChart() {
      var data =  await google.visualization.arrayToDataTable(data_pie);

      //   console.log(data);

      var options = {
        title: title,
        pieHole: 0.4,
        is3D: true,
        pieSliceTextStyle: {
          color: "white",
        },
      };

      var chart = new google.visualization.PieChart(
        document.getElementById(divId)
      );
      chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(dataChart);

  }

  async function setDataOfPie(data, title, divId) {
    let arrForPie = [["name", "value"]];

    Object.keys(data).forEach((Element) => {
      let arr = [Element, data[Element]];
      arrForPie.push(arr);
    });

    await loadPie(divId, title, arrForPie);
  }

  $.get(
    "./phpAjax/dashboardAjax.php",
    {
      pieChartData: "pieChartData",
    },
    async function (data) { 
      console.log(data);

      let txn_booK = data.txnBook.Indexes;
      let user_creation = data.userCreation.Indexes;

      console.log(txn_booK)

      // await setDataOfPie(requisition_table, "PR Requests", "pr_requests");
      await setDataOfPie(txn_booK, "Transaction Book", "txn_div");
      await setDataOfPie(user_creation, "User Report", "user_div");

      
    },
    "json"
  ).fail(error=>{
    console.log(error);
  })
});





