<?php

/* LgmBundle::layout.html.twig */
class __TwigTemplate_ca278530732b659cc3bcf23d9f470320e0da001b11eee9cbd747ecca33fddfdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_960fe531e6931c28a9d5f860076928c76c4cea9b7207f07008aea69d81e8967f = $this->env->getExtension("native_profiler");
        $__internal_960fe531e6931c28a9d5f860076928c76c4cea9b7207f07008aea69d81e8967f->enter($__internal_960fe531e6931c28a9d5f860076928c76c4cea9b7207f07008aea69d81e8967f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LgmBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  
  ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 66
        echo "  
  
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

  <!-- Main Header -->
  <header class=\"main-header\">

    <!-- Logo -->
    <a href=\"index2.html\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
      <!-- Sidebar toggle button-->
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <!-- Messages: style can be found in dropdown.less-->
          <li class=\"dropdown messages-menu\">
            <!-- Menu toggle button -->
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-envelope-o\"></i>
              <span class=\"label label-success\">4</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"header\">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class=\"menu\">
                  <li><!-- start message -->
                    <a href=\"#\">
                      <div class=\"pull-left\">
                        <!-- User Image -->
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class=\"dropdown notifications-menu\">
            <!-- Menu toggle button -->
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-bell-o\"></i>
              <span class=\"label label-warning\">10</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"header\">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class=\"menu\">
                  <li><!-- start notification -->
                    <a href=\"#\">
                      <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class=\"footer\"><a href=\"#\">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class=\"dropdown tasks-menu\">
            <!-- Menu Toggle Button -->
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <i class=\"fa fa-flag-o\"></i>
              <span class=\"label label-danger\">9</span>
            </a>
            <ul class=\"dropdown-menu\">
              <li class=\"header\">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class=\"menu\">
                  <li><!-- Task item -->
                    <a href=\"#\">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class=\"pull-right\">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class=\"progress xs\">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                          <span class=\"sr-only\">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class=\"footer\">
                <a href=\"#\">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class=\"dropdown user user-menu\">
            <!-- Menu Toggle Button -->
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <!-- The user image in the navbar-->
              <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class=\"hidden-xs\">Alexander Pierce</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- The user image in the menu -->
              <li class=\"user-header\">
                <img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class=\"user-body\">
                <div class=\"row\">
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Followers</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Sales</a>
                  </div>
                  <div class=\"col-xs-4 text-center\">
                    <a href=\"#\">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">

      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel\">
        <div class=\"pull-left image\">
          <img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class=\"sidebar-menu\">
        <li class=\"header\">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
               
           
               
        <li class=\"treeview active\">
            <a href=\"#\">
                <i class=\"fa fa-share\"></i>
                <span>Chercheurs</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Chercheur Junior
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Chercheur Senior
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
                
                
            </ul>
        </li>
       <li class=\"treeview active\">
              <a href=\"#\">
                <i class=\"fa fa-share\"></i>
                <span>Equipe de Recherche</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>    
           <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
            </ul>
        </li>
                
       
                       
        
        <li class=\"treeview active\">
            <a href=\"#\">
                <i class=\"fa fa-share\"></i>
                <span>Diplômes</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Habilitation
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Thèse
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Mastère
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
                
            </ul>
        </li>
        
        <li class=\"treeview active\">
            <a href=\"#\">
                <i class=\"fa fa-share\"></i>
                <span>Productions Scientifiques</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Articles
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Communictaions
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Ouvrages
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </li>
        
        <li class=\"treeview active\">
            <a href=\"#\">
                <i class=\"fa fa-share\"></i>
                <span>Soutenances</span>
                <span class=\"pull-right-container\">
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </span>
            </a>
            <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Habilitations
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Thèses
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"#\">
                        <i class=\"fa fa-circle-o\"></i>
                        Mastères
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Ajouter
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i>
                                Lister
                            </a>
                        </li>
                        
                    </ul>
                </li>
                
            </ul>
        </li>
        
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
        <li class=\"active\">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        
        
";
        // line 673
        $this->displayBlock('content', $context, $blocks);
        // line 674
        echo "      <!-- Your Page Content Here -->

       
       
           
      
      
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href=\"#\">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
      <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
      <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
      <!-- Home tab content -->
      <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
        <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript::;\">
              <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript::;\">
              <h4 class=\"control-sidebar-subheading\">
                Custom Template Design
                <span class=\"pull-right-container\">
                  <span class=\"label label-danger pull-right\">70%</span>
                </span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
        <form method=\"post\">
          <h3 class=\"control-sidebar-heading\">General Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Report panel usage
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src=\"";
        // line 779
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 783
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

";
        // line 790
        $this->displayBlock('js', $context, $blocks);
        // line 793
        echo "

</body>
</html>
";
        
        $__internal_960fe531e6931c28a9d5f860076928c76c4cea9b7207f07008aea69d81e8967f->leave($__internal_960fe531e6931c28a9d5f860076928c76c4cea9b7207f07008aea69d81e8967f_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6dff0a2ce4d767161f318624b845a05a919767244a2aa0c0f4227c2ea760c2e2 = $this->env->getExtension("native_profiler");
        $__internal_6dff0a2ce4d767161f318624b845a05a919767244a2aa0c0f4227c2ea760c2e2->enter($__internal_6dff0a2ce4d767161f318624b845a05a919767244a2aa0c0f4227c2ea760c2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">
  
  
  
      <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- DataTables -->
  <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
      
      
      
      
  <!-- jQuery 2.2.3 -->
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- DataTables -->

<!-- SlimScroll -->
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<!-- page script -->

  
  ";
        
        $__internal_6dff0a2ce4d767161f318624b845a05a919767244a2aa0c0f4227c2ea760c2e2->leave($__internal_6dff0a2ce4d767161f318624b845a05a919767244a2aa0c0f4227c2ea760c2e2_prof);

    }

    // line 673
    public function block_content($context, array $blocks = array())
    {
        $__internal_9bdf475e2af613d3f66c70482381efc86be45ef0c9ad0c92d69f079656fe445e = $this->env->getExtension("native_profiler");
        $__internal_9bdf475e2af613d3f66c70482381efc86be45ef0c9ad0c92d69f079656fe445e->enter($__internal_9bdf475e2af613d3f66c70482381efc86be45ef0c9ad0c92d69f079656fe445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9bdf475e2af613d3f66c70482381efc86be45ef0c9ad0c92d69f079656fe445e->leave($__internal_9bdf475e2af613d3f66c70482381efc86be45ef0c9ad0c92d69f079656fe445e_prof);

    }

    // line 790
    public function block_js($context, array $blocks = array())
    {
        $__internal_99ec3a891bfe00e3c251c9875a3536e6af5db5c1f20ea6278799c678442a9712 = $this->env->getExtension("native_profiler");
        $__internal_99ec3a891bfe00e3c251c9875a3536e6af5db5c1f20ea6278799c678442a9712->enter($__internal_99ec3a891bfe00e3c251c9875a3536e6af5db5c1f20ea6278799c678442a9712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 791
        echo "
";
        
        $__internal_99ec3a891bfe00e3c251c9875a3536e6af5db5c1f20ea6278799c678442a9712->leave($__internal_99ec3a891bfe00e3c251c9875a3536e6af5db5c1f20ea6278799c678442a9712_prof);

    }

    public function getTemplateName()
    {
        return "LgmBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  924 => 791,  918 => 790,  907 => 673,  895 => 61,  890 => 59,  885 => 57,  880 => 55,  873 => 51,  868 => 49,  859 => 43,  853 => 40,  848 => 38,  839 => 32,  832 => 28,  824 => 23,  815 => 17,  811 => 15,  805 => 14,  794 => 793,  792 => 790,  782 => 783,  777 => 781,  772 => 779,  665 => 674,  663 => 673,  264 => 277,  211 => 227,  201 => 220,  114 => 136,  42 => 66,  40 => 14,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--*/
/* This is a starter template page. Use this page to start your new project from*/
/* scratch. This page gets rid of all links and provides the needed markup only.*/
/* -->*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <title>AdminLTE 2 | Starter</title>*/
/*   <!-- Tell the browser to be responsive to screen width -->*/
/*   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*   */
/*   {% block stylesheets %}*/
/*   */
/*   <!-- Bootstrap 3.3.6 -->*/
/*   <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css')}}">*/
/*   <!-- Font Awesome -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*   <!-- Ionicons -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">*/
/*   <!-- Theme style -->*/
/*   <link rel="stylesheet" href="{{ asset('public/dist/css/AdminLTE.min.css')}}">*/
/*   <!-- AdminLTE Skins. We have chosen the skin-blue for this starter*/
/*         page. However, you can choose any other skin. Make sure you*/
/*         apply the skin class to the body tag so the changes take effect.*/
/*   -->*/
/*   <link rel="stylesheet" href="{{ asset('public/dist/css/skins/skin-blue.min.css')}}">*/
/*   */
/*   */
/*   */
/*       <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css')}}">*/
/*   <!-- Font Awesome -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*   <!-- Ionicons -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">*/
/*   <!-- DataTables -->*/
/*   <link rel="stylesheet" href="{{ asset('public/plugins/datatables/dataTables.bootstrap.css')}}">*/
/*   <!-- Theme style -->*/
/*   <link rel="stylesheet" href="{{ asset('public/dist/css/AdminLTE.min.css')}}">*/
/*   <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*        folder instead of downloading all of them to reduce the load. -->*/
/*   <link rel="stylesheet" href="{{ asset('public/dist/css/skins/_all-skins.min.css')}}">*/
/*       */
/*       */
/*       */
/*       */
/*   <!-- jQuery 2.2.3 -->*/
/* <script src="{{ asset('public/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>*/
/* <!-- Bootstrap 3.3.6 -->*/
/* <script src="{{ asset('public/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* <!-- DataTables -->*/
/* */
/* <!-- SlimScroll -->*/
/* <script src="{{ asset('public/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>*/
/* <!-- FastClick -->*/
/* <script src="{{ asset('public/plugins/fastclick/fastclick.js')}}"></script>*/
/* <!-- AdminLTE App -->*/
/* <script src="{{ asset('public/dist/js/app.min.js')}}"></script>*/
/* <!-- AdminLTE for demo purposes -->*/
/* <script src="{{ asset('public/dist/js/demo.js')}}"></script>*/
/* <!-- page script -->*/
/* */
/*   */
/*   {% endblock %}*/
/*   */
/*   */
/*   */
/* */
/*   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*   <!--[if lt IE 9]>*/
/*   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*   <![endif]-->*/
/* </head>*/
/* <!--*/
/* BODY TAG OPTIONS:*/
/* =================*/
/* Apply one or more of the following classes to get the*/
/* desired effect*/
/* |---------------------------------------------------------|*/
/* | SKINS         | skin-blue                               |*/
/* |               | skin-black                              |*/
/* |               | skin-purple                             |*/
/* |               | skin-yellow                             |*/
/* |               | skin-red                                |*/
/* |               | skin-green                              |*/
/* |---------------------------------------------------------|*/
/* |LAYOUT OPTIONS | fixed                                   |*/
/* |               | layout-boxed                            |*/
/* |               | layout-top-nav                          |*/
/* |               | sidebar-collapse                        |*/
/* |               | sidebar-mini                            |*/
/* |---------------------------------------------------------|*/
/* -->*/
/* <body class="hold-transition skin-blue sidebar-mini">*/
/* <div class="wrapper">*/
/* */
/*   <!-- Main Header -->*/
/*   <header class="main-header">*/
/* */
/*     <!-- Logo -->*/
/*     <a href="index2.html" class="logo">*/
/*       <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*       <span class="logo-mini"><b>A</b>LT</span>*/
/*       <!-- logo for regular state and mobile devices -->*/
/*       <span class="logo-lg"><b>Admin</b>LTE</span>*/
/*     </a>*/
/* */
/*     <!-- Header Navbar -->*/
/*     <nav class="navbar navbar-static-top" role="navigation">*/
/*       <!-- Sidebar toggle button-->*/
/*       <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*       </a>*/
/*       <!-- Navbar Right Menu -->*/
/*       <div class="navbar-custom-menu">*/
/*         <ul class="nav navbar-nav">*/
/*           <!-- Messages: style can be found in dropdown.less-->*/
/*           <li class="dropdown messages-menu">*/
/*             <!-- Menu toggle button -->*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <i class="fa fa-envelope-o"></i>*/
/*               <span class="label label-success">4</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <li class="header">You have 4 messages</li>*/
/*               <li>*/
/*                 <!-- inner menu: contains the messages -->*/
/*                 <ul class="menu">*/
/*                   <li><!-- start message -->*/
/*                     <a href="#">*/
/*                       <div class="pull-left">*/
/*                         <!-- User Image -->*/
/*                         <img src="{{ asset('public/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*                       </div>*/
/*                       <!-- Message title and timestamp -->*/
/*                       <h4>*/
/*                         Support Team*/
/*                         <small><i class="fa fa-clock-o"></i> 5 mins</small>*/
/*                       </h4>*/
/*                       <!-- The message -->*/
/*                       <p>Why not buy a new awesome theme?</p>*/
/*                     </a>*/
/*                   </li>*/
/*                   <!-- end message -->*/
/*                 </ul>*/
/*                 <!-- /.menu -->*/
/*               </li>*/
/*               <li class="footer"><a href="#">See All Messages</a></li>*/
/*             </ul>*/
/*           </li>*/
/*           <!-- /.messages-menu -->*/
/* */
/*           <!-- Notifications Menu -->*/
/*           <li class="dropdown notifications-menu">*/
/*             <!-- Menu toggle button -->*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <i class="fa fa-bell-o"></i>*/
/*               <span class="label label-warning">10</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <li class="header">You have 10 notifications</li>*/
/*               <li>*/
/*                 <!-- Inner Menu: contains the notifications -->*/
/*                 <ul class="menu">*/
/*                   <li><!-- start notification -->*/
/*                     <a href="#">*/
/*                       <i class="fa fa-users text-aqua"></i> 5 new members joined today*/
/*                     </a>*/
/*                   </li>*/
/*                   <!-- end notification -->*/
/*                 </ul>*/
/*               </li>*/
/*               <li class="footer"><a href="#">View all</a></li>*/
/*             </ul>*/
/*           </li>*/
/*           <!-- Tasks Menu -->*/
/*           <li class="dropdown tasks-menu">*/
/*             <!-- Menu Toggle Button -->*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <i class="fa fa-flag-o"></i>*/
/*               <span class="label label-danger">9</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <li class="header">You have 9 tasks</li>*/
/*               <li>*/
/*                 <!-- Inner menu: contains the tasks -->*/
/*                 <ul class="menu">*/
/*                   <li><!-- Task item -->*/
/*                     <a href="#">*/
/*                       <!-- Task title and progress text -->*/
/*                       <h3>*/
/*                         Design some buttons*/
/*                         <small class="pull-right">20%</small>*/
/*                       </h3>*/
/*                       <!-- The progress bar -->*/
/*                       <div class="progress xs">*/
/*                         <!-- Change the css width attribute to simulate progress -->*/
/*                         <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">*/
/*                           <span class="sr-only">20% Complete</span>*/
/*                         </div>*/
/*                       </div>*/
/*                     </a>*/
/*                   </li>*/
/*                   <!-- end task item -->*/
/*                 </ul>*/
/*               </li>*/
/*               <li class="footer">*/
/*                 <a href="#">View all tasks</a>*/
/*               </li>*/
/*             </ul>*/
/*           </li>*/
/*           <!-- User Account Menu -->*/
/*           <li class="dropdown user user-menu">*/
/*             <!-- Menu Toggle Button -->*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <!-- The user image in the navbar-->*/
/*               <img src="{{ asset('public/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">*/
/*               <!-- hidden-xs hides the username on small devices so only the image appears. -->*/
/*               <span class="hidden-xs">Alexander Pierce</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <!-- The user image in the menu -->*/
/*               <li class="user-header">*/
/*                 <img src="{{ asset('public/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/* */
/*                 <p>*/
/*                   Alexander Pierce - Web Developer*/
/*                   <small>Member since Nov. 2012</small>*/
/*                 </p>*/
/*               </li>*/
/*               <!-- Menu Body -->*/
/*               <li class="user-body">*/
/*                 <div class="row">*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <a href="#">Followers</a>*/
/*                   </div>*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <a href="#">Sales</a>*/
/*                   </div>*/
/*                   <div class="col-xs-4 text-center">*/
/*                     <a href="#">Friends</a>*/
/*                   </div>*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/*               </li>*/
/*               <!-- Menu Footer-->*/
/*               <li class="user-footer">*/
/*                 <div class="pull-left">*/
/*                   <a href="#" class="btn btn-default btn-flat">Profile</a>*/
/*                 </div>*/
/*                 <div class="pull-right">*/
/*                   <a href="#" class="btn btn-default btn-flat">Sign out</a>*/
/*                 </div>*/
/*               </li>*/
/*             </ul>*/
/*           </li>*/
/*           <!-- Control Sidebar Toggle Button -->*/
/*           <li>*/
/*             <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/*   </header>*/
/*   <!-- Left side column. contains the logo and sidebar -->*/
/*   <aside class="main-sidebar">*/
/* */
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar">*/
/* */
/*       <!-- Sidebar user panel (optional) -->*/
/*       <div class="user-panel">*/
/*         <div class="pull-left image">*/
/*           <img src="{{ asset('public/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*         </div>*/
/*         <div class="pull-left info">*/
/*           <p>Alexander Pierce</p>*/
/*           <!-- Status -->*/
/*           <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <!-- search form (Optional) -->*/
/*       <form action="#" method="get" class="sidebar-form">*/
/*         <div class="input-group">*/
/*           <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>*/
/*                 </button>*/
/*               </span>*/
/*         </div>*/
/*       </form>*/
/*       <!-- /.search form -->*/
/* */
/*       <!-- Sidebar Menu -->*/
/*       <ul class="sidebar-menu">*/
/*         <li class="header">HEADER</li>*/
/*         <!-- Optionally, you can add icons to the links -->*/
/*                */
/*            */
/*                */
/*         <li class="treeview active">*/
/*             <a href="#">*/
/*                 <i class="fa fa-share"></i>*/
/*                 <span>Chercheurs</span>*/
/*                 <span class="pull-right-container">*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </span>*/
/*             </a>*/
/*             <ul class="treeview-menu menu-open" style="display: none;">*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Chercheur Junior*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Chercheur Senior*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*                 */
/*                 */
/*             </ul>*/
/*         </li>*/
/*        <li class="treeview active">*/
/*               <a href="#">*/
/*                 <i class="fa fa-share"></i>*/
/*                 <span>Equipe de Recherche</span>*/
/*                 <span class="pull-right-container">*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </span>*/
/*             </a>    */
/*            <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*             </ul>*/
/*         </li>*/
/*                 */
/*        */
/*                        */
/*         */
/*         <li class="treeview active">*/
/*             <a href="#">*/
/*                 <i class="fa fa-share"></i>*/
/*                 <span>Diplômes</span>*/
/*                 <span class="pull-right-container">*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </span>*/
/*             </a>*/
/*             <ul class="treeview-menu menu-open" style="display: none;">*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Habilitation*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Thèse*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Mastère*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*                 */
/*             </ul>*/
/*         </li>*/
/*         */
/*         <li class="treeview active">*/
/*             <a href="#">*/
/*                 <i class="fa fa-share"></i>*/
/*                 <span>Productions Scientifiques</span>*/
/*                 <span class="pull-right-container">*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </span>*/
/*             </a>*/
/*             <ul class="treeview-menu menu-open" style="display: none;">*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Articles*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Communictaions*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Ouvrages*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/*         */
/*         <li class="treeview active">*/
/*             <a href="#">*/
/*                 <i class="fa fa-share"></i>*/
/*                 <span>Soutenances</span>*/
/*                 <span class="pull-right-container">*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </span>*/
/*             </a>*/
/*             <ul class="treeview-menu menu-open" style="display: none;">*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Habilitations*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Thèses*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-circle-o"></i>*/
/*                         Mastères*/
/*                         <span class="pull-right-container">*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </span>*/
/*                     </a>*/
/*                     <ul class="treeview-menu menu-open" style="display: none;">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Ajouter*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-circle-o"></i>*/
/*                                 Lister*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </li>*/
/*                 */
/*             </ul>*/
/*         </li>*/
/*         */
/*         */
/*       </ul>*/
/*       <!-- /.sidebar-menu -->*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/*   </aside>*/
/* */
/*   <!-- Content Wrapper. Contains page content -->*/
/*   <div class="content-wrapper">*/
/*     <!-- Content Header (Page header) -->*/
/*     <section class="content-header">*/
/*       <h1>*/
/*         Page Header*/
/*         <small>Optional description</small>*/
/*       </h1>*/
/*       <ol class="breadcrumb">*/
/*         <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>*/
/*         <li class="active">Here</li>*/
/*       </ol>*/
/*     </section>*/
/* */
/*     <!-- Main content -->*/
/*     <section class="content">*/
/*         */
/*         */
/* {% block content %}{% endblock %}*/
/*       <!-- Your Page Content Here -->*/
/* */
/*        */
/*        */
/*            */
/*       */
/*       */
/*       */
/*     </section>*/
/*     <!-- /.content -->*/
/*   </div>*/
/*   <!-- /.content-wrapper -->*/
/* */
/*   <!-- Main Footer -->*/
/*   <footer class="main-footer">*/
/*     <!-- To the right -->*/
/*     <div class="pull-right hidden-xs">*/
/*       Anything you want*/
/*     </div>*/
/*     <!-- Default to the left -->*/
/*     <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.*/
/*   </footer>*/
/* */
/*   <!-- Control Sidebar -->*/
/*   <aside class="control-sidebar control-sidebar-dark">*/
/*     <!-- Create the tabs -->*/
/*     <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*       <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/*       <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>*/
/*     </ul>*/
/*     <!-- Tab panes -->*/
/*     <div class="tab-content">*/
/*       <!-- Home tab content -->*/
/*       <div class="tab-pane active" id="control-sidebar-home-tab">*/
/*         <h3 class="control-sidebar-heading">Recent Activity</h3>*/
/*         <ul class="control-sidebar-menu">*/
/*           <li>*/
/*             <a href="javascript::;">*/
/*               <i class="menu-icon fa fa-birthday-cake bg-red"></i>*/
/* */
/*               <div class="menu-info">*/
/*                 <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>*/
/* */
/*                 <p>Will be 23 on April 24th</p>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*         <!-- /.control-sidebar-menu -->*/
/* */
/*         <h3 class="control-sidebar-heading">Tasks Progress</h3>*/
/*         <ul class="control-sidebar-menu">*/
/*           <li>*/
/*             <a href="javascript::;">*/
/*               <h4 class="control-sidebar-subheading">*/
/*                 Custom Template Design*/
/*                 <span class="pull-right-container">*/
/*                   <span class="label label-danger pull-right">70%</span>*/
/*                 </span>*/
/*               </h4>*/
/* */
/*               <div class="progress progress-xxs">*/
/*                 <div class="progress-bar progress-bar-danger" style="width: 70%"></div>*/
/*               </div>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*         <!-- /.control-sidebar-menu -->*/
/* */
/*       </div>*/
/*       <!-- /.tab-pane -->*/
/*       <!-- Stats tab content -->*/
/*       <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>*/
/*       <!-- /.tab-pane -->*/
/*       <!-- Settings tab content -->*/
/*       <div class="tab-pane" id="control-sidebar-settings-tab">*/
/*         <form method="post">*/
/*           <h3 class="control-sidebar-heading">General Settings</h3>*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-sidebar-subheading">*/
/*               Report panel usage*/
/*               <input type="checkbox" class="pull-right" checked>*/
/*             </label>*/
/* */
/*             <p>*/
/*               Some information about this general settings option*/
/*             </p>*/
/*           </div>*/
/*           <!-- /.form-group -->*/
/*         </form>*/
/*       </div>*/
/*       <!-- /.tab-pane -->*/
/*     </div>*/
/*   </aside>*/
/*   <!-- /.control-sidebar -->*/
/*   <!-- Add the sidebar's background. This div must be placed*/
/*        immediately after the control sidebar -->*/
/*   <div class="control-sidebar-bg"></div>*/
/* </div>*/
/* <!-- ./wrapper -->*/
/* */
/* <!-- REQUIRED JS SCRIPTS -->*/
/* */
/* <!-- jQuery 2.2.3 -->*/
/* <script src="{{ asset('public/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>*/
/* <!-- Bootstrap 3.3.6 -->*/
/* <script src="{{ asset('public/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* <!-- AdminLTE App -->*/
/* <script src="{{ asset('public/dist/js/app.min.js')}}"></script>*/
/* */
/* <!-- Optionally, you can add Slimscroll and FastClick plugins.*/
/*      Both of these plugins are recommended to enhance the*/
/*      user experience. Slimscroll is required when using the*/
/*      fixed layout. -->*/
/* */
/* {% block js %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* </body>*/
/* </html>*/
/* */
