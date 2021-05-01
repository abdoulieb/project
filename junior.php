<?php
include $_SERVER['DOCUMENT_ROOT'] . "/project/core/db.php";
include(ROOT . DS . "admin" . DS . "components" . DS . "topNav.php");
include(ROOT . DS . "admin" . DS . "components" . DS . "aside.php");
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Student offering Junior project</h3>
                <div class="btn btn-sm btn-primary">Achieve</div><br> <br>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="dashboard.php">Dashboard</a></li>
                    <li><i class="fa fa-home"></i><a href="junior.php">Junior</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Advanced Table
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                            <tr>
                                <th><i class="icon_profile"></i> Full Name</th>
                                <th><i class="icon_calendar"></i> Date</th>
                                <th><i class="icon_mail_alt"></i> Email</th>
                                <th><i class="icon_pin_alt"></i> Field topic</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            <tr>
                                <td>Abdoulie Bah</td>
                                <td>04 April 2021</td>
                                <td>ab21816033@utg.edu.gm</td>
                                <td>Web applications</td>
                                <td>
                                    <div class="btn-group">

                                        <a class="btn btn-primary" data-toogle="tooltip" data-placement="top" title="more details about the student" href="#"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-success" data-toogle="tooltip" data-placement="top" title="permit student" href="#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-primary" data-toogle="tooltip" data-placement="top" title="clik to notify the student" href="#"><i class="icon_mail"></i></a>
                                        <a class="btn btn-danger" data-toogle="tooltip" data-placement="top" title="denied access" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </section>
            </div>
        </div>

    </section>
</section>

<?php include(ROOT . DS . "core" . DS . "footer.php");
