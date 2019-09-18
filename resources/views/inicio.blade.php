@extends('main')

@section('script')

	<script type="text/javascript" src="https://www.amcharts.com/lib/3/ammap.js"></script>
		<script type="text/javascript" src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
		<script type="text/javascript">
			AmCharts.makeChart("map",{
					"type": "map",
					"pathToImages": "http://www.amcharts.com/lib/3/images/",
					"addClassNames": true,
					"fontSize": 15,
					"color": "#000000",
					"projection": "mercator",
					"backgroundAlpha": 1,
					"backgroundColor": "rgba(0,0,0,0)",
					"dataProvider": {
						"map": "worldLow",
						"getAreasFromMap": true,
						"images": [
							{
								"top": 40,
								"left": 60,
								"width": 80,
								"height": 40,
								"pixelMapperLogo": false,
								"imageURL": "",
								"url": ""
							}
						],
						"areas": [
							{
								"id": "AR",
								"title": "<img class='imgMap' src='{{ asset('imagenes/paises/ar.png') }}'><br>Argentina<br>+54 92612488819" ,
								"color": "rgba(180,180,180,1)"
							},
							{
								"id": "BR",
								"title": "<img class='imgMap' src='{{ asset('imagenes/paises/br.png') }}'><br>Brazil<br>+54 2634349235",
								"color": "rgba(180,180,180,1)"
							},
							{
								"id": "CL",
								"title": "<img class='imgMap' src='{{ asset('imagenes/paises/cl.png') }}'><br>Chile<br>+56 950836230",
								"color": "rgba(180,180,180,1)"
							},
							{
								"id": "ES",
								"title": "<img class='imgMap' src='{{ asset('imagenes/paises/es.png') }}'><br>Spain<br>",
								"color": "rgba(180,180,180,1)"
							},
							{
								"id": "FR",
								"title": "<img class='imgMap' src='{{ asset('imagenes/paises/fr.png') }}'><br>France<br>+33 6 952294 99",
								"color": "rgba(180,180,180,1)"
							},
							{
								"id": "IT",
								"title": "<img class='imgMap' src='{{ asset('imagenes/paises/it.png') }}'><br>Italy<br>+39 3208251029",
								"color": "rgba(180,180,180,1)"
							},
							{
								"id": "MX",
								"title": "<img class='imgMap' src='{{ asset('imagenes/paises/mx.png') }}'><br>Mexico<br>+54 15525419641",
								"color": "rgba(180,180,180,1)"
							},
							{
								"id": "US",
								"title": "<img class='imgMap' src='{{ asset('imagenes/paises/us.png') }}'><br>United States<br>+1 707 7048335",
								"color": "rgba(180,180,180,1)"
							}
						]
					},
					"balloon": {
						"horizontalPadding": 15,
						"borderAlpha": 0,
						"borderThickness": 1,
						"verticalPadding": 15
					},
					"areasSettings": {
						"color": "rgba(129,129,129,1)",
						"outlineColor": "rgba(0,0,0,1)",
						"rollOverOutlineColor": "rgba(0,0,0,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true,
						"unlistedAreasAlpha": 0,
						"unlistedAreasOutlineAlpha": 0
					},
					"imagesSettings": {
						"alpha": 1,
						"color": "rgba(221,172,80,1)",
						"outlineAlpha": 0,
						"rollOverOutlineAlpha": 0,
						"outlineColor": "rgba(0,0,0,1)",
						"rollOverBrightness": 20,
						"selectedBrightness": 20,
						"selectable": true
					},
					"linesSettings": {
						"color": "rgba(221,172,80,1)",
						"selectable": true,
						"rollOverBrightness": 20,
						"selectedBrightness": 20
					}
				});
		</script>

@endsection

@section('body')

	<div id="map" style="width: 100%; height: 75vh !important;"></div>

@endsection