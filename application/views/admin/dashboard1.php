<!DOCTYPE html>
<html>
    <head>
        <title>Twitter Bootstrap 3 - Template </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('admin/css/bootstrap.css')?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('admin/css/main.css')?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('admin/css/sb-admin.css')?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('admin/css/dataTables.bootstrap.css')?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('admin/css/morris-0.4.3.min.css')?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('admin/css/timeline.css')?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('admin/css/font-awesome.css')?>" >
    </head>
    <admin/body>
        <!-- Navigation bar with drop down box
        ================================================== -->
        <nav style="margin-bottom: 0" role="navigation" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button data-target=".sidebar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">Admin Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="text-center">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="text-center">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="text-center">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- Navigation -->
        
        
        <!-- Left navigation 
        ======================================= -->
        <nav role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse">
                <ul id="side-menu" class="nav">
                    <li class="active">
                        <a href="dashboard"><i class="fa fa-home"></i> Dashbdoard</a>
                    </li>
                    <li>
                        <a href="users.html"><i class="fa fa-group"></i> Users<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="users.html">Edit User</a>
                            </li>
                            <li>
                                <a href="users_view.html">View Users</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="product.html"><i class="fa fa-credit-card"></i> Product<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="product.html">Enter Product</a>
                            </li>
                            <li>
                                <a href="product_view.html">View Products</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="index.html">Morris.js Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                    </li>
                    <li>
                        <a href="seo.html"><i class="fa fa-edit fa-fw"></i> SEO </a>
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- / Left Navigation -->
        
        <!-- wrapper 
        ======================================= -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu pull-right">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart" style="position: relative;"><svg height="387" version="1.1" width="609" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; top: -0.600006px;"><desc>Created with Raphaël 2.1.0</desc><defs/><text style="text-anchor: end; font: 12px sans-serif;" x="56.5" y="352" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M69,352H584" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="56.5" y="270.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">7,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M69,270.25H584" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="56.5" y="188.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">15,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M69,188.5H584" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="56.5" y="106.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">22,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M69,106.75H584" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="56.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">30,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M69,25H584" stroke-width="0.5"/><text style="text-anchor: middle; font: 12px sans-serif;" x="488.9058275530353" y="364.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2012</tspan></text><text style="text-anchor: middle; font: 12px sans-serif;" x="260.4920763505645" y="364.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2011</tspan></text><path style="fill-opacity: 1;" fill="#7cb47c" stroke="none" d="M69,294.0883C83.38667662396841,288.0933,112.16002987190521,275.65105677802944,126.54670649587362,270.1083C140.93990177712521,264.5630317780294,169.72629233962837,257.32396963350783,184.11948762087997,249.7362C198.36275378461852,242.22746963350784,226.8492861120956,211.96280503452243,241.09255227583415,209.7223C255.1728520074933,207.50743003452243,283.3334514708116,230.28516622395236,297.41375120247073,231.91469999999998C311.80042782643915,233.57969122395235,340.573781074376,221.7915762061155,354.9604576983444,222.9004C369.35365297959595,224.00972620611552,398.1400435420992,260.4703031413613,412.53323882335076,240.78730000000002C426.7765049870893,221.30932814136128,455.26303731456636,75.75802426184484,469.5063034783049,66.25650000000002C483.74305098476026,56.75932426184483,512.216545997671,150.86072122523342,526.4532935041263,164.7925C540.8399701280948,178.87099622523343,569.6133233760315,174.921325,584,178.2976L584,352L69,352Z" fill-opacity="1"/><path style="" fill="none" stroke="#4da74d" d="M69,294.0883C83.38667662396841,288.0933,112.16002987190521,275.65105677802944,126.54670649587362,270.1083C140.93990177712521,264.5630317780294,169.72629233962837,257.32396963350783,184.11948762087997,249.7362C198.36275378461852,242.22746963350784,226.8492861120956,211.96280503452243,241.09255227583415,209.7223C255.1728520074933,207.50743003452243,283.3334514708116,230.28516622395236,297.41375120247073,231.91469999999998C311.80042782643915,233.57969122395235,340.573781074376,221.7915762061155,354.9604576983444,222.9004C369.35365297959595,224.00972620611552,398.1400435420992,260.4703031413613,412.53323882335076,240.78730000000002C426.7765049870893,221.30932814136128,455.26303731456636,75.75802426184484,469.5063034783049,66.25650000000002C483.74305098476026,56.75932426184483,512.216545997671,150.86072122523342,526.4532935041263,164.7925C540.8399701280948,178.87099622523343,569.6133233760315,174.921325,584,178.2976" stroke-width="3"/><circle cx="69" cy="294.0883" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="126.54670649587362" cy="270.1083" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="184.11948762087997" cy="249.7362" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="241.09255227583415" cy="209.7223" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="297.41375120247073" cy="231.91469999999998" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="354.9604576983444" cy="222.9004" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="412.53323882335076" cy="240.78730000000002" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="469.5063034783049" cy="66.25650000000002" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="526.4532935041263" cy="164.7925" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="584" cy="178.2976" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><path style="fill-opacity: 1;" fill="#a7b3bc" stroke="none" d="M69,322.9406C83.38667662396841,316.38425,112.16002987190521,302.4568367214043,126.54670649587362,296.7152C140.93990177712521,290.9709617214043,169.72629233962837,280.1363,184.11948762087997,276.9971C198.36275378461852,273.8906,226.8492861120956,274.25793564441886,241.09255227583415,271.7324C255.1728520074933,269.23576064441886,283.3334514708116,260.41142587588735,297.41375120247073,256.90840000000003C311.80042782643915,253.32915087588736,340.573781074376,243.25482113816534,354.9604576983444,243.4033C369.35365297959595,243.55184613816533,398.1400435420992,273.2679303664921,412.53323882335076,258.0965C426.7765049870893,243.08310536649213,455.26303731456636,131.5658870450904,469.5063034783049,122.66399999999999C483.74305098476026,113.7661870450904,512.216545997671,177.55247043953543,526.4532935041263,186.89770000000001C540.8399701280948,196.34134543953544,569.6133233760315,195.08905000000001,584,197.8195L584,352L69,352Z" fill-opacity="1"/><path style="" fill="none" stroke="#7a92a3" d="M69,322.9406C83.38667662396841,316.38425,112.16002987190521,302.4568367214043,126.54670649587362,296.7152C140.93990177712521,290.9709617214043,169.72629233962837,280.1363,184.11948762087997,276.9971C198.36275378461852,273.8906,226.8492861120956,274.25793564441886,241.09255227583415,271.7324C255.1728520074933,269.23576064441886,283.3334514708116,260.41142587588735,297.41375120247073,256.90840000000003C311.80042782643915,253.32915087588736,340.573781074376,243.25482113816534,354.9604576983444,243.4033C369.35365297959595,243.55184613816533,398.1400435420992,273.2679303664921,412.53323882335076,258.0965C426.7765049870893,243.08310536649213,455.26303731456636,131.5658870450904,469.5063034783049,122.66399999999999C483.74305098476026,113.7661870450904,512.216545997671,177.55247043953543,526.4532935041263,186.89770000000001C540.8399701280948,196.34134543953544,569.6133233760315,195.08905000000001,584,197.8195" stroke-width="3"/><circle cx="69" cy="322.9406" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="126.54670649587362" cy="296.7152" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="184.11948762087997" cy="276.9971" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="241.09255227583415" cy="271.7324" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="297.41375120247073" cy="256.90840000000003" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="354.9604576983444" cy="243.4033" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="412.53323882335076" cy="258.0965" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="469.5063034783049" cy="122.66399999999999" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="526.4532935041263" cy="186.89770000000001" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="584" cy="197.8195" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><path style="fill-opacity: 1;" fill="#2577b5" stroke="none" d="M69,322.9406C83.38667662396841,322.6354,112.16002987190521,324.7792818686297,126.54670649587362,321.7198C140.93990177712521,318.6589318686297,169.72629233962837,299.813767539267,184.11948762087997,298.4592C198.36275378461852,297.11874253926703,226.8492861120956,313.54060431530496,241.09255227583415,310.9397C255.1728520074933,308.36855431530495,283.3334514708116,280.33593198992446,297.41375120247073,277.771C311.80042782643915,275.15025698992446,340.573781074376,287.48623912797285,354.9604576983444,290.197C369.35365297959595,292.9089891279728,398.1400435420992,312.3406638743455,412.53323882335076,299.462C426.7765049870893,286.7174888743455,455.26303731456636,195.6999171606775,469.5063034783049,187.7043C483.74305098476026,179.7123421606775,512.216545997671,226.51073270325668,526.4532935041263,235.51170000000002C540.8399701280948,244.6074577032567,569.6133233760315,253.946325,584,260.0912L584,352L69,352Z" fill-opacity="1"/><path style="" fill="none" stroke="#0b62a4" d="M69,322.9406C83.38667662396841,322.6354,112.16002987190521,324.7792818686297,126.54670649587362,321.7198C140.93990177712521,318.6589318686297,169.72629233962837,299.813767539267,184.11948762087997,298.4592C198.36275378461852,297.11874253926703,226.8492861120956,313.54060431530496,241.09255227583415,310.9397C255.1728520074933,308.36855431530495,283.3334514708116,280.33593198992446,297.41375120247073,277.771C311.80042782643915,275.15025698992446,340.573781074376,287.48623912797285,354.9604576983444,290.197C369.35365297959595,292.9089891279728,398.1400435420992,312.3406638743455,412.53323882335076,299.462C426.7765049870893,286.7174888743455,455.26303731456636,195.6999171606775,469.5063034783049,187.7043C483.74305098476026,179.7123421606775,512.216545997671,226.51073270325668,526.4532935041263,235.51170000000002C540.8399701280948,244.6074577032567,569.6133233760315,253.946325,584,260.0912" stroke-width="3"/><circle cx="69" cy="322.9406" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="126.54670649587362" cy="321.7198" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="184.11948762087997" cy="298.4592" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="241.09255227583415" cy="310.9397" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="297.41375120247073" cy="277.771" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="354.9604576983444" cy="290.197" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="412.53323882335076" cy="299.462" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="469.5063034783049" cy="187.7043" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="526.4532935041263" cy="235.51170000000002" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="584" cy="260.0912" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/></svg><div class="morris-hover morris-default-style" style="left: 64.5467px; top: 217px; display: none;"><div class="morris-hover-row-label">2010 Q2</div><div style="color: #0b62a4" class="morris-hover-point">
  iPhone:
  2,778
</div><div style="color: #7A92A3" class="morris-hover-point">
  iPad:
  2,294
</div><div style="color: #4da74d" class="morris-hover-point">
  iPod Touch:
  2,441
</div></div></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu pull-right">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>3321</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>3320</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>3319</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart" style="position: relative;"><svg height="387" version="1.1" width="396" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.100006px; top: -0.599976px;"><desc>Created with Raphaël 2.1.0</desc><defs/><text style="text-anchor: end; font: 12px sans-serif;" x="36.5" y="352" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M49,352H371" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="36.5" y="270.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">25</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M49,270.25H371" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="36.5" y="188.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">50</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M49,188.5H371" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="36.5" y="106.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">75</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M49,106.75H371" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="36.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">100</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M49,25H371" stroke-width="0.5"/><text style="text-anchor: middle; font: 12px sans-serif;" x="348" y="364.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2012</tspan></text><text style="text-anchor: middle; font: 12px sans-serif;" x="256" y="364.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2010</tspan></text><text style="text-anchor: middle; font: 12px sans-serif;" x="164" y="364.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2008</tspan></text><text style="text-anchor: middle; font: 12px sans-serif;" x="72" y="364.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2006</tspan></text><rect x="54.75" y="25" width="15.75" height="327" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="73.5" y="57.69999999999999" width="15.75" height="294.3" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="100.75" y="106.75" width="15.75" height="245.25" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="119.5" y="139.45" width="15.75" height="212.55" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="146.75" y="188.5" width="15.75" height="163.5" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="165.5" y="221.2" width="15.75" height="130.8" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="192.75" y="106.75" width="15.75" height="245.25" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="211.5" y="139.45" width="15.75" height="212.55" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="238.75" y="188.5" width="15.75" height="163.5" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="257.5" y="221.2" width="15.75" height="130.8" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="284.75" y="106.75" width="15.75" height="245.25" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="303.5" y="139.45" width="15.75" height="212.55" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="330.75" y="25" width="15.75" height="327" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="349.5" y="57.69999999999999" width="15.75" height="294.3" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Timeline
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Timeline Event</h4>
                                            <p>
                                                <small class="text-muted"><i class="fa fa-time"></i> 11 hours ago via Twitter</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Timeline Event</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge danger"><i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Timeline Event</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Timeline Event</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-save"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Timeline Event</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                            <hr>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle" type="button">
                                                    <i class="fa fa-cog"></i> 
                                                    <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#">Action</a>
                                                    </li>
                                                    <li><a href="#">Another action</a>
                                                    </li>
                                                    <li><a href="#">Something else here</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Timeline Event</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-thumbs-up"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Timeline Event</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel justo eu mi scelerisque vulputate. Aliquam in metus eu lectus aliquet egestas.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a class="btn btn-default btn-block" href="#">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"><svg height="387" version="1.1" width="274" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.333313px; top: -0.599976px;"><desc>Created with Raphaël 2.1.0</desc><defs/><path style="opacity: 0;" fill="none" stroke="#0b62a4" d="M137,280.6666666666667A84.66666666666667,84.66666666666667,0,0,0,217.09847945831342,223.43497827428675" stroke-width="2" opacity="0"/><path style="" fill="#0b62a4" stroke="#ffffff" d="M137,283.6666666666667A87.66666666666667,87.66666666666667,0,0,0,219.93661455723006,224.40708380369063L252.4174940226091,235.53229152909034A122,122,0,0,1,137,318Z" stroke-width="3"/><path style="opacity: 1;" fill="none" stroke="#3980b5" d="M217.09847945831342,223.43497827428675A84.66666666666667,84.66666666666667,0,0,0,61.065019305836884,158.5523945836116" stroke-width="2" opacity="1"/><path style="" fill="#3980b5" stroke="#ffffff" d="M219.93661455723006,224.40708380369063A87.66666666666667,87.66666666666667,0,0,0,58.374409753681505,157.2255109271254L23.097528958755333,139.82859187541743A127,127,0,0,1,257.14771918747016,237.15246741143014Z" stroke-width="3"/><path style="opacity: 0;" fill="none" stroke="#679dc6" d="M61.065019305836884,158.5523945836116A84.66666666666667,84.66666666666667,0,0,0,136.97340118263716,280.6666624885342" stroke-width="2" opacity="0"/><path style="" fill="#679dc6" stroke="#ffffff" d="M58.374409753681505,157.2255109271254A87.66666666666667,87.66666666666667,0,0,0,136.97245870485656,283.6666623404901L136.9616725702567,317.9999939795414A122,122,0,0,1,27.581878212347647,142.04006463622775Z" stroke-width="3"/><text style="text-anchor: middle; font: 800 15px &quot;Arial&quot;;" x="137" y="186" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="15px" font-weight="800" transform="matrix(1.5551,0,0,1.5551,-76.049,-108.2449)" stroke-width="0.6430446194225722"><tspan dy="5">In-Store Sales</tspan></text><text style="text-anchor: middle; font: 14px &quot;Arial&quot;;" x="137" y="206" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="14px" transform="matrix(1.7639,0,0,1.7639,-104.6528,-151.25)" stroke-width="0.5669291338582677"><tspan dy="5">30</tspan></text></svg></div>
                            <a class="btn btn-default btn-block" href="#">View Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat
                            <div class="btn-group pull-right">
                                <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img class="img-circle" alt="User Avatar" src="http://placehold.it/50/55C1E7/fff">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> 
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img class="img-circle" alt="User Avatar" src="http://placehold.it/50/FA6F57/fff">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img class="img-circle" alt="User Avatar" src="http://placehold.it/50/55C1E7/fff">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> 
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img class="img-circle" alt="User Avatar" src="http://placehold.it/50/FA6F57/fff">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input type="text" placeholder="Type your message here..." class="form-control input-sm" id="btn-input">
                                <span class="input-group-btn">
                                    <button id="btn-chat" class="btn btn-warning btn-sm">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- / Wrapper -->
        
        <!-- Footer and Modal -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br />
                    <p>Copyright &COPY; SoftHem Tuts.
                        <a data-toggle="modal"  href="#terms">Terms & Conditions</a>
                    </p>
                    <!-- Modal -->
                    <div class="modal fade" id="terms" role="dialog" aria-hidden="true" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>Terms and Conditions</h3>
                                </div>
                                <div class="modal-body">
                                    <p>The text for terms goes here...</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="<?php echo base_url('admin/js/jquery.js')?> "></script>
        <script src="<?php echo base_url('admin/js/bootstrap.js')?> "></script>
        <script src="<?php echo base_url('admin/js/sb-admin.js')?> "></script>
        <script src="<?php echo base_url('admin/js/jquery.metisMenu.js')?> "></script>
        <script src="<?php echo base_url('admin/js/dataTables.bootstrap.js')?> "></script>
        <script src="<?php echo base_url('admin/js/jquery.dataTables.js')?> "></script>
    </body>
</html>
