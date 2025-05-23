<x-app-layout>
    <div class="box rounded " style="margin:0px; padding:0px;">
        <div class="box-header box-header-calendar">
            <x-inicio.header-calendar></x-inicio.header-calendar>
        </div>
        <div class="box-body" style="margin:0px; padding:0px;">
            <x-inicio.targets></x-inicio.targets>
            <x-inicio.charts></x-inicio.charts>
        </div>
    </div>
    @push('scripts')
        <script>
            $(".reload-all").fadeIn(50).html(
                "<img src='/img/reload.svg' width='80px'>"
            );
            // $(".reload-all").fadeOut(50);
            // $(window).on("load", function() {});
            $(".ini-calendar-hide").hide();
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
            var pieChart = new Chart(pieChartCanvas);
            var PieData = [{
                    value: 700,
                    color: '#f56954',
                    highlight: '#f56954',
                    label: 'Chrome'
                },
                {
                    value: 500,
                    color: '#00a65a',
                    highlight: '#00a65a',
                    label: 'IE'
                },
                {
                    value: 400,
                    color: '#f39c12',
                    highlight: '#f39c12',
                    label: 'FireFox'
                },
                {
                    value: 600,
                    color: '#00c0ef',
                    highlight: '#00c0ef',
                    label: 'Safari'
                },
                {
                    value: 300,
                    color: '#3c8dbc',
                    highlight: '#3c8dbc',
                    label: 'Opera'
                },
                {
                    value: 100,
                    color: '#d2d6de',
                    highlight: '#d2d6de',
                    label: 'Navigator'
                }
            ];
            var pieOptions = {
                // Boolean - Whether we should show a stroke on each segment
                segmentShowStroke: true,
                // String - The colour of each segment stroke
                segmentStrokeColor: '#fff',
                // Number - The width of each segment stroke
                segmentStrokeWidth: 1,
                // Number - The percentage of the chart that we cut out of the middle
                percentageInnerCutout: 50, // This is 0 for Pie charts
                // Number - Amount of animation steps
                animationSteps: 100,
                // String - Animation easing effect
                animationEasing: 'easeOutBounce',
                // Boolean - Whether we animate the rotation of the Doughnut
                animateRotate: true,
                // Boolean - Whether we animate scaling the Doughnut from the centre
                animateScale: false,
                // Boolean - whether to make the chart responsive to window resizing
                responsive: true,
                // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: false,
                // String - A legend template
                legendTemplate: '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<segments.length; i++){%><li><span style=\'background-color:<%=segments[i].fillColor%>\'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
                // String - A tooltip template
                tooltipTemplate: '<%=value %> <%=label%> users'
            };
            pieChart.Doughnut(PieData, pieOptions);
        </script>
    @endpush
</x-app-layout>
