<template>
    <div>
        <apexcharts type="radialBar" :options="chartOptions" :series="series" class="chart-sparkline chart-sparkline-square"></apexcharts>
    </div>
</template>

<script>
import VueApexCharts from 'vue3-apexcharts'

export default {
    name: 'ChartActivity',
    components: {
        apexcharts: VueApexCharts,
    },
    data: function () {
        return {
      		series: [35],
            chartOptions: {
                chart: {
                    type: "radialBar",
                    fontFamily: 'inherit',
                    height: 40,
                    width: 40,
                    animations: {
                        enabled: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
      		tooltip: {
      			enabled: false,
      		},
      		plotOptions: {
      			radialBar: {
      				hollow: {
      					margin: 0,
      					size: '75%'
      				},
      				track: {
      					margin: 0
      				},
      				dataLabels: {
      					show: false
      				}
      			}
      		},
      		colors: ["#206bc4"],
            },
        }
    },
}
</script>
