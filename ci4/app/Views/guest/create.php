
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
		<a href="/lab3/ci4/public/index" style ="color:#fff; font-size: 20px;" >アセ | ルシアン</a>
		<div class="bx bx-menu" id="menu-icon"></div>
		<br>
        <br>
        <br>
		<ul class="navbar">
			<li><a href="/lab3/ci4/public/index#home">Home</a></li>
			<li><a href="/lab3/ci4/public/index#about">About Me</a></li>
			<li><a href="/lab3/ci4/public/index#commissions">Commissions</a></li>
			<li><a href="/lab3/ci4/public/index#portfolio">Artworks</a></li>
			<li><a href="/lab3/ci4/public/guest/create">Contact Me</a></li>
		</ul>
		</header>

<div class="contact-form">
<!---contact--->
<section class="contact" id="contact">
		<div class="contact-text">
			<h2>Commission Me</h2>
			<h4></h4>
			<p>Looking forward to be working with you.</p>
			<div class="contact-list">
				<li><a href="#">@azi_1722 | アセ | ルシアン </a></li>
				<li><a href="#">azimikuu@gmail.com</a></li>
				<li><a href="#">09264555416</a></li>
			</div>
			<div class="contact-icons">
				<a href="https://twitter.com/azi_1722"><i class='bx bxl-twitter' ></i></a>
				<a href="https://www.instagram.com/azi_1722/"><i class='bx bxl-facebook' ></i></a>
				<a href="https://www.instagram.com/azi_1722/"><i class='bx bxl-instagram' ></i></a>
			</div>
		</div>

<form action="/lab3/ci4/public/guest/create" method="post">
    <?= csrf_field() ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <input type="input" name="name" placeholder="Your Name" value="<?= set_value('name') ?>" required>
            <input type="input" name="email" placeholder="Your Email" value="<?= set_value('email') ?>" required>
            <input type="input" name="website" placeholder="Your Subject" value="<?= set_value('website') ?>" required>
            <textarea name="comment" rows="6" placeholder="Your Message"><?= set_value('comment') ?></textarea>

            <input type="submit" value="Submit" class="send">
            </form>
</form>

<div class="last-text">
		<p></p>
	</div>


</div>
