<?php
$this->load->view('dasbor/utama');
?>
<body>
  <?php 
  $this->load->view('admin/nav');
  ?>

  <div class="templatemo-content-wrapper">
    <div class="templatemo-content">
      <ol class="breadcrumb">
        <li><a href="index.html">Admin Panel</a></li>
        <li><a href="#">Manage Users</a></li>
        <li class="active">Tables</li>
      </ol>
      <h1>Email Masuk</h1>
      <p>Periksa email segera</p>
      
      <div class="container mail_list">
        <div class="row">

          <div class="col-sm-3 col-md-2">
            <a href="#" class="btn btn-danger btn-sm btn-block" role="button"><i class="glyphicon glyphicon-pencil"></i> COMPOSE</a>
          </div>

          <div class="col-sm-9 col-md-10">

            <div class="btn-group hidden-xs hidden-sm visible-md-inline-block visible-lg-inline-block">
              <button type="button" class="btn btn-default">
                <div class="checkbox" style="margin: 0;">
                  <label>
                    <input type="checkbox">
                  </label>
                </div>
              </button>

              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
              </button>

              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Read</a></li>
                <li><a href="#">Unread</a></li>
                <li><a href="#">Trash</a></li>
              </ul>
            </div>
            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
              <span class="glyphicon glyphicon-refresh"></span>   </button>

              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  More <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Mark all as read</a></li>
                </ul>
              </div>
              <div class="pull-right">
                <span class="text-muted"><b>1</b>–<b>50</b> of <b>277</b></span>
                <div class="btn-group btn-group-sm">
                  <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </button>
                  <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-3 col-md-2">
              <ul id="mailboxes-desktop" class="hidden-xs hidden-sm nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right">42</span> Inbox </a>
              </li>
              <li><a href="#">Starred</a></li>
              <li><a href="#">Important</a></li>
              <li><a href="#">Sent Mail</a></li>
              <li><a href="#"><span class="badge pull-right">3</span>Drafts</a></li>
            </ul>
            <div id="mailboxes-mobile" class="hidden-md hidden-lg">
              <button type="button" class="btn btn-block btn-default dropdown-toggle" data-toggle="dropdown">
                Mail boxes <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu btn-block" role="menu">
                <li class="active"><a href="#"><span class="badge pull-right">42</span> Inbox </a>
              </li>
              <li><a href="#">Starred</a></li>
              <li><a href="#">Important</a></li>
              <li><a href="#">Sent Mail</a></li>
              <li><a href="#"><span class="badge pull-right">3</span>Drafts</a></li>
            </ul>
          </div>
        </div>

        <div class="col-sm-9 col-md-10">
          <div id="home">
            <div class="list-group">

              <div class="message">
                <a href="#" class="list-group-item">
                  <div class="checkbox hidden-xs hidden-sm visible-md-inline-block visible-lg-inline-block">
                    <label>
                      <input type="checkbox">
                    </label>
                  </div>
                  <span class="name">George Harisson <small class="hidden-xs hidden-sm"><devbizznex@zoho.com></small></span> <span class="title">This is big title</span> <span class="text-muted text">- Hi hello how r u ?</span> <span class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-lock hidden-xs hidden-sm"> </span><span class="glyphicon glyphicon-paperclip hidden-xs hidden-sm"></span>
                </span>
              </a>
            </div>

            <div class="message">
              <a href="#" class="list-group-item">
                <div class="checkbox hidden-xs hidden-sm visible-md-inline-block visible-lg-inline-block">
                  <label>
                    <input type="checkbox">
                  </label>
                </div>
                <span class="name">George Harisson <small class="hidden-xs hidden-sm"><devbizznex@zoho.com></small></span> <span class="title">This is big title</span> <span class="text-muted text">- Hi hello how r u ?</span> <span class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-lock hidden-xs hidden-sm"> </span><span class="glyphicon glyphicon-paperclip hidden-xs hidden-sm"></span></span>
              </a>
            </div>

            <div class="message">
              <a href="#" class="list-group-item">
                <div class="checkbox hidden-xs hidden-sm visible-md-inline-block visible-lg-inline-block">
                  <label>
                    <input type="checkbox">
                  </label>
                </div>
                <span class="name">George Harisson <small class="hidden-xs hidden-sm"><devbizznex@zoho.com></small></span> <span class="title">This is big title</span> <span class="text-muted text">- Hi hello how r u ?</span> <span class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-lock hidden-xs hidden-sm"> </span><span class="glyphicon glyphicon-paperclip hidden-xs hidden-sm"></span></span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <footer class="templatemo-footer">
    <div class="templatemo-copyright">
      <p>Copyright &copy; 2084 Your Company Name <!-- Credit: www.templatemo.com --></p>
    </div>
  </footer>
</div>
</div>

<?php
$this->load->view('dasbor/utamaFooter');
?>