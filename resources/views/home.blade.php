@extends('master')

@section('content')

<h3 class="page-title">
                     Dashboard
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">KasirHp</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Dashboard
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
<div class="row-fluid">
                <!--<B></B>EGIN METRO STATES-->
                <div class="metro-nav">
                    <div class="metro-nav-block nav-block-orange">
                        <a data-original-title="" href="/databarang">
                            <i class="icon-tasks"></i>
                            <div class="info">{{ $barang }}</div>
                            <div class="status">Data Total Handphone</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-olive">
                        <a data-original-title="" href="/katbar">
                            <i class="icon-tags"></i>
                            <div class="info">{{ $katbarang }}</div>
                            <div class="status">Data Merek Handphone</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-light-purple">
                        <a data-original-title="" href="/ritbar">
                            <i class="icon-shopping-cart"></i>
                            <div class="info">{{ $tbarang }}</div>
                            <div class="status">Data Transaksi Pembelian Hp</div>
                        </a>
                    </div>                                        
                </div>
                <div class="space10"></div>
                <!--END METRO STATES-->
            </div>
             <div class="row-fluid">
                <div class="span6">
                    
                    <div class="widget ">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Doughnut</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div class="text-center">
                              <div id="donut" class="chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- END CHART PORTLET-->
                <!--   -->

            <div class="row-fluid">
                <div class="span7">                   
                                        
                    
                
                
                </div>
            </div>
@endsection

@section('script')

<script type="text/javascript">
var Script = function () {

        var doughnutData = [
            @foreach($chart as $value)
            {
                label: "{{ $value->nama_barang }}",
                data: {{ $value->jumlah_barang }},
                color:"#{{ str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT) }}{{ str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT)}}{{ str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT)}}",
                // nama: 'tes'
            },
            @endforeach
        ];

    var lineChartData = {
        labels : ["","","","","","",""],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                pointColor : "rgba(220,220,220,1)",
                pointStrokeColor : "#fff",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [28,48,40,19,96,27,100]
            }
        ]

    };

    $.plot($("#donut"), doughnutData,
            {
                series: {
                    pie: {
                        innerRadius: 0.5,
                        show: true
                    }
                }
            });
    // $("#doughnut").width = "200";
    //     var myDoughnutChart = new Chart($("#doughnut"), {
    //     type: 'doughnut',
    //     data: doughnutData,
    //     labels: 'asdas'
    // });
    // new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);

}();
</script>

@endsection