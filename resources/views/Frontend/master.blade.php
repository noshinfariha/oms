<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>	
            <!-- CSS -->
             @include('Frontend.partial.css')

</head>

<body>
	          @include('Frontend.partial.header')

	<main>		
		      @yield('container')	
	</main>

            <!-- Footer -->
            @include('Frontend.partial.footer')


	</div>

	</div>
            <!-- js -->
            @include('Frontend.partial.js')

	<x-notify::notify />
	@notifyJs

	<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
</body>

</html>
