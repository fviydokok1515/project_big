<?php

                $act = $_GET['act'];
				  if($act=='tc'){
                    require_once("component/tc_tae/index.inc.php"); 
				  	
				  }
				  else if ($act=='insert') {
					  require_once("component/tc_tae/create.php");
				  	
				  }
				  else if ($act=='test') {
					  require_once("component/tc_tae/test.php");
				  	
				  }
				  
				  else if ($act=='home') {
					  require_once("component/home/view.php");
				  	
				  }
				  else if ($act=='tc_kim') {
					  require_once("component/tc_kim/view.php");
				  	
				  }
				  else if ($act=='au') {
					  require_once("component/au/view.php");
				  	
				  }
				  else if ($act=='cannot') {
					  require_once("component/tc_tae/cannot.php");
				  	
				  }
				  else if ($act=='timetable') {
					  require_once("component/timetable/view.php");
				  	
				  }

				  else if ($act=='login') {
					  ?><script>window.location="component/login/login.php";</script><?php
				  	
				  }
				 
				  else if ($act=='model') {
					?><script>window.location="component/login/login_chek.php";</script><?php
				  	
				  }
				  else if ($act=='logout') {
					session_unset();
					?><script>window.location="component/login/logout.php";</script><?php
				  	
				  }
				   else if ($act=='classroom') {
					    require_once("component/classroom/classroom.php");
					 
				  	
				  }