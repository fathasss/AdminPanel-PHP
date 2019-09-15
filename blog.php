<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" >
            <form action="./islem/veriekle.php" method="post">
                <div class="span9">
					<div class="content">
						<div class="module">
							
							<div class="module-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>  </th>
                                        <th>Ad</th>
                                        <th>Email</th>
                                        <th>Durum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--/.module-->
                                        <?php
                                        $i=1;
                                        $cek=$vt->query("SELECT * FROM uyeler");
                                        while($goster=$cek->fetch_assoc()){
                                            echo "<tbody><tr>
                                            <td>$i</td>
                                            <td>$goster[uye_adi]</td>
                                            <td>$goster[uye_email]</td>
                                            <td>$goster[uye_online]</td>";
                                            $i++;
                                        }
                                        ?>
                                    </tbody></tr>
                                </table>
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

