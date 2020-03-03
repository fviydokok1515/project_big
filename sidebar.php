<?php
session_start();
?>
<aside class="main-sidebar sidebar-light-primary elevation-4">
        <!-- Brand Logo -->
        <a routerLink="/home" class="brand-link bg-danger">
          <img src="https://sites.google.com/site/rmuticpe/_/rsrc/1375515779270/home/images.jpg"
               alt="https://cdn6.f-cdn.com/contestentries/1327675/29172553/5b011dc7829fd_thumb900.jpg"
               class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">ระบบใบเบิก</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              
            </div>
            <div class="info">
              <?php echo $_SESSION['title_name']; ?>
               
            <?php  echo  $_SESSION['name']." ".$_SESSION['lastname']; 
              ?><br>
              <span style="color: red;">สถานะ :</span><span> 
              <?php 
                echo $_SESSION['position_name'];
              
              ?>
              </span>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <!-- nav-compact -->
            <ul style="list-style-type: none;" class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-header">รายการ</li>
              <!-- <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                    Extras
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  
                  <li class="nav-item">
                    <a href="../examples/blank.html" class="nav-link active">
                      
                      <p>Blank Page</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>Starter Page</p>
                    </a>
                  </li>
                </ul>
              </li> -->
              
    
              <li class="nav-item">
                 <a class="nav-link  "href="#">
                  
                  <i class="nav-icon fas fas fa-user"></i>
                  <p>ผู้ใช้</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul style="list-style-type: none;" class="nav nav-treeview">
                  
                  <li class="nav-item">
                    <a href="../examples/blank.html" class="nav-link active">
                      
                      <p>เพิ่มผู้ใช้</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>ข้อมูลผู้ใช้</p>
                    </a>
                  </li>
                </ul>
              </li>
    
              <li class="nav-item">
                <a href="#" class="nav-link">
                  
                  <i class="nav-icon fas fa-table"></i>
                  <p>ตารางสอน</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  
                  <li class="nav-item">
                    <a href="index.php?act=timetable" class="nav-link active">
                      
                      <p>เพิ่มตารางสอน</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>ค้นหาตารางสอน</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tag"></i>
                  <p>ตารางเรียน</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  
                  <li class="nav-item">
                    <a href="../examples/blank.html" class="nav-link active">
                      
                      <p>เพิ่มตารางเรียน</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>ค้นหาตารางเรียน</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#"class="nav-link">
                  <i class="nav-icon fas fa-school"></i>
                  <p>ห้องเรียน</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href ="index.php?act=classroom" class="nav-link">
                      
                      <p>เพิ่มห้องเรียน</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a  href =""class="nav-link active">
                      
                      <p>ค้นหาห้องเรียน</p>
                    </a>
                  </li>
                 
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>จัดการข้อมูลทั่วไป</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  
                  <li class="nav-item">
                    <a href="../examples/blank.html" class="nav-link active">
                      
                      <p>วันเปิดถาคเรียน</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>วันหยุดราชการ</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>ข้อมูลคำนวณใบเบิก</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>ข้อมูลใบสอนแทน/สอนชดเชย</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>อาคารเรียน</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>สาขาวิชา</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>กลุ่มนักศึกษา</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>วิชา</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="assets/starter.html" class="nav-link">
                      
                      <p>คำนำหน้า</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="index.php?act=tc" class="nav-link">
                  <i class="nav-icon fas fa-check-square"></i>
                  <p>ใบสอนแทน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=tc_kim" class="nav-link">
                  <i class="nav-icon fas fa-check-square"></i>
                  <p>ใบสอนชดเชย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=au" class="nav-link">
                  <i class="nav-icon fas fa-check-square"></i>
                  <p>ใบเบิก</p>
                </a>
              </li>
              <li class="nav-item">
                <a routerLink="/home" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                  <p>จัดการเอกสาร</p>
                </a>
              </li>
    
              
    
              <li class="nav-header"></li>
    
    
              
    
    
              
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
      