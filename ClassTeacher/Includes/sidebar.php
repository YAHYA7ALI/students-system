 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center bg-gradient-primary justify-content-center" href="index.php">
        <div class="sidebar-brand-icon" >
          <img src="img/ara.png">
        </div>
        <div class="sidebar-brand-text mx-3">نظام ادارة حضور الطلاب</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>لوحة التحكم</span></a>
      </li> 
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
          aria-expanded="true" aria-controls="collapseBootstrap2">
          <i class="fas fa-user-graduate"></i>
          <span>الطلاب</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">ادارة الطلاب</h6>
            <a class="collapse-item" href="viewStudents.php">عرض جميع الطلاب</a>
            <!-- <a class="collapse-item" href="#">Assets Type</a> -->
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrapcon"
          aria-expanded="true" aria-controls="collapseBootstrapcon">
          <i class="fa fa-calendar-alt"></i>
          <span>ادارة الحضور</span>
        </a>
        <div id="collapseBootstrapcon" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">ادارة الحضور</h6>
            <a class="collapse-item" href="takeAttendance.php">اخذ الحضور</a>
            <a class="collapse-item" href="viewAttendance.php">عرض حضور الصف</a>
            <a class="collapse-item" href="viewStudentAttendance.php">عرض حضور الطالب</a>
            <a class="collapse-item" href="downloadRecord.php">التقرير اليومي  (xls)</a>
          </div>
        </div>
      </li>
    </ul>