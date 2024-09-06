<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

  </ul>

  <ul class="navbar-nav ml-auto">
    <!-- User Account: style can be found in dropdown.less -->
    <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="hidden-xs"><?php echo $user['firstname'] . ' ' . $user['lastname']; ?></span>
      </a>
      <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">

          <p>
            <?php echo $user['firstname'] . ' ' . $user['lastname']; ?>
          </p>
        </li>
        <li class="user-footer">
          <div class="pull-left">
            <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update</a>
          </div>
          <div class="pull-right">
            <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
          </div>
        </li>
      </ul>
    </li>
  </ul>

</nav>
<!-- /.navbar -->