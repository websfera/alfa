<!doctype html>
<html lang="cs">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alfa - Notes</title>

	<!-- Bootstrap core CSS -->
	<link href="assets/bootstrap.css" rel="stylesheet">
  <script src="assets/bootstrap.js"></script>

	<!-- Custom styles for this template -->
	<link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
	
  <!-- Custom styles for this template -->
	<link href="assets/style.css" rel="stylesheet">
</head>

<body>

	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1"></div>
				<div class="col-4 text-center">
					<a class="blog-header-logo text-dark" href="#"><?= $appName ?></a>
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<a class="link-secondary" href="#" aria-label="Search">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
						 stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
							<title>Hledat</title>
							<circle cx="10.5" cy="10.5" r="7.5" />
							<path d="M21 21l-5.2-5.2" />
						</svg>
					</a>
					<a class="btn btn-sm btn-outline-secondary" 
            href="<?= $controller->link('sign/in') ?>"
            >Přihlásit</a>
				</div>
			</div>
		</header>

		<div class="nav-scroller py-1 mb-2">
			<nav class="nav d-flex">
				<a class="p-2 link-secondary" href="<?= $controller->link("home/default") ?>">Home</a>
				<a class="p-2 link-secondary" href="<?= $controller->link("note/list") ?>">Poznámky</a>
				<a class="p-2 link-secondary" href="<?= $controller->link("note/create") ?>">Note - create</a>
			</nav>
		</div>
	</div>

	<main class="container">