<!-- content panel -->
<div class="main-panel">

    <?php $this->load->view($_NavBar); ?>

    <!-- main area -->
    <div class="main-content">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="widget bg-white">
                    <div class="widget-icon bg-blue pull-left fa fa-file-text">
                    </div>
                    <div class="overflow-hidden">
                        <span class="widget-title"><?= $countSolicitudes ?></span>
                        <span class="widget-subtitle">Solicitudes</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget bg-white">
                    <div class="widget-icon bg-danger pull-left fa fa-tags">
                    </div>
                    <div class="overflow-hidden">
                        <span class="widget-title"><?= $countDescuentos ?></span>
                        <span class="widget-subtitle">Descuentos Agregados</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget bg-white">
                    <div class="widget-icon bg-success pull-left fa fa-credit-card">
                    </div>
                    <div class="overflow-hidden">
                        <span class="widget-title"><?= $countTarjetas ?></span>
                        <span class="widget-subtitle">Tarjetas Registradas</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget bg-white">
                    <div class="widget-icon bg-purple pull-left fa fa-users">
                    </div>
                    <div class="overflow-hidden">
                        <span class="widget-title">9.834</span>
                        <span class="widget-subtitle">Vieron tus descuentos</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="widget bg-primary">
                    <div class="widget-bg-icon">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <div class="widget-details">
                        <?php if (!empty($countTopSolicitudes)) { ?>
                            <span class="block h4 mt0 mb5"><?= $countTopSolicitudes[0]->Cantidad ?> Solicitudes</span>
                            <span>Top de <?= $this->calendar->get_month_name($countTopSolicitudes[0]->Mes) . " " . date("Y"); ?></span>
                        <?php } else { ?>
                            <span class="block h4 mt0 mb5">Sin registro de solicitudes</span>
                            <span>Durante el <?= date("Y"); ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget bg-info">
                    <div class="widget-bg-icon">
                        <i class="fa fa-tags"></i>
                    </div>
                    <div class="widget-details">
                        <?php if (!empty($mejorDescuento)) { ?>
                            <span
                                class="block h4 mt0 mb5"><?= $mejorDescuento[0]->cantidad_desc . "% " . $mejorDescuento[0]->nombre ?></span>
                            <span>Tu mejor descuento</span>
                        <?php } else { ?>
                            <span
                                class="block h4 mt0 mb5">Sin descuentos activos</span>
                            <span><a href="descuento/agregar">Aquí puedes agregar</a></span>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget bg-cyan">
                    <div class="widget-bg-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="widget-details">
                        <span class="block h4 mt0 mb5">CMR - Visa</span>
                        <span>La mas usada</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget bg-blue">
                    <div class="widget-bg-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="widget-details">
                        <span class="block h4 mt0 mb5">32.893</span>
                        <span>Usan tus tarjetas</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="widget bg-white">
                    <h3 class="text-info mt0 mb0 bold">56780</h3>
                    <div class="small text-uppercase">Recent Activities</div>
                    <small class="pt5">Donec ullamcorper nulla non metus auctor.</small>
                </div>
                <div class="widget-chart bg-white no-padding">
                    <div class="absolute tp lt rt p15">
                        <h3 class="mb0 mt0 bold">7,623K</h3>
                        <div class="small text-uppercase">Daily income</div>
                    </div>
                    <div class="absolute tp rt pt15 pr15">
                        <div class="text-success">
                            <i class="fa fa-caret-up"></i>
                            <span>6%</span>
                        </div>
                        <div class="small">+897</div>
                    </div>
                    <div class="rickshaw_graph">
                        <div id="dashboard-rickshaw2" style="height:133px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="widget bg-white">
                    <div class="text-center">
                        <h6 class="text-uppercase">Page Views</h6>
                        <div class="mt15">
                            <h1 class="text-primary">512k+</h1>
                            <div class="flot-line chart-sm" style="height:123px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget-chart bg-white">

                    <div class="row">
                        <div class="col-xs-12">
                            <small class="text-uppercase">Weekly distribution</small>
                            <h4 class="no-margin bold text-success">3,490K</h4>
                        </div>
                    </div>
                    <div class="canvas-holder mt5 mb5">
                        <div class="flot-pie chart-sm" style="height:171px;"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="widget bg-white">
                    <div class="widget-details widget-list">
                        <div class="mb20">
                            <h4 class="no-margin text-uppercase">Sales</h4>
                            <small class="text-uppercase">Weekly projections</small>
                        </div>
                        <a href="javascript:;" class="widget-list-item">
                            <span class="label label-info pull-right">32</span> United States
                        </a>
                        <a href="javascript:;" class="widget-list-item">
                            <span class="label label-danger pull-right">54</span> China
                        </a>

                        <a href="javascript:;" class="widget-list-item">
                            <span class="label label-warning pull-right">45</span> Great Britain
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="widget bg-primary">
                    <div class="widget-bg-icon">
                        <i class="fa fa-bookmark-o"></i>
                    </div>
                    <div class="widget-details">
                        <h4 class="no-margin">4,894K</h4>
                        <span>Parks and recreation</span>
                    </div>
                </div>
                <div class="widget bg-white">

                    <div class="row">
                        <div class="col-xs-4">
                            <h6>
                                Distance travelled
                            </h6>
                            <h1 class="mt0 mb0 bold">
                                4389km
                            </h1>
                            <small class="mb0">
                                Avg 56km/Sec
                            </small>
                        </div>
                        <div class="col-xs-8">
                            <div class="canvas-holder">
                                <div class="flot-bars chart" style="height:90px;"></div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>
    <!-- /main area -->

</div>
<!-- /content panel -->