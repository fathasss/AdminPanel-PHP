<!DOCTYPE HTML>
<?php
ob_start();
@session_start();
include "connect/connect.php";
?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sad World Studios</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
	<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="scripts/common.js" type="text/javascript"></script>
	<script type="text/javascript"></script>
<body>
	<header>
		<body>
		<div id="wrapper">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Engine Control Panel</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul id="active" class="nav navbar-nav side-nav">
					<li><a href="index.php?sayfa=blog">Blog</a></li>
					<li><a href="index.php?sayfa=kullanicilarekle">Kullanıcı Ekle</a></li>
					<li><a href="index.php?sayfa=mesajlar">Mesajlar</a></li>
					<li><a href="index.php?sayfa=kategoriler">Kategoriler</a></li>
					<li><a href="index.php?sayfa=ayarlar">Ayarlar</a></li>
									
				</ul>
				<ul class="nav navbar-nav navbar-right navbar-user">
					<li class="dropdown messages-dropdown">
						<a href="index.php?sayfa=mesajlar" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Mesajlar <span class="badge">2</span> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="index.php?sayfa=mesajlar">Yeni Mesaj</a></li>
							<li class="divider"></li>
							<li class="divider"></li>
							<li><a href="index.php?sayfa=mesajlar">Gelen Kutusu <span class="badge">2</span></a></li>
						</ul>
					</li>
					<li class="dropdown user-dropdown">
						<a href="index.php?sayfa=profil" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
						<?php
							$ad=$vt->query("SELECT * FROM uyeler");
							$name=$ad->fetch_assoc();
							echo "$name[uye_adi]";
						?>
						<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="index.php?sayfa=profil"><i class="fa fa-user"></i> Profil</a></li>
							<li><a href="ayarlar.php"><i class="fa fa-gear"></i> Ayarlar</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="fa fa-power-off"></i> Çıkış Yap</a></li>
						</ul>
					</li>
					<li class="divider-vertical"></li>
					<li>
						<form class="navbar-search">
							<input type="text" placeholder="Search" class="form-control">
						</form>
					</li>
				</ul>
			</div>
			</nav>
		</body>	
	</header>
	<?php
		if (isset($_GET['sayfa']) && $_GET['sayfa']!=NULL){
			if ($_GET['sayfa']=="kullanicilarekle"){
				include "kullanicilarekle.php";
			}
			else if($_GET['sayfa']=="blog"){
				include "blog.php";
			}
			else if($_GET['sayfa']=="profil"){
				include "profil.php";
			}
			else if($_GET['sayfa']=="ayarlar"){
				include "ayarlar.php";
			}
			else if($_GET['sayfa']=="kategoriler"){
				include "kategoriler.php";
			}
			else if($_GET['sayfa']=="mesajlar"){
				include "mesajlar.php";
			}
			else
			//include "anasayfa.php";
			echo "<script>alert('Yanlış sonuç');</script>";
		}
		else 
		include "anasayfa.php";
	?>	
	<footer>
	</footer>	
	
	<!-- Bu şekilde daha hızlı -->
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script src="scripts/common.js" type="text/javascript"></script>

</body>
</html>