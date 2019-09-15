<!DOCTYPE HTML>

<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" >
            <form action="./islem/veriekle.php" method="post">
                <div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Veri Ekleme Ekranı</h3>
							</div>
							<div class="module-body">
									<div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Dikkat!</strong> Doldurulması zorunlu alanları doldurmayı unutmayın :)
									</div>
									<br />
									<form  class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label"  for="basicinput">Konu *</label>
											<div class="controls">
												<input type="text" name="topic" id="basicinput" placeholder="Kısaca konu girin." class="span8">
												<span class="help-inline">(Minimum 5 karakter olsun)</span>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label"  for="basicinput">Başlık *</label>
											<div class="controls">
												<input  name="title" data-title="A tooltip for the input" type="text" placeholder="Makale başlığı giriniz." data-original-title="" class="span8 tip">
											</div>
										</div>
										<div class="control-group">
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Makale *</label>
											<div class="controls">
												<textarea name="aciklama" class="span8" rows="5"></textarea>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="class=btn btn-standart btn-primary">Makaleyi Kaydet</button>
											</div>
										</div>
								</form>
						</div>
					</div>
				</div><!--/.content-->
            </form>
            </div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
</html>
