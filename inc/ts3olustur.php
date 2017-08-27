<?php

$cfg = include('config.php');



if(!defined('6755682621')) {



   die('Doğrudan erişimi izin verilmez');



}



if(isset($_POST['submit'])){



  if(isset($_POST['servername']) && isset($_POST['slots']) && is_numeric($_POST['slots']) && $_POST['slots'] == floor($_POST['slots']) && $_POST['slots'] <= $cfg->appSettings->maxSlots){



    $ts3_ServerInstance = TeamSpeak3::factory("serverquery://".$cfg->teamspeakInfo->username.":".$cfg->teamspeakInfo->password."@".$cfg->teamspeakInfo->host.":".$cfg->teamspeakInfo->portQuery);



    $ts3_NewServer = $ts3_ServerInstance->serverCreate(array(



     "virtualserver_name" => $_POST['servername'],

     "virtualserver_maxclients" => $_POST['slots'],

	 "virtualserver_port" => $_POST['port'],

	 "virtualserver_weblist_enabled" => '0',

	 "virtualserver_log_client" => '0',

	 "virtualserver_log_query" => '0',

	 "virtualserver_log_channel" => '0',

	 "virtualserver_log_permission" => '0',

	 "virtualserver_log_server" => '0',

	 "virtualserver_log_filetransfer" => '0',

	 "virtualserver_hostbanner_url" => '',

	 "virtualserver_hostbanner_gfx_url" => '',

	 "virtualserver_hostbutton_url" => 'http://',

	 "virtualserver_hostbutton_gfx_url" => 'http:///',

	 "virtualserver_hostbutton_tooltip" => '',

	 "virtualserver_download_quota" => '-1',

	 "virtualserver_upload_quota" => '-1',

	 "virtualserver_max_download_total_bandwidth" => '-1',

	 "virtualserver_max_upload_total_bandwidth" => '-1',

	 "virtualserver_codec_encryption_mode" => 2, //0=einstellbar 1=aus 2=aus (opt_codec+1)

    ));



    echo '<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>TeamSpeak 3 Sunucunuz Oluşturuldu !</strong><br>Token: <a href="ts3server://'.$ts3_ServerInstance->getAdapterHost().':'.$ts3_NewServer['virtualserver_port'].'?token='.$ts3_NewServer['token'].'" class="alert-link">'.$ts3_NewServer['token'].'</a><br>IP: <a href="ts3server://'.$ts3_ServerInstance->getAdapterHost().':'.$ts3_NewServer['virtualserver_port'].'?token='.$ts3_NewServer['token'].'" class="alert-link">'.$ts3_ServerInstance->getAdapterHost().':'.$ts3_NewServer['virtualserver_port'].'</a>.</div>';



  } else {



    echo '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Oh snap!</strong> Something went wrong. Change a few things up and try it again.</div>';



  }



}



?>











<div class="panel panel-success">



  <div class="panel-heading">Sunucu Oluştur / Server Creator</div>



  <div class="panel-body">



<form class="form-horizontal" action="" method="post">



  <fieldset>



    <div class="form-group">



      <label for="inputServername" class="col-lg-2 control-label">Server Name</label>



      <div class="col-lg-10">



        <input required type="text" class="form-control" id="inputServername" name="servername" value="Sunucu Adi -Bu Sistemi TSBakkali Kodlamistir ">



      </div>



    </div>



    <div class="form-group">



      <label for="select" class="col-lg-2 control-label">Slot</label>



      <div class="col-lg-10">



        <select class="form-control" required name="slots" id="select">



			<option value="64">64</option><option value="32">32</option><option value="15">15</option>



        </select>



      </div>


    </div>

<div class="g-recaptcha" data-sitekey="6Le2YxUUAAAAALvdaTtKlKMPHLQVCXWhzahD_S9M"></div>

<center><strong> Sunucu Kurallarına uygun açılmayan tüm sunucular kapatılmaktadır. Lütfen  <a href="?page=kurallar" class="alert-link">kurallarımızı</a> okuyunuz!</strong></center></div>



    <div class="form-group">



      <div class="col-lg-10 col-lg-offset-2">



        <br><input type="submit" class="btn btn-success" name="submit" value="Oluştur"></br>



    </div>



  </fieldset>


</form>


</div>

</div>

</div>

