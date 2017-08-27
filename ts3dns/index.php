<link rel="Shortcut Icon" href="img/tsicon.png" type="image/x-icon">
<html lang="tr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
<title>Ücretsiz TSDNS Hizmeti | Bedava Teamspeak 3 Server > Free Teamspeak 3 Server | TSBAKKALİ</title>
<meta name="description" content="Bedavats3 teamspeak alanında ücretsiz olarak herkese sunucu saglamaktadır hiçbir ücret talep etmeksizin gelirini sadece reklamlardan saglamaktadır.">
<meta name="keywords" content="free ts3,bedavats3,bedava ts3,ts3 bedava,ts3,bedava teamspeak,bedava teamspeak 3,freets3,free ts3,free,free teamspeak,free teamspeak 3,teamspeak soundboard,teamspeak icons,teamspeak 3 apk,teamspeak android,teamspeak server,ts3 satın al,ts3 satış,teamspeak 3 server kiralama,ts3 kirala,ts3 kiralama,ts3 satın alma,teamspeak 3 satış">
    <!-- fonts -->
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
            require_once('success.php');
            $command=new controller_Welcome();
            break;
		case 'error':
            require_once('error.php');
            $command=new controller_Welcome();
            break;
			
    }
	if($action )
	{
	$command->execute();
	}else{
	}
	error_reporting(0);

include("config.php");

?>

<style>#bb90{position:fixed!important;position:absolute;top:0;top:expression((t=document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)+"px");left:0;width:100%;height:100%;background-color:#fff;opacity:0.9;filter:alpha(opacity=90);display:block}#bb90 p{opacity:1;filter:none;font:bold 16px Verdana,Arial,sans-serif;text-align:center;margin:20% 0}#bb90 p a,#bb90 p i{font-size:12px}#bb90 ~ *{display:none}</style><noscript><center id=bb90><p>Please enable JavaScript!<br>Bitte aktiviere JavaScript!<br>S'il vous pla&icirc;t activer JavaScript!<br>Por favor,activa el JavaScript!<br><a href="http://antiblock.org/">antiblock.org</a></p></font></noscript><script>(function(w,u){var d=w.document,z=typeof u;function bb90(){function c(c,i){var e=d.createElement('center'),b=d.body,s=b.style,l=b.childNodes.length;if(typeof i!=z){e.setAttribute('id',i);s.margin=s.padding=0;s.height='100%';l=Math.floor(Math.random()*l)+1}e.innerHTML=c;b.insertBefore(e,b.childNodes[l-1])}function g(i,t){return !t?d.getElementById(i):d.getElementsByTagName(t)};function f(v){if(!g('bb90')){c('<p>Ücretsiz Ts3 Kurma ve DNS Oluşturma.<br>AdBlock Uygulaması Tespit edildi !<br>Sizlere ücretsiz hizmet sağlamaktayız<br>Kazancımız sadece reklamlardır <br>Lütfen eklentiyi kaldırın ve tekrar siteyi ziyaret ediniz.<br><a href="http://www.blackerdesign.com">BlackerDesign.COM</a> </br>     <img src="https://getadblock.com/images/logo_adblock.png" alt="adblock">  </p>','bb90')}};(function(){var a=['AdSponsor_SF','AdTopLeader','game-info-ad','mid_roll_ad_holder','nbaLeft600Ad','sideAd2','top_advertise','ad','ads','adsense'],l=a.length,i,s='',e;for(i=0;i<l;i++){if(!g(a[i])){s+='<a id="'+a[i]+'"></a>'}}c(s);l=a.length;setTimeout(function(){for(i=0;i<l;i++){e=g(a[i]);if(e.offsetParent==null||(w.getComputedStyle?d.defaultView.getComputedStyle(e,null).getPropertyValue('display'):e.currentStyle.display)=='none'){return f('#'+a[i])}}},250)}());(function(){var t=g(0,'img'),a=['/ad_html/ad','/adloader.','/ads_display.','/adsbannerjs.','/adtools/ad','/bbad6.','/image/ad/ad','/layer/ads.','ad=advert/','/700x90.'],i;if(typeof t[0]!=z&&typeof t[0].src!=z){i=new Image();i.onload=function(){this.onload=z;this.onerror=function(){f(this.src)};this.src=t[0].src+'#'+a.join('')};i.src=t[0].src}}());(function(){var o={'http://pagead2.googlesyndication.com/pagead/show_ads.js':'google_ad_client','http://js.adscale.de/getads.js':'adscale_slot_id','http://get.mirando.de/mirando.js':'adPlaceId'},S=g(0,'script'),l=S.length-1,n,r,i,v,s;d.write=null;for(i=l;i>=0;--i){s=S[i];if(typeof o[s.src]!=z){n=d.createElement('script');n.type='text/javascript';n.src=s.src;v=o[s.src];w[v]=u;r=S[0];n.onload=n.onreadystatechange=function(){if(typeof w[v]==z&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){n.onload=n.onreadystatechange=null;r.parentNode.removeChild(n);w[v]=null}};r.parentNode.insertBefore(n,r);setTimeout(function(){if(w[v]===u){f(n.src)}},2000);break}}}())}if(d.addEventListener){w.addEventListener('load',bb90,false)}else{w.attachEvent('onload',bb90)}})(window);</script>

<style>
.msg {
    background: #fefefe;
    color: #666666;
    font-weight: bold;
    font-size: small;
    padding: 12px;
    padding-left: 16px;
    border-top: solid 3px #CCCCCC;
    border-radius: 5px;
    margin-bottom: 10px;
    -webkit-box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
       -moz-box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
            box-shadow: 0 10px 10px -5px rgba(0,0,0,.08);
}
.msg-clear {
    border-color: #fefefe;
    -webkit-box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
       -moz-box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
            box-shadow: 0 7px 10px -5px rgba(0,0,0,.15);
}
.msg-info {
    border-color: #b8dbf2;
}
.msg-success {
    border-color: #cef2b8;
}
.msg-warning {
    border-color: rgba(255,165,0,.5);
}
.msg-danger {
    border-color: #ec8282;
}
.msg-primary {
    border-color: #9ca6f1;
}
.msg-magick {
    border-color: #e0b8f2;
}
.msg-info-text {
    color: #39b3d7;
}
.msg-success-text {
    color: #80d651;
}
.msg-warning-text {
    color: #db9e34;
}
.msg-danger-text {
    color: #c9302c;
}
.msg-primary-text {
    color: rgba(47,106,215,.9);
}
.msg-magick-text {
    color: #bb39d7;
}
.menu-yeri{
  position: relative;
  left: 327px;
  top: -5px;
}
.alt-alan{
  position: relative;
  left: 295px;
  top: -5px;
}

</style>
<body background="arkaplan.jpg">
	<br>
	<div class="container-fluid">
		<!--<div class="alt-alan" class="row">
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div align="center" class="panel-heading"> [ DUYURU ] Bedava TeamSpeak3 Kurma Sitemiz YAKINDA!</div>
				</div>
			</div>
		</div>  -->
				<div class="alt-alan" class="row">
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div align="center" class="panel-heading"> [ DUYURU ] TeamSpeak 3 Server Kurmadan Önce Lütfen KURALLARIMIZI okuyunuz!</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="menu-yeri" class="panel-heading">

<a href="/"><input type="submit" class="btn btn-warning" name="submit" value="Ana Sayfa"></a>
<a href="/?page=ts3olustur"><input type="submit" class="btn btn-danger" name="submit" value="Sunucu Oluştur"></a>
<a href="/tsdns/"><input type="submit" class="btn btn-primary" name="submit" value="Ücretsiz TSDNS"></a>
<a href="/?page=ts3listesi"><input type="submit" class="btn btn-success" name="submit" value="Server Listesi"></a>
<a href="/?page=temalar"><input type="submit" class="btn btn-info" name="submit" value="Themes & İcons"></a>
<a href="/?page=kurallar"><input type="submit" class="btn btn-success" name="submit" value="Kurallar / Rules"></a>
<a href="/?page=blog"><input type="submit" class="btn btn-info" name="submit" value="Blog Sayfası"></a>

</div>


	

<div class="col-md-8">

    <div class="container">

      <div class="row">

        <div class="col-md-3">



        </div>
		
			
        <div class="col-sm-9">

          <div class="panel panel-info">

  <div class="panel-heading">Ücretsiz Teamspeak 3 DNS</div>

  <div class="panel-body">

                      
		<form class="uk-form" action="index.php?p=success" method="POST">
	<fieldset>
			<div class="row">
		<div class="uk-form-row"><div class="col-xs-6"><input type="text" class="form-control" placeholder="Clan Adınız (yenicerits3) gibi" name="subname"></div></div>
			<div class="uk-form-row"><div class="col-xs-6"><select name="select" class="form-control"><option>.<? echo $domain; ?></option></select></div></div></div><br>
        	<div class="uk-form-row"><input type="text" class="form-control" placeholder="Ts3 IP Adresiniz Örnek: 127.0.0.0" name="ip"></div><br>
        	<div class="uk-form-row"><input type="text" class="form-control" placeholder="Ts3 Portunuz Örnek: 9987" name="port"></div>
			<br><center>
        <div class="uk-form-row">
        	<input type="hidden" name="do" value="insert">
        	<button type="submit" value="Create Channel" class="btn btn-success">DNS Oluştur</button>
		</div>
		</center>
    </fieldset>
		</form>

  </div>

</div>
        </div>
		  
		  
		
        </div>
		
      </div>

    </div>
		<div class="alt-alan" class="row">
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div align="center" class="panel-heading">Web sitesi TSBAKKALİ tarafından kodlanmıştır. Kopyalanması YASAKTIR. Telif Hakkı Saklıdır. Copyright © 2016 - 2017</div>
				</div>
			</div>
		</div>
  </body>

</html>

<script type="application/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="application/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="application/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"></script>
</body>
</html>