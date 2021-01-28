<html lang="en">
	<wb-var base="/modules/yonger/tpl/" />
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@yonger">
    <meta name="twitter:creator" content="@yonger">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Yonger">
    <meta name="twitter:description" content="Yonger">
    <meta name="twitter:image" content="/tpl/assets/img/favicon.svg">

    <!-- Facebook -->
    <meta property="og:url" content="http://yonger.ru">
    <meta property="og:title" content="Yonger">
    <meta property="og:description" content="Yonger">

    <meta property="og:image" content="/tpl/assets/img/favicon.svg">
    <meta property="og:image:secure_url" content="/tpl/assets/img/favicon.svg">
    <meta property="og:image:type" content="image/svg+xml">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">


    <meta name="description" content="Yonger">
    <meta name="author" content="Oleg Frolov">
    <link rel="shortcut icon" type="image/svg+xml" href="/tpl/assets/img/favicon.svg">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

		<wb-snippet name="wbapp" />

    <title>Web Basic - Pandemic version</title>

  </head>
  <body class="app-chat">

		<script type="wbapp">
			wbapp.loadStyles([
        "{{_var.base}}/assets/css/dashforge.css"
				,"{{_var.base}}/assets/css/dashforge.chat.css"
				,"{{_var.base}}/assets/css/skin.cool.css"
				,"{{_var.base}}/assets/css/cms.less"
				,"/engine/lib/fonts/remixicons/remixicon.css"
				,"/engine/lib/fonts/font-awesome/css/font-awesome.min.css"
			]);

			wbapp.loadScripts([
				 "/engine/lib/bootstrap/js/bootstrap.bundle.min.js"
				,"{{_var.base}}/assets/lib/perfect-scrollbar/perfect-scrollbar.min.js"
				,"{{_var.base}}/assets/js/dashforge.js"
				,"{{_var.base}}/assets/js/dashforge.aside.js"
				,"{{_var.base}}/assets/lib/js-cookie/js.cookie.js"
			]);

		</script>

  </body>
</html>
