<?php snippet('header')?>
     
   <ul class="projects">
    <?php foreach($page->children() as $project): ?>
    <li>
        <a href="<?= $project ->url() ?>">

            <?= $project->image() ?>
            <?= $project->title() ?>
    </li>
    <?php endforeach ?>
   </ul> 




<?php snippet('footer')?>

