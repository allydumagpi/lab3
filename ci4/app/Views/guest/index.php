<h2><?= esc($title) ?></h2>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Allyza's Personal Portfolio</title>
	<!---custom css link--->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>

	<!---header--->
	<header>
		<a href="/~adumagpi/lab3/ci4/public/index" style ="color:#fff; font-size: 20px;" >アセ | ルシアン</a>
		<div class="bx bx-menu" id="menu-icon"></div>
		<br>
        <br>
        <br>
		<ul class="navbar">
			<li><a href="/~adumagpi/lab3/ci4/public/index#home">Home</a></li>
			<li><a href="/~adumagpi/lab3/ci4/public/index#about">About Me</a></li>
			<li><a href="/~adumagpi/lab3/ci4/public/index#commissions">Commissions</a></li>
			<li><a href="/~adumagpi/lab3/ci4/public/index#portfolio">Artworks</a></li>
			<li><a href="/~adumagpi/lab3/ci4/public/guest/create">Contact Me</a></li>
		</ul>
		</header>

    <section class="portfolio" id="portfolio">
			<div class="main-text">
				<h2> azi_1722's Commissions </h2>
				<h4> ............. </h4>
			</div>

		<div class="portfolio-content">
      <?php if (! empty($guest) && is_array($guest)): ?>

      <?php foreach ($guest as $guest_item): ?>

            <div class="row">
              <br>
            <h3><?= esc($guest_item['name']) ?></h3>
            <p><?= esc($guest_item['email']) ?></p>
            <p><?= esc($guest_item['website']) ?></p>
            <em><p><?= esc($guest_item['comment']) ?></p></em> 
          </div>
      </div>
  
		
	

	<?php endforeach ?>
	
<?php else: ?>
	<h3>No guest</h3>
	<p>Unable to find any guest for you.</p>
	
<?php endif ?>
