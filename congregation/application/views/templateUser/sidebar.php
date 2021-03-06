
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['user']['name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <a href="<?php echo site_url('Routes/home') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                &nbsp Home
              </p> 
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('ReflexaoControl/Dashboard') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                &nbsp Reflexão
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('AvisoControl/Dashboard') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                &nbsp Avisos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('testimonyControl/testimonyDashboard') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                &nbsp Testemunhos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('MeetingControl/Dashboard') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                &nbsp Reuniões
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url('MidiasControl/Dashboard') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                &nbsp Mídias Sociais
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('PresentationControl/Dashboard') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                &nbsp Quem Somos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('StoreControl/Dashboard') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                &nbsp Store
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('DonateControl/Dashboard') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                &nbsp contas para oferta
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('UserControl/Dashboard') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                &nbsp Usuários
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>