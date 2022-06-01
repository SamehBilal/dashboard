<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Shapes Slideshow | Demo 1 | Codrops</title>
		<meta name="description" content="An experimental slideshow using clip-path to create shape transitions between slides.">
		<meta name="keywords" content="slideshow, clip-path, shape, gsap, javascript, web design">
		<meta name="author" content="Codrops">
		<link rel="shortcut icon" href="favicon.26242483.ico">
		<link rel="stylesheet" href="https://use.typekit.net/gpd2hso.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/base.98fd6c19.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/menu.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/logo.css') }}">
		<script>document.documentElement.className = "js";

var supportsCssVars = function supportsCssVars() {
  var e,
      t = document.createElement("style");
  return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e;
};

supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>
	<body class="loading demo-1">
		<main>
			<div class="frame">
				<h1 class="frame__title">
                    <div class='logo'>
                        <span class="logo-letter is-active">S</span>
                        <span class="logo-letter is-active">A</span>
                        <span class="logo-letter is-active">M</span>
                        <span class="logo-letter is-active">E</span>
                        <span class="logo-letter is-active">H</span>
                      </div>
                </h1>
				<nav class="frame__links">
					<a href="http://tympanus.net/Development/CircularTextEffect/">Previous</a>
					<a href="https://tympanus.net/codrops/?p=53694">Article</a>
					<a href="https://github.com/codrops/ShapeSlideshow/">Github</a>
				</nav>
				<nav class="div-nav">
                    <input type="checkbox" class="nav__cb" id="menu-cb"/>
                    <div class="nav__content">
                      <ul class="nav__items">
                        <li class="nav__item">
                          <span class="nav__item-text">
                            Home
                          </span>
                        </li>
                        <li class="nav__item">
                          <span class="nav__item-text">
                            Works
                          </span>
                        </li>
                        <li class="nav__item">
                          <span class="nav__item-text">
                            About
                          </span>
                        </li>
                        <li class="nav__item">
                          <span class="nav__item-text">
                            Contact
                          </span>
                        </li>
                      </ul>
                    </div>
                    <label class="nav__btn" for="menu-cb"></label>
                </nav>
				<nav class="frame__demos">
					<a href="index.html" class="frame__demo frame__demo--current">demo 1</a>
					<a href="index2.html" class="frame__demo">demo 2</a>
					<a href="index3.html" class="frame__demo">demo 3</a>
					<a href="index4.html" class="frame__demo">demo 4</a>
				</nav>
				<nav class="slides-nav">
					<button class="slides-nav__button slides-nav__button--prev" aria-label="Previous slide">
						<svg><path d="M1.176 11.532a.5.5 0 00-.352.936c5.228 1.96 9.475 5.555 12.752 10.797a.5.5 0 00.848-.53c-3.39-5.424-7.81-9.163-13.248-11.203z"></path><path d="M1.176 12.468a.5.5 0 01-.352-.936C6.052 9.572 10.3 5.978 13.576.735a.5.5 0 01.848.53c-3.39 5.424-7.81 9.163-13.248 11.203z"></path><path d="M1 12.5a.5.5 0 110-1h53a.5.5 0 110 1H1z"></path></svg>
					</button>
					<button class="slides-nav__button slides-nav__button--next" aria-label="Next slide">
						<svg><path d="M53.824 11.532a.5.5 0 01.352.936c-5.228 1.96-9.475 5.555-12.752 10.797a.5.5 0 01-.848-.53c3.39-5.424 7.81-9.163 13.248-11.203z"></path><path d="M53.824 12.468a.5.5 0 00.352-.936C48.948 9.572 44.7 5.978 41.424.735a.5.5 0 00-.848.53c3.39 5.424 7.81 9.163 13.248 11.203z"></path><path d="M54 12.5a.5.5 0 100-1H1a.5.5 0 100 1h53z"></path></svg>
					</button>
					<div class="slides-nav__index">
						<span class="slides-nav__index-current">
							<span>1</span>
						</span>
						&mdash;
						<span class="slides-nav__index-total">5</span>
					</div>
				</nav>
			</div>
			<div class="slideshow">
				<figure class="slide slide--current">
					<div class="slide__img-wrap"><div class="slide__img" style="background-image: url({{ asset('frontend/img/asdsad.jpg') }})"></div></div>
					<figcaption class="slide__caption">
						<h2 class="slides__caption-headline">
							<span class="text-row"><span>Far from <em>Venice</em></span></span>
							<span class="text-row"><span><strong>sunset</strong> in her <em>gaze</em></span></span>
						</h2>
						<a class="slides__caption-link" href="#"><span>Explore</span></a>
					</figcaption>
				</figure>
				<figure class="slide">
					<div class="slide__img-wrap"><div class="slide__img" style="background-image: url({{ asset('frontend/img/3.a433b89d.jpg ') }})"></div></div>
					<figcaption class="slide__caption">
						<h2 class="slides__caption-headline">
							<span class="text-row"><span>Temptation</span></span>
							<span class="text-row"><span>a <em>desire</em> to <strong>engage</strong></span></span>
						</h2>
						<a class="slides__caption-link" href="#"><span>Explore</span></a>
					</figcaption>
				</figure>
				<figure class="slide">
					<div class="slide__img-wrap"><div class="slide__img" style="background-image: url({{ asset('frontend/img/8.f4323fe0.jpg ') }})"></div></div>
					<figcaption class="slide__caption">
						<h2 class="slides__caption-headline">
							<span class="text-row"><span>Somebody's <strong>game</strong></span></span>
							<span class="text-row"><span>in ancient <em>dreams</em></span></span>
						</h2>
						<a class="slides__caption-link" href="#"><span>Explore</span></a>
					</figcaption>
				</figure>
				<figure class="slide">
					<div class="slide__img-wrap"><div class="slide__img" style="background-image: url({{ asset('frontend/img/6.e96dcfff.jpg ') }})"></div></div>
					<figcaption class="slide__caption">
						<h2 class="slides__caption-headline">
							<span class="text-row"><span>Heartful <strong>acts</strong></span></span>
							<span class="text-row"><span>when <em>passion</em> calls</span></span>
						</h2>
						<a class="slides__caption-link" href="#"><span>Explore</span></a>
					</figcaption>
				</figure>
				<figure class="slide">
					<div class="slide__img-wrap"><div class="slide__img" style="background-image: url({{ asset('frontend/img/9.c9233dac.jpg ') }})"></div></div>
					<figcaption class="slide__caption">
						<h2 class="slides__caption-headline">
							<span class="text-row"><span>High <em>freedom</em></span></span>
							<span class="text-row"><span>when <strong>tears</strong> are gone</span></span>
						</h2>
						<a class="slides__caption-link" href="#"><span>Explore</span></a>
					</figcaption>
				</figure>
			</div>
		</main>
		<script src="{{ asset('frontend/js/demo1.151408fb.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".logo").hover(function(){
                    $('.logo-letter').toggleClass('is-active');
                });
            })
        </script>
	</body>
</html>
