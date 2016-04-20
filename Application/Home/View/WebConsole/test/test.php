<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
require_once ("../header.php");
?>
<body>
<!--==========================头部================================-->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a href="index.html" class="brand"> <img src="img/logo20.png" alt="Charisma Logo"> <span>Charisma</span></a>
            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <a href="#" data-toggle="dropdown" class="btn dropdown-toggle">
                    <i class="icon-user"></i><span class="hidden-phone"> admin</span>
                    <span class="caret"></span>
                </a>
            </div>
            <!-- user dropdown ends -->
        </div>
    </div>
</div>
<!--==========================头部 end================================-->
<div class="container-fluid">
    <div class="row-fluid">
        <!--======================左侧导航栏================================-->
        <div class="span2 main-menu-span">
            <div class="well nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li class="nav-header hidden-tablet">签约客户管理</li>
                    <li class="" style="margin-left: -2px;">
                        <a class="ajax-link" href="index.html">
                            <i class="icon-home"></i>
                            <span class="hidden-tablet"> Dashboard</span>
                        </a>
                    </li>
                    <li class="" style="margin-left: -2px;">
                        <a class="ajax-link" href="index.html">
                            <i class="icon-camera"></i>
                            <span class="hidden-tablet"> Dashboard</span>
                        </a>
                    </li>
                    <li class="" style="margin-left: -2px;">
                        <a class="ajax-link" href="index.html">
                            <i class="icon-home"></i>
                            <span class="hidden-tablet"> Dashboard</span>
                        </a>
                    </li>
                    <li class="" style="margin-left: -2px;">
                        <a class="ajax-link" href="index.html">
                            <i class="icon-home"></i>
                            <span class="hidden-tablet"> Dashboard</span>
                        </a>
                    </li>
                    <li class="" style="margin-left: -2px;">
                        <a class="ajax-link" href="index.html">
                            <i class="icon-home"></i>
                            <span class="hidden-tablet"> Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--======================左侧导航栏 end================================-->
        <!--======================右侧内容区================================-->
        <div id="content" class="span10">
            <!--======页面路径=======-->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a> <span class="divider">/</span>
                    </li>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                </ul>
            </div>
            <!--======页面路径 end=======-->

            <div class="row-fluid sortable ui-sortable">
                <div class="box span12">
                    <div data-original-title="" class="box-header well">
                        <h2><i class="icon-user"></i> Members</h2>
                    </div>
                    <div class="box-content" style="display: block;">
                        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 222px;" aria-sort="ascending" aria-label="Username: activate to sort column descending">Username</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 193px;" aria-label="Date registered: activate to sort column ascending">Date registered</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 101px;" aria-label="Role: activate to sort column ascending">Role</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 112px;" aria-label="Status: activate to sort column ascending">Status</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 411px;" aria-label="Actions: activate to sort column ascending">Actions</th>
                                </tr>
                                </thead>

                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                <tr class="odd">
                                    <td class="  sorting_1">Abdullah</td>
                                    <td class="center ">2012/02/01</td>
                                    <td class="center ">Staff</td>
                                    <td class="center ">
                                        <span class="label label-important">Banned</span>
                                    </td>
                                    <td class="center ">
                                        <a href="#" class="btn btn-success">
                                            <i class="icon-zoom-in icon-white"></i>
                                            View
                                        </a>
                                        <a href="#" class="btn btn-info">
                                            <i class="icon-edit icon-white"></i>
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            <i class="icon-trash icon-white"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td class="  sorting_1">Abraham</td>
                                    <td class="center ">2012/03/01</td>
                                    <td class="center ">Member</td>
                                    <td class="center ">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center ">
                                        <a href="#" class="btn btn-success">
                                            <i class="icon-zoom-in icon-white"></i>
                                            View
                                        </a>
                                        <a href="#" class="btn btn-info">
                                            <i class="icon-edit icon-white"></i>
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            <i class="icon-trash icon-white"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div>
                                </div>
                                <div class="span12 center">
                                    <div class="dataTables_paginate paging_bootstrap pagination">
                                        <ul>
                                            <li class="prev disabled"><a href="#">← Previous</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li class="next"><a href="#">Next → </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/span-->

            </div>

            <!--========button===========-->
            <div class="box span4">
                <div data-original-title="" class="box-header well">
                    <h2><i class="icon-list"></i> Buttons</h2>
                    <div class="box-icon">
                        <a class="btn btn-setting btn-round" href="#"><i class="icon-cog"></i></a>
                        <a class="btn btn-minimize btn-round" href="#"><i class="icon-chevron-up"></i></a>
                        <a class="btn btn-close btn-round" href="#"><i class="icon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content buttons">
                    <p class="btn-group">
                        <button class="btn">Left</button>
                        <button class="btn">Middle</button>
                        <button class="btn">Right</button>
                    </p>
                    <p>
                        <button class="btn btn-small"><i class="icon-star"></i> Icon button</button>
                        <button class="btn btn-small btn-primary">Small button</button>
                        <button class="btn btn-small btn-danger">Small button</button>
                    </p>
                    <p>
                        <button class="btn btn-small btn-warning">Small button</button>
                        <button class="btn btn-small btn-success">Small button</button>
                        <button class="btn btn-small btn-info">Small button</button>
                    </p>
                    <p>
                        <button class="btn btn-small btn-inverse">Small button</button>
                        <button class="btn btn-large btn-primary btn-round">Round button</button>
                        <button class="btn btn-large btn-round"><i class="icon-ok"></i></button>
                        <button class="btn btn-primary"><i class="icon-edit icon-white"></i></button>
                    </p>
                    <p>
                        <button class="btn btn-mini">Mini button</button>
                        <button class="btn btn-mini btn-primary">Mini button</button>
                        <button class="btn btn-mini btn-danger">Mini button</button>
                        <button class="btn btn-mini btn-warning">Mini button</button>
                    </p>
                    <p>
                        <button class="btn btn-mini btn-info">Mini button</button>
                        <button class="btn btn-mini btn-success">Mini button</button>
                        <button class="btn btn-mini btn-inverse">Mini button</button>
                    </p>
                    <p>
                        <button class="btn btn-large">Large button</button>
                        <button class="btn btn-large btn-primary">Large button</button>
                    </p>
                    <p>
                        <button class="btn btn-large btn-danger">Large button</button>
                        <button class="btn btn-large btn-warning">Large button</button>
                    </p>
                    <p>
                        <button class="btn btn-large btn-success">Large button</button>
                        <button class="btn btn-large btn-info">Large button</button>
                    </p>
                    <p>
                        <button class="btn btn-large btn-inverse">Large button</button>
                    </p>
                    <div class="btn-group">
                        <button class="btn btn-large">Large Dropdown</button>
                        <button data-toggle="dropdown" class="btn btn-large dropdown-toggle"><span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-star"></i> Action</a></li>
                            <li><a href="#"><i class="icon-tag"></i> Another action</a></li>
                            <li><a href="#"><i class="icon-download-alt"></i> Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-tint"></i> Separated link</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!--========button end===========-->





        </div>
        <!--======================右侧内容区 end================================-->
    </div><!--row-fluid end-->
</div><!--container-fluid end-->
</body>
</html>
<script type="text/javascript">
//    alert(1234);
</script>