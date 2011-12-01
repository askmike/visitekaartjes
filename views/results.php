<?php for ($i = 1; $i <= 10; $i++) { ?>
	<div class='kaartje klaar'>
		<div class='left'>
			<img src="static/img/kaartje.png" width="133" height="66">
			<h2>
				mijn realiteit
			</h2>
		</div>
		<div class="right">
			<div class="black"></div>
			<div class="rotate">
				<?php echo $naam; ?>
				<span>
					<?php echo $beroep; ?>
				</span>
			</div> <!--  rotate -->
		</div> <!--  right -->
	</div>
<?php } ?>