<?php get_header(); ?>

<!-- jumbotron -->
<div class="jumbotron">
  	<div class="container">
    	<div class="row">
    		<div class="col-md-8">
    			<h1>HMTIF</h1>
    			<h1>Universitas Pasundan</h1>
    			<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$subtitle = ot_get_option( 'hero_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.' );

					}
    			 ?>
    			<p><?= $subtitle ?></p>

    			<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$kahimsubtitle = ot_get_option( 'hero_subtitle_nama_kahim', 'Budi Ramdani (Ketua Umum HMTIF Periode 2017/2018 Kabinet Maharena Wijaya)' );

					}
    			 ?>

   				<p>- <?= $kahimsubtitle ?></p>
    		</div>		
    	</div>
  	</div>
</div>

<!-- jumlah proker -->

<div class="container-fluid medium-grey">
	<div class="container bg-green up text-center">
	<div class="row">
		<div class="col-md-4">
			<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$jmlproker = ot_get_option( 'jumlah_proker', '99' );

					}
    			 ?>
			<h1 class="jumlah"><?= $jmlproker?></h1>
			<h4 class="margin-small-top">Jumlah Proker</h4>
			<p>Jumlah kegiatan Proker yang akan berjalan selama 1 periode</p>
		</div>
		<div class="col-md-4">
			<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$jmlagenda = ot_get_option( 'jumlah_agenda', '99' );

					}
    			 ?>
			<h1 class="jumlah"><?= $jmlagenda?></h1>
			<h4 class="margin-small-top">Jumlah Agenda</h4>
			<p>Jumlah kegiatan Agenda yang akan berjalan selama 1 periode</p>
		</div>
		<div class="col-md-4">
			<?php 
			$jmlprokerdanagenda = $jmlproker + $jmlagenda;
			 ?>
			<h1 class="jumlah"><?= $jmlprokerdanagenda ?></h1>
			<h4 class="margin-small-top">Jumlah Proker & Agenda</h4>
			<p>Jumlah kegiatan Proker & Agenda yang akan berjalan selama 1 periode</p>
		</div>
	</div>
</div>

<div class="container">
	<div class="row text-center">
		<div class="col-md-3">
			<i class="fa fa-mars fa-5x" aria-hidden="true"></i>
			<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$jmlpl = ot_get_option( 'jumlah_pl', '99' );

					}
    			 ?>
			<h3><?=$jmlpl?> Orang</h3>
			<p>Jumlah pengurus HMTIF Laki-laki</p>
		</div>
		<div class="col-md-3">
			<i class="fa fa-venus fa-5x " aria-hidden="true"></i><?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$jmlpp = ot_get_option( 'jumlah_pp', '99' );

					}
    			 ?>
			<h3><?=$jmlpp?> Orang</h3>
			<p>Jumlah pengurus HMTIF Perempuan</p>
		</div>
		<div class="col-md-3">
			<i class="fa fa-users fa-5x " aria-hidden="true"></i>
			<?php 
			$jmlpengurushmtif = $jmlpl + $jmlpp;
			 ?>
			<h3><?=$jmlpengurushmtif?> Orang</h3>
			<p>Jumlah pengurus HMTIF keseluruhan</p>
		</div>
		<div class="col-md-3">
			<i class="fa fa-chart-area fa-5x margin-xsmall-bottom " aria-hidden="true"></i>
			<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$jmlpa = ot_get_option( 'jumlah_pa', '99' );

					}
    			 ?>
			<h3><?=$jmlpa?> Total</h3>
			<p>Jumlah Proker & Agenda yang telah terlaksana</p>
		</div>
	</div>
	<br><br>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="gambarkahim">
				<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$gambarkahim = ot_get_option( 'gambar_kahim', 'gambar kahim' );

					}
    			 ?>
				<img src="<?= $gambarkahim ?>" class="img-responsive" >
			</div>
		</div>
		<div class="col-md-6">
			<h1 class="margin-medium-top">Ketua Umum HMTIF</h1>
			<div class="hr bg-green"></div>
			<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$subtitle = ot_get_option( 'hero_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.' );

					}
    			 ?>
    			<p class="margin-small-top" ><?= $subtitle ?></p>
    			<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$kahimsubtitle = ot_get_option( 'hero_subtitle_nama_kahim', 'Budi Ramdani (Ketua Umum HMTIF Periode 2017/2018 Kabinet Maharena Wijaya)' );

					}
    			 ?>

			<blockquote>
				<footer><?= $kahimsubtitle ?></cite></footer>
			</blockquote>
		</div>		
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
		<h1 class="margin-small-top">Pengurus HMTIF</h1>
		<div class="hr bg-green"></div>
		<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$pengurustext = ot_get_option( 'pengurus_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.' );

					}
    			 ?>
    			<p class="margin-small-top"><?= $pengurustext ?></p>
		</div>
		<div class="col-md-6">
			<div class="gambarpengurus">
				<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$gambarpengurus = ot_get_option( 'gambar_pengurus', 'gambar pengurus' );

					}
    			 ?>
				<img src="<?= $gambarpengurus ?>" class="img-responsive" >
			</div>
		</div>	
	</div>
</div>

<div class="agenda">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Acara Terdekat</h1>
				<div class="hr-center bg-white"></div>
				<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$tmpt = ot_get_option( 'tempat', 'Sekre HMTIF' );
					$tgl = ot_get_option( 'tanggal', '30' );
					$bln = ot_get_option( 'bulan', '9' );
					$thn = ot_get_option( 'tahun', '1993' );
					$jam = ot_get_option( 'jam', '10' );
					$mnt = ot_get_option( 'menit', '00' );

					}
    			 ?>
				<h1 id="timer_value" class="htimer"></h1>
				<h4><?=$tmpt?>, <?=$tgl?>-<?=$bln?>-<?=$thn?>, Pukul <?=$jam?>:<?=$mnt?> WIB</h4> 
				<input hidden="true" type="text" id="month" value="<?php echo $bln;?>">
				<input hidden="true" type="text" id="day" value="<?php echo $tgl;?>">
				<input hidden="true" type="text" id="year" value="<?php echo $thn;?>">
				<input hidden="true" type="text" id="hour" value="<?php echo $jam;?>">
				<input hidden="true" type="text" id="min" value="<?php echo $mnt;?>">
				
				<?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$deskripsiacara = ot_get_option( 'deskripsi_acara', 'Deskripsi Acara' );

					}
    			 ?>
    			 <p><?=$deskripsiacara?></p>
					<div class="btn-group" role="group" aria-label="...">
					  <button type="button" class="btn  bg-transparant" data-toggle="modal" data-target="#myModal">Poster</button>
					  <?php 
		    			if ( function_exists( 'ot_get_option' ) ) {
							$linkpendaftaran = ot_get_option( 'link_pendaftaran', '#' );

							}
		    			 ?>
					  <a href="<?= $linkpendaftaran ?>" type="button" class="btn  bg-transparant linkwhite">Daftar</a>
					</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Poster</h4>
        </div>
        <div class="modal-body">
          <?php 
    			if ( function_exists( 'ot_get_option' ) ) {
					$posteracara = ot_get_option( 'poster_acara', 'poster acara' );

					}
    			 ?>
				<img src="<?= $posteracara ?>" class="img-responsive" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  

<div class="container">
	<div class="row">
		<h1>Seputar Kampus</h1>
		<div class="hr bg-green"></div>
		<?php 

		$recent_post = wp_get_recent_posts(array('post_type'=>'seputar_kampus'));
		foreach( $recent_post as $post ){

		echo '<div class="col-sm-6 col-md-4 margin-small-top">
			<div class="thumbnail">
			
			<div class="caption">
			<h3>'.$post["post_title"].'</h3>
			<p>lorem ah</p>
			<a href ="' . get_permalink($post["ID"]) . '" title="Look '.esc_attr($post["post_title"]).'" type="button" class="btn btn-default btn-block">Baca</a>
			</div>
			</div>
		</div>';
		}
		?>
	</div>	
</div>

<div class="kontak">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1>Kontak</h1>
			<div class="hr bg-white"></div>
			<p class="margin-small-top">Jika butuh bantuan atau ada yang ditanyakan anda dapat menghubungi kami dengan cara mengirim pesan melalui : </p>
			<ul class="fa-ul margin-small-top">
				  	<li><i class="fa-li fa fa-envelope fa-lg"></i>hmtif@unpas.ac.id</li>
				  	<li><i class="fa-li fab fa-facebook-f fa-lg" ></i>HMTIF Unpas</li>
				  	<li><i class="fa-li fab fa-twitter fa-lg"></i>@HMTIFunpas</li>
				  	<li><i class="fa-li fab fa-instagram fa-lg"></i>@hmtifunpas</li>
				</ul> 
		</div>
		<div class="col-md-6">
			<h1>Aspirasi</h1>
			<div class="hr bg-white"></div>
			<form>
			  <div class="form-group margin-small-top">
			    <label for="exampleFormControlInput1">Nama</label>
			    <input type="text" class="form-control bg-input-transparant" id="exampleFormControlInput1" placeholder="Boleh tidak sesuai">
			  </div>
			   <div class="form-group">
			    <label for="exampleFormControlSelect1">Tentang</label>
			    <select class="form-control bg-input-transparant" id="exampleFormControlSelect1">
			      <option>Akademik</option>
			      <option>Non-Akademik</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Aspirasi</label>
			    <textarea class="form-control bg-input-transparant" id="exampleFormControlTextarea1" rows="3"></textarea>
			  </div>
			  <button type="submit" class="btn bg-transparant">Kirim</button>
			</form>
		</div>
	</div>	
</div>

<?php get_footer(); ?>