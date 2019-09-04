<?php snippet('header')?>
     
     <div id="container">
	 

            
			<section>
			<?php foreach($page->images() as $image): ?>
  <figure>
    <a href="<?= $image->url() ?>">
      <img src="<?= $image->url() ?>" width="100%" alt="">
    </a>
  </figure>
  <?php endforeach ?>
       </section>
							
							<section>
							<?php if($page->noindex()->bool()) :?>
  <div id="extraContainer7">aaaaaaaaaaaaaaaa</div>

<?php endif ?>
								<div id="padding">
								<div class="text">
        
          <?= kirbytext(html::text($page->text())) ?>
        </div>
								</div>
								</section>

</div>
     <?php snippet('footer')?>