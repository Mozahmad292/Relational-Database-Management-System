<?php 
  session_start();
  include('controller.php');

  $rows = $model->preReqCourseView();

