<section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |cxcxcxcxc
        -------------------------->

<?php
if(!isset($_GET['content'])) $_GET['content']= "profile";
 include_once('content/'.$_GET['content'].'.php') ?>
    </section>