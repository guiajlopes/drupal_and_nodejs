<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Aplicações Real Time com Drupal e NodeJS</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="lib/reveal.js/css/reveal.min.css">
		<link rel="stylesheet" href="lib/reveal.js/css/theme/default.css" id="theme">

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="lib/reveal.js/lib/css/zenburn.css">

		<!-- If the query includes 'print-pdf', include the PDF print sheet -->
		<script>
			if( window.location.search.match( /print-pdf/gi ) ) {
				var link = document.createElement( 'link' );
				link.rel = 'stylesheet';
				link.type = 'text/css';
				link.href = 'lib/reveal.js/css/print/pdf.css';
				document.getElementsByTagName( 'head' )[0].appendChild( link );
			}
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
				<section>
					<h2>Aplicações Real Time com Drupal e Node.js</h2>
					<br>
					<ul>
						<li>Github: guiajlopes</li>
						<li class="mail">Email: guilherme@mmda.com.br</li>
						<li class="drupal">Drupal.org: guilopes</li>
					</ul>
				</section>

				<section>
					<h1>O que é Node.js?</h1>
				</section>

				<section class="fragments">
				<h2>Node.js</h2>
					<ul>
						<li class="fragment">Javascript Server Side</li>
						<li class="fragment">Orientado a Eventos</li>
						<li class="fragment">Assíncrono</li>
						<li class="fragment">Sistema modular</li>
					</ul>
				</section>

				<section>
					<h2>Em que casos usar Node.js?</h2>
				</section>

				<section>
					<h1> Perguntas? </h1>
				</section>

			</div>

		</div>

		<script src="lib/reveal.js/lib/js/head.min.js"></script>
		<script src="lib/reveal.js/js/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

				// Parallax scrolling
				// parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
				// parallaxBackgroundSize: '2100px 900px',

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: 'lib/reveal.js/lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'lib/reveal.js/plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'lib/reveal.js/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'lib/reveal.js/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'lib/reveal.js/plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: 'lib/reveal.js/plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
				]
			});

		</script>

	</body>
</html>
