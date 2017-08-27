<?
if (isset($_GET['p'])){
        $action=$_GET['p'];
    } else {
        $action='';
    }
	
	switch ($action){
		case "":
            echo "";
            break;
		case 'success':
            require_once('tsdns/success.php');
            $command=new controller_Welcome();
            break;
		case 'error':
            require_once('tsdns/error.php');
            $command=new controller_Welcome();
            break;
			
    }
	if($action )
	{
	$command->execute();
	}else{
	}
	error_reporting(0);

include("tsdns/config.php");

?>
<div class="panel panel-info">

  <div class="panel-heading">Ücretsiz Teamspeak 3 DNS</div>

  <div class="panel-body">

                      
<form class="uk-form" action="tsdns.php?p=success" method="POST">
<fieldset>
			<div class="row">
		<div class="uk-form-row"><div class="col-xs-6"><input type="text" class="form-control" placeholder="DNS Adresiniz(ı,u,ş,ç Gibi Türkce karakter kullanmayın dns calismaz!)" name="subname"></div></div>
			<div class="uk-form-row"><div class="col-xs-6"><select name="select" class="form-control"><option>.<? echo $domain; ?></option></select></div></div></div><br>
        	<div class="uk-form-row"><input type="text" class="form-control" placeholder="IP Adresiniz" name="ip"></div><br>
        	<div class="uk-form-row"><input type="text" class="form-control" placeholder="Portunuz" name="port"></div>
			<br><center>
        <div class="uk-form-row">
        	<input type="hidden" name="do" value="insert">
        	<button type="submit" value="Create Channel" class="btn btn-warning">DNS Oluştur</button>
		</div>
		</center>
    </fieldset>
</form>
	 


  </div>

</div>
        </div>