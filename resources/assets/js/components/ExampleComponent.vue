<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <canvas ref="canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Chart from 'chart.js'
    export default {
        data () {
            return {
                labels:''
            }
        },
        methods: {
            getData() {
                axios.get('/salary').then((response) => {
                    _.map(response.data, (num, key) => {
                        this.labels = num;
                    });
                    let canvas = this.$refs.canvas.getContext('2d');
                    let chartData = new Chart(canvas, {
                        type: 'line',
                        data: {
                            labels: Object.keys(this.labels),
                            datasets: [{
                                label: 'Salary',
                                data: Object.values(this.labels),
                                /*backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],*/
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                    return chartData;
                }).catch((error) => {

                });


            },
        },
        mounted () {
            this.getData();
        }
    }
</script>
