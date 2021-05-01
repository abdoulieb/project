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
                <h3 class="page-header"><i class="fa fa-laptop"></i> Conputer networking</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="social.php">Social sites</a></li>
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
                                <th><i class="icon_calendar"></i> Project Topic</th>
                                <th><i class="icon_cogs"></i> Student uploaded files</th>
                            </tr>
                            <tr>
                                <td>Abdoulie Bah</td>
                                <td>04 April 2021</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="" title="upload materials">Uploaded files on various Stage of the project</a>
                                        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="" title="Get student's files"><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="" target="_blank" rel="noopener noreferrer" title="proposal file">proposal file</a></li>
                                            <li><a href="" target="_blank" rel="noopener noreferrer" title="Transcript">transcript file</a></li>
                                            <li><a href="" target="_blank" rel="noopener noreferrer" title="flow chart">Flow chart diagram</a></li>
                                            <li><a href="" target="_blank" rel="noopener noreferrer" title="ER">ER diagram</a></li>
                                            <li><a href="" target="_blank" rel="noopener noreferrer" title="DB report file">DB report</a></li>
                                            <li><a href="" target="_blank" rel="noopener noreferrer" title="link">link to the layout</a></li>
                                            <li class="divider"></li>
                                            <li><a href="" target="_blank" rel="noopener noreferrer" title="project report file">Final report</a></li>
                                        </ul>
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
<header class="panel-heading">
                Basic Forms
              </header>
              <div class="panel-body col-md-5 col-sm-offset-4">
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                  </div>
                  <div class="checkbox">
                    <label>
                                          <input type="checkbox"> Check me out
                                      </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
<?php include(ROOT . DS . "core" . DS . "footer.php");
