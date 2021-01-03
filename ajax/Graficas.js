ListarNombres();
function ListarNombres(){
	jQuery.ajax({
        url:'./../controllers/GraficaController.php?opcion=ListarNombre',
        type: 'GET',
        beforeSend: function() {},
        success: function(r) {
            data = $.parseJSON(r);
            if (data.length > 0) {
                //    console.log(data);
                select = "<option disabled></option>";
                $.each(data, function(key, value) {
                    select = select + "<option value=" + value[0] + ">" + value[1] + "</option>";
                });
                $('#TipoPersona').html(select);
            }
        }
    });
}

function GraficapH(){
	let id = $('#TipoPersona').val();
	jQuery.ajax({
		type: 'POST',
		data: 'id=' + id,
		url:'./../controllers/GraficaController.php?opcion=Grafica',
		success: function(r){
			var data = r.split("/");
			let dataAreay = crearArr(data[0]);
			let dataAreax = crearArr(data[1]);
			let dataTDS = crearArr(data[2]);
			let datatemp = crearArr(data[3]);
			let dataturbidez = crearArr(data[4]);
			let dataec = crearArr(data[5]);
			let dataORP = crearArr(data[6]);
			ph(dataAreay, dataAreax)
			tds(dataTDS, dataAreax)
			temperatura(datatemp, dataAreax)
			turbidez(dataturbidez, dataAreax)
			ec(dataec, dataAreax)
			orp(dataORP, dataAreax)
		}
	});
}

function crearArr(json){
	var parsed = JSON.parse(json);
	var arr = [];
	for(var x in parsed){
		arr.push(parsed[x])
	}
	return arr;
}


function ph(dataAreay, dataAreax){
	new Chart(document.getElementById("line-chart"), {
		type: 'line',
		data: {
			labels: dataAreax,
			datasets: [{ 
				data: dataAreay,
				label: "pH",
				borderColor: "#40FF00",
				fill: false
			},
			]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			title: {
				display: true,
				text: 'Gráfica: pH vs Tiempo'
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					},
					scaleLabel: {
						display: true,
						labelString: 'Value pH',
						fontColor: "#2b3338"
					}
				}],
				xAxes: [{
					scaleLabel: {
						display: true,
						labelString: 'Hora de lectura',
						fontColor: "#2b3338"
					}
				}]
			}
		}
	});
}

function tds(dataTDS, dataAreax){
	new Chart(document.getElementById("line-tds"), {
		type: 'line',
		data: {
			labels: dataAreax,
			datasets: [{ 
				data: dataTDS,
				label: "Total Solidos Disueltos",
				borderColor: "#2DCE47",
				fill: false
			},
			]
		},
		options: {
			title: {
				display: true,
				text: 'Total Solidos Disueltos vs Tiempo'
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: false
					}
				}]
			}
		}
	});
}

function temperatura(datatemp, dataAreax){
	new Chart(document.getElementById("line-temp"), {
		type: 'line',
		data: {
			labels: dataAreax,
			datasets: [{ 
				data: datatemp,
				label: "Temperatura",
				borderColor: "#F34CEA",
				fill: false
			},
			]
		},
		options: {
			title: {
				display: true,
				text: 'Gráfica: Temperatura vs Tiempo'
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
}

function turbidez(dataturbidez, dataAreax){
	new Chart(document.getElementById("line-turbidez"), {
		type: 'line',
		data: {
			labels: dataAreax,
			datasets: [{ 
				data: dataturbidez,
				label: "Turbidez",
				borderColor: "#3e95cd",
				fill: false
			},
			]
		},
		options: {
			title: {
				display: true,
				text: 'Gráfica: Turbidez vs Tiempo'
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: false
					}
				}]
			}
		}
	});
}

function ec(dataec, dataAreax){
	new Chart(document.getElementById("line-ec"), {
		type: 'line',
		data: {
			labels: dataAreax,
			datasets: [{ 
				data: dataec,
				label: "Conductividad electrica",
				borderColor: "#F6EB25",
				fill: false
			},
			]
		},
		options: {
			title: {
				display: true,
				text: 'Gráfica: Conductividad electrica vs Tiempo'
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: false
					}
				}]
			}
		}
	});
}

function orp(dataORP, dataAreax){
	new Chart(document.getElementById("line-orp"), {
		type: 'line',
		data: {
			labels: dataAreax,
			datasets: [{ 
				data: dataORP,
				label: "Potencial de oxidación-reducción",
				borderColor: "#FD9206",
				fill: false
			},
			]
		},
		options: {
			title: {
				display: true,
				text: 'Gráfica: Potencal Redox vs Tiempo'
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
}

