@extends('layouts.app')
@section('content')

<section class="section">
   <div class="container">
     	<!-- <h1 class="title">Upcoming Bills for next 45 days</h1> -->
     	
     	<div id="bill-forecast" style="min-width: 250px; height: 300px; margin-bottom: 50px"></div>


     	<div class="example">
	     	<table class="table is-striped">
	     	  	<thead>
		     	    <tr>
		     	      	<th>Date</th>
		     	      	<th>Bill</th>
		     	      	<th>Amount</th>
		     	      	<th>Status</th>
		     	    </tr>
	     	  	</thead>
		     	<tbody>
		     	   	<tr>
		     	   		<td>20-06-2017</td>
		     	   		<td>Credit Card</td>
		     	   		<td>1500</td>
		     	   		<td><span class="tag is-success">Paid</span></td>
		     	   	</tr>	
		     	   	<tr>
		     	   		<td>20-06-2017</td>
		     	   		<td>Health Insurance</td>
		     	   		<td>1500</td>
		     	   		<td><span class="tag is-warning">Pending</span></td>
		     	   	</tr>	
		     	   	<tr>
		     	   		<td>20-06-2017</td>
		     	   		<td>Mutual Fund</td>
		     	   		<td>1500</td>
		     	   		<td><span class="tag is-warning">Pending</span></td>
		     	   	</tr>	
		     	   	<tr>
		     	   		<td>20-06-2017</td>
		     	   		<td>ELSS</td>
		     	   		<td>1500</td>
		     	   		<td><span class="tag is-warning">Pending</span></td>
		     	   	</tr>	
		     	   	<tr>
		     	   		<td>20-06-2017</td>
		     	   		<td>ELSS</td>
		     	   		<td>1500</td>
		     	   		<td><span class="tag is-danger">Overdue</span></td>
		     	   	</tr>	
		     	</tbody>
	     	</table>
	    </div>
   </div>
 </section>

<script type="text/javascript">
	Highcharts.chart('bill-forecast', {
	    chart: {
	        type: 'column'
	    },
	    title: {
	        text: 'Bill forecast for next 6 months'
	    },
	    xAxis: {
	        categories: ['June', 'July', 'Aug', 'Sept', 'Oct', 'Nov'],
	        title: {
	        	text: 'Months'
	        }
	    },
	    yAxis: {
	        min: 0,
	        title: {
	            text: 'Amount'
	        },
	        stackLabels: {
	            enabled: true,
	            style: {
	                fontWeight: 'bold',
	                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
	            }
	        }
	    },
	    legend: {
	        align: 'right',
	        x: -30,
	        verticalAlign: 'top',
	        y: 25,
	        floating: true,
	        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
	        borderColor: '#CCC',
	        borderWidth: 1,
	        shadow: false
	    },
	    tooltip: {
	        headerFormat: '<b>{point.x}</b><br/>',
	        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
	    },
	    plotOptions: {
	        column: {
	            stacking: 'normal',
	            dataLabels: {
	                enabled: true,
	                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
	            }
	        }
	    },
	    series: [{
	        name: 'ELSS',
	        data: [500, 300, 400, 700, 200, 14000]
	    }, {
	        name: 'Mutual Fund',
	        data: [8000, 2500, 3000, 2000, 1000, 34000]
	    }, {
	        name: 'Life Insurance',
	        data: [3500, 4000, 4500, 2500, 5500]
	    }, {
	        name: 'Recurring Deposit',
	        data: [0, 0, 0, 2500, 5500]
	    }, {
	    	name: 'Credit Card',
	    	data: [0, 0, 0, 0, 7500, 0]
	    }

	    ]
	});

</script>

@endsection