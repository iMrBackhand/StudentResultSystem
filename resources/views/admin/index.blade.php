@extends('admin.admin_dashboard')

@section('admin')


<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Main</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">Total Sales</p>
                            <h4 class="mb-2">1452</h4>
                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-primary rounded-3">
                                <i class="ri-shopping-cart-2-line font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->


        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">New Orders</p>
                            <h4 class="mb-2">938</h4>
                            <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-success rounded-3">
                                <i class="mdi mdi-currency-usd font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">New Users</p>
                            <h4 class="mb-2">8246</h4>
                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from previous period</p>
                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-primary rounded-3">
                                <i class="ri-user-3-line font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-truncate font-size-14 mb-2">Unique Visitors</p>
                            <h4 class="mb-2">29670</h4>
                            <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
                        </div>
                        <div class="avatar-sm">
                            <span class="avatar-title bg-light text-success rounded-3">
                                <i class="mdi mdi-currency-btc font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
</div>
{{-- graph  --}}
<div class="card">
    <div class="card-body pb-0">
        <div class="float-end d-none d-md-inline-block">
            <div class="dropdown card-header-dropdown">
                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Export</a>
                    <a class="dropdown-item" href="#">Import</a>
                    <a class="dropdown-item" href="#">Download Report</a>
                </div>
            </div>
        </div>
        <h4 class="card-title mb-4">Email Sent</h4>

        <div class="text-center pt-3">
            <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="d-inline-flex">
                        <h5 class="me-2">25,117</h5>
                        <div class="text-success font-size-12">
                            <i class="mdi mdi-menu-up font-size-14"> </i>2.2 %
                        </div>
                    </div>
                    <p class="text-muted text-truncate mb-0">Marketplace</p>
                </div><!-- end col -->
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="d-inline-flex">
                        <h5 class="me-2">$34,856</h5>
                        <div class="text-success font-size-12">
                            <i class="mdi mdi-menu-up font-size-14"> </i>1.2 %
                        </div>
                    </div>
                    <p class="text-muted text-truncate mb-0">Last Week</p>
                </div><!-- end col -->
                <div class="col-sm-4">
                    <div class="d-inline-flex">
                        <h5 class="me-2">$18,225</h5>
                        <div class="text-success font-size-12">
                            <i class="mdi mdi-menu-up font-size-14"> </i>1.7 %
                        </div>
                    </div>
                    <p class="text-muted text-truncate mb-0">Last Month</p>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>
    <div class="card-body py-0 px-2" style="position: relative;">
        <div id="area_chart" class="apex-charts" dir="ltr" style="min-height: 365px;"><div id="apexcharts7vemxc6og" class="apexcharts-canvas apexcharts7vemxc6og apexcharts-theme-light" style="width: 478px; height: 350px;"><svg id="SvgjsSvg2732" width="478" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2734" class="apexcharts-inner apexcharts-graphical" transform="translate(50.79997253417969, 40)"><defs id="SvgjsDefs2733"><clipPath id="gridRectMask7vemxc6og"><rect id="SvgjsRect2740" width="417.7937774658203" height="261.11199999999997" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask7vemxc6og"><rect id="SvgjsRect2741" width="415.7937774658203" height="263.11199999999997" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2746" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2747" stop-opacity="0.65" stop-color="rgba(15,156,243,0.65)" offset="0"></stop><stop id="SvgjsStop2748" stop-opacity="0.5" stop-color="rgba(135,206,249,0.5)" offset="1"></stop><stop id="SvgjsStop2749" stop-opacity="0.5" stop-color="rgba(135,206,249,0.5)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2755" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2756" stop-opacity="0.65" stop-color="rgba(111,208,136,0.65)" offset="0"></stop><stop id="SvgjsStop2757" stop-opacity="0.5" stop-color="rgba(183,232,196,0.5)" offset="1"></stop><stop id="SvgjsStop2758" stop-opacity="0.5" stop-color="rgba(183,232,196,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine2739" x1="0" y1="0" x2="0" y2="259.11199999999997" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="259.11199999999997" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2761" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2762" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2764" font-family="Helvetica, Arial, sans-serif" x="0" y="288.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2765">2015</tspan><title>2015</title></text><text id="SvgjsText2767" font-family="Helvetica, Arial, sans-serif" x="68.63229624430338" y="288.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2768">2016</tspan><title>2016</title></text><text id="SvgjsText2770" font-family="Helvetica, Arial, sans-serif" x="137.26459248860678" y="288.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2771">2017</tspan><title>2017</title></text><text id="SvgjsText2773" font-family="Helvetica, Arial, sans-serif" x="205.89688873291018" y="288.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2774">2018</tspan><title>2018</title></text><text id="SvgjsText2776" font-family="Helvetica, Arial, sans-serif" x="274.5291849772136" y="288.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2777">2019</tspan><title>2019</title></text><text id="SvgjsText2779" font-family="Helvetica, Arial, sans-serif" x="343.161481221517" y="288.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2780">2020</tspan><title>2020</title></text><text id="SvgjsText2782" font-family="Helvetica, Arial, sans-serif" x="411.7937774658204" y="288.11199999999997" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2783">2021</tspan><title>2021</title></text></g><line id="SvgjsLine2784" x1="0" y1="260.11199999999997" x2="411.7937774658203" y2="260.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG2797" class="apexcharts-grid"><g id="SvgjsG2798" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2814" x1="0" y1="0" x2="411.7937774658203" y2="0" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2815" x1="0" y1="64.77799999999999" x2="411.7937774658203" y2="64.77799999999999" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2816" x1="0" y1="129.55599999999998" x2="411.7937774658203" y2="129.55599999999998" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2817" x1="0" y1="194.33399999999997" x2="411.7937774658203" y2="194.33399999999997" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2818" x1="0" y1="259.11199999999997" x2="411.7937774658203" y2="259.11199999999997" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2799" class="apexcharts-gridlines-vertical"><line id="SvgjsLine2800" x1="0" y1="0" x2="0" y2="259.11199999999997" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2802" x1="68.63229624430339" y1="0" x2="68.63229624430339" y2="259.11199999999997" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2804" x1="137.26459248860678" y1="0" x2="137.26459248860678" y2="259.11199999999997" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2806" x1="205.89688873291016" y1="0" x2="205.89688873291016" y2="259.11199999999997" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2808" x1="274.52918497721356" y1="0" x2="274.52918497721356" y2="259.11199999999997" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2810" x1="343.16148122151696" y1="0" x2="343.16148122151696" y2="259.11199999999997" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2812" x1="411.79377746582037" y1="0" x2="411.79377746582037" y2="259.11199999999997" stroke="#90a4ae" stroke-dasharray="0" class="apexcharts-gridline"></line></g><line id="SvgjsLine2801" x1="0" y1="260.11199999999997" x2="0" y2="266.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2803" x1="68.63229624430339" y1="260.11199999999997" x2="68.63229624430339" y2="266.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2805" x1="137.26459248860678" y1="260.11199999999997" x2="137.26459248860678" y2="266.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2807" x1="205.89688873291016" y1="260.11199999999997" x2="205.89688873291016" y2="266.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2809" x1="274.52918497721356" y1="260.11199999999997" x2="274.52918497721356" y2="266.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2811" x1="343.16148122151696" y1="260.11199999999997" x2="343.16148122151696" y2="266.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2813" x1="411.79377746582037" y1="260.11199999999997" x2="411.79377746582037" y2="266.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2820" x1="0" y1="259.11199999999997" x2="411.7937774658203" y2="259.11199999999997" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2819" x1="0" y1="1" x2="0" y2="259.11199999999997" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2742" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2743" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2750" d="M 0 259.11199999999997L 0 259.11199999999997C 24.021303685506187 259.11199999999997 44.61099255879721 142.5116 68.63229624430339 142.5116C 92.65359992980957 142.5116 113.2432888031006 220.24519999999995 137.26459248860678 220.24519999999995C 161.28589617411296 220.24519999999995 181.87558504740397 116.60039999999998 205.89688873291016 116.60039999999998C 229.91819241841634 116.60039999999998 250.50788129170738 204.05069999999998 274.52918497721356 204.05069999999998C 298.5504886627197 204.05069999999998 319.14017753601075 136.03379999999999 343.1614812215169 136.03379999999999C 367.1827849070231 136.03379999999999 387.7724737803141 213.76739999999998 411.7937774658203 213.76739999999998C 411.7937774658203 213.76739999999998 411.7937774658203 213.76739999999998 411.7937774658203 259.11199999999997M 411.7937774658203 213.76739999999998z" fill="url(#SvgjsLinearGradient2746)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask7vemxc6og)" pathTo="M 0 259.11199999999997L 0 259.11199999999997C 24.021303685506187 259.11199999999997 44.61099255879721 142.5116 68.63229624430339 142.5116C 92.65359992980957 142.5116 113.2432888031006 220.24519999999995 137.26459248860678 220.24519999999995C 161.28589617411296 220.24519999999995 181.87558504740397 116.60039999999998 205.89688873291016 116.60039999999998C 229.91819241841634 116.60039999999998 250.50788129170738 204.05069999999998 274.52918497721356 204.05069999999998C 298.5504886627197 204.05069999999998 319.14017753601075 136.03379999999999 343.1614812215169 136.03379999999999C 367.1827849070231 136.03379999999999 387.7724737803141 213.76739999999998 411.7937774658203 213.76739999999998C 411.7937774658203 213.76739999999998 411.7937774658203 213.76739999999998 411.7937774658203 259.11199999999997M 411.7937774658203 213.76739999999998z" pathFrom="M -1 259.11199999999997L -1 259.11199999999997L 68.63229624430339 259.11199999999997L 137.26459248860678 259.11199999999997L 205.89688873291016 259.11199999999997L 274.52918497721356 259.11199999999997L 343.1614812215169 259.11199999999997L 411.7937774658203 259.11199999999997"></path><path id="SvgjsPath2751" d="M 0 259.11199999999997C 24.021303685506187 259.11199999999997 44.61099255879721 142.5116 68.63229624430339 142.5116C 92.65359992980957 142.5116 113.2432888031006 220.24519999999995 137.26459248860678 220.24519999999995C 161.28589617411296 220.24519999999995 181.87558504740397 116.60039999999998 205.89688873291016 116.60039999999998C 229.91819241841634 116.60039999999998 250.50788129170738 204.05069999999998 274.52918497721356 204.05069999999998C 298.5504886627197 204.05069999999998 319.14017753601075 136.03379999999999 343.1614812215169 136.03379999999999C 367.1827849070231 136.03379999999999 387.7724737803141 213.76739999999998 411.7937774658203 213.76739999999998" fill="none" fill-opacity="1" stroke="#0f9cf3" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask7vemxc6og)" pathTo="M 0 259.11199999999997C 24.021303685506187 259.11199999999997 44.61099255879721 142.5116 68.63229624430339 142.5116C 92.65359992980957 142.5116 113.2432888031006 220.24519999999995 137.26459248860678 220.24519999999995C 161.28589617411296 220.24519999999995 181.87558504740397 116.60039999999998 205.89688873291016 116.60039999999998C 229.91819241841634 116.60039999999998 250.50788129170738 204.05069999999998 274.52918497721356 204.05069999999998C 298.5504886627197 204.05069999999998 319.14017753601075 136.03379999999999 343.1614812215169 136.03379999999999C 367.1827849070231 136.03379999999999 387.7724737803141 213.76739999999998 411.7937774658203 213.76739999999998" pathFrom="M -1 259.11199999999997L -1 259.11199999999997L 68.63229624430339 259.11199999999997L 137.26459248860678 259.11199999999997L 205.89688873291016 259.11199999999997L 274.52918497721356 259.11199999999997L 343.1614812215169 259.11199999999997L 411.7937774658203 259.11199999999997"></path><g id="SvgjsG2744" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2826" r="0" cx="0" cy="0" class="apexcharts-marker woa5lejq8 no-pointer-events" stroke="#ffffff" fill="#0f9cf3" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2752" class="apexcharts-series" seriesName="series2" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath2759" d="M 0 259.11199999999997L 0 259.11199999999997C 24.021303685506187 259.11199999999997 44.61099255879721 249.39529999999996 68.63229624430339 249.39529999999996C 92.65359992980957 249.39529999999996 113.2432888031006 97.16699999999997 137.26459248860678 97.16699999999997C 161.28589617411296 97.16699999999997 181.87558504740397 245.50861999999998 205.89688873291016 245.50861999999998C 229.91819241841634 245.50861999999998 250.50788129170738 22.67229999999998 274.52918497721356 22.67229999999998C 298.5504886627197 22.67229999999998 319.14017753601075 181.37839999999997 343.1614812215169 181.37839999999997C 367.1827849070231 181.37839999999997 387.7724737803141 239.67859999999996 411.7937774658203 239.67859999999996C 411.7937774658203 239.67859999999996 411.7937774658203 239.67859999999996 411.7937774658203 259.11199999999997M 411.7937774658203 239.67859999999996z" fill="url(#SvgjsLinearGradient2755)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask7vemxc6og)" pathTo="M 0 259.11199999999997L 0 259.11199999999997C 24.021303685506187 259.11199999999997 44.61099255879721 249.39529999999996 68.63229624430339 249.39529999999996C 92.65359992980957 249.39529999999996 113.2432888031006 97.16699999999997 137.26459248860678 97.16699999999997C 161.28589617411296 97.16699999999997 181.87558504740397 245.50861999999998 205.89688873291016 245.50861999999998C 229.91819241841634 245.50861999999998 250.50788129170738 22.67229999999998 274.52918497721356 22.67229999999998C 298.5504886627197 22.67229999999998 319.14017753601075 181.37839999999997 343.1614812215169 181.37839999999997C 367.1827849070231 181.37839999999997 387.7724737803141 239.67859999999996 411.7937774658203 239.67859999999996C 411.7937774658203 239.67859999999996 411.7937774658203 239.67859999999996 411.7937774658203 259.11199999999997M 411.7937774658203 239.67859999999996z" pathFrom="M -1 259.11199999999997L -1 259.11199999999997L 68.63229624430339 259.11199999999997L 137.26459248860678 259.11199999999997L 205.89688873291016 259.11199999999997L 274.52918497721356 259.11199999999997L 343.1614812215169 259.11199999999997L 411.7937774658203 259.11199999999997"></path><path id="SvgjsPath2760" d="M 0 259.11199999999997C 24.021303685506187 259.11199999999997 44.61099255879721 249.39529999999996 68.63229624430339 249.39529999999996C 92.65359992980957 249.39529999999996 113.2432888031006 97.16699999999997 137.26459248860678 97.16699999999997C 161.28589617411296 97.16699999999997 181.87558504740397 245.50861999999998 205.89688873291016 245.50861999999998C 229.91819241841634 245.50861999999998 250.50788129170738 22.67229999999998 274.52918497721356 22.67229999999998C 298.5504886627197 22.67229999999998 319.14017753601075 181.37839999999997 343.1614812215169 181.37839999999997C 367.1827849070231 181.37839999999997 387.7724737803141 239.67859999999996 411.7937774658203 239.67859999999996" fill="none" fill-opacity="1" stroke="#6fd088" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask7vemxc6og)" pathTo="M 0 259.11199999999997C 24.021303685506187 259.11199999999997 44.61099255879721 249.39529999999996 68.63229624430339 249.39529999999996C 92.65359992980957 249.39529999999996 113.2432888031006 97.16699999999997 137.26459248860678 97.16699999999997C 161.28589617411296 97.16699999999997 181.87558504740397 245.50861999999998 205.89688873291016 245.50861999999998C 229.91819241841634 245.50861999999998 250.50788129170738 22.67229999999998 274.52918497721356 22.67229999999998C 298.5504886627197 22.67229999999998 319.14017753601075 181.37839999999997 343.1614812215169 181.37839999999997C 367.1827849070231 181.37839999999997 387.7724737803141 239.67859999999996 411.7937774658203 239.67859999999996" pathFrom="M -1 259.11199999999997L -1 259.11199999999997L 68.63229624430339 259.11199999999997L 137.26459248860678 259.11199999999997L 205.89688873291016 259.11199999999997L 274.52918497721356 259.11199999999997L 343.1614812215169 259.11199999999997L 411.7937774658203 259.11199999999997"></path><g id="SvgjsG2753" class="apexcharts-series-markers-wrap" data:realIndex="1"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2827" r="0" cx="0" cy="0" class="apexcharts-marker wt1pw1tmi no-pointer-events" stroke="#ffffff" fill="#6fd088" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2745" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2754" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine2821" x1="0" y1="0" x2="411.7937774658203" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2822" x1="0" y1="0" x2="411.7937774658203" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2823" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2824" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2825" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2828" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2829" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect2738" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2785" class="apexcharts-yaxis" rel="0" transform="translate(22.799972534179688, 0)"><g id="SvgjsG2786" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2787" font-family="Helvetica, Arial, sans-serif" x="20" y="41.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2788">400k</tspan></text><text id="SvgjsText2789" font-family="Helvetica, Arial, sans-serif" x="20" y="106.178" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2790">300k</tspan></text><text id="SvgjsText2791" font-family="Helvetica, Arial, sans-serif" x="20" y="170.956" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2792">200k</tspan></text><text id="SvgjsText2793" font-family="Helvetica, Arial, sans-serif" x="20" y="235.73399999999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2794">100k</tspan></text><text id="SvgjsText2795" font-family="Helvetica, Arial, sans-serif" x="20" y="300.51199999999994" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2796">0k</tspan></text></g></g><g id="SvgjsG2735" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 175px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(15, 156, 243);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(111, 208, 136);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 495px; height: 351px;"></div></div><div class="contract-trigger"></div></div></div>
</div>


@endsection
