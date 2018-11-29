(function(){
	'use strict';

	HXXSTORE.admin.dashboard=function(){
		charts();
		setInterval(charts, 5000);
	}

	function charts(){

		var revenue = $('#revenue');
		var order = $('#order');

		// var revenue = document.getElementById('revenue');

		// const revenue = document.querySelector('#revenue');

		var orderLabels = [];
		var revenueLabels=[];
		var orderData=[];
		var revenueData=[];

		axios.get('/02/public/admin/charts').then(function(response){
			response.data.orders.forEach(function(monthly){

				orderData.push(monthly.count);
				orderLabels.push(monthly.new_date);
			});

			response.data.revenues.forEach(function(monthly){

				revenueData.push(monthly.amount);
				revenueLabels.push(monthly.new_date);
			});
		

		new Chart(revenue,{
			type:'bar',
			data:{
				labels:revenueLabels,
				datasets:[
					{
						label:'# Revenue',
						data:revenueData,
						backgroundColor:[
							   '#0d47a1',
                                "#FF6384",
                                "#4BC0C0",
                                "#FFCE56",
                                "#1b5e20",
                                "#36A2EB",
                                '#311b92',
                                '#dd2c00',
                                '#263238',
                                '#81c784',
                                '#b9f6ca',
                                '#f57c00'
						]
					}
				]
			}
		});

		new Chart(order,{
			type:'line',
			data:{
				labels:orderLabels,
				datasets:[
					{
						label:'# Order',
						data:orderData,
						backgroundColor:['#81c784']
					}
				]
			}
		});
	});

	}
})();