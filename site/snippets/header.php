<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= $page->metaTitle() ?></title>
    <?=css('index.css') ?>
</head>
<body>
<div id="wrapper">
<div id="hwrap">
<header class="navbar navbar-default navbar-inverse navbar-fixed-top desktopScreenNavbar" role="navigation">
			<div id="headwrap">
			
					<div id="titlelogo">
							<a href="http://cdainterview.com/">				
                            

                            <a class="logo" href="<?= $site->url() ?>"> 
                            
                            <div id="logo"><img  id = "titlelogo" src="<?= url('bemo-logo2.png')?>" width="167" height="100" alt="Site logo"></div>	
                            </a>
							<h1></h1></a>
							<h2></h2>
					</div>
						
						
						<div id="mwrap">
							<div id="lt"></div>
							<div id="lm"></div>
							<div id="lb"></div>
						</div>
						
						
						<div id="nwrap">
							<div id="menuBtn"></div>
                            <header>
       
    </header>
        <nav  >
            <ul class="navigation">
            <?php foreach ($site->children()->listed() as $subpage): ?>
            <li>
            <a href="<?= $subpage->url() ?>"><?= $subpage-> title() ?></a>
            </li>
            <?php endforeach ?>
</ul>
        </nav>
     
						</div>
				</div>
			</header>
            