<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Happy Christmas from Deuce</title>
		<meta name="description" content="An Advent calendar made of 3D cubes with different styles and effects." />
		<meta name="keywords" content="advent calendar, web, html template, 3d, cubes, css, javascript, anime.js" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Roboto+Condensed:400,700|BioRhyme:400,700|Lato:400,700" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/style3.css" />
		<!--[if IE]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--><script>document.documentElement.className = 'js';</script>

		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '1780572582224337'); // Insert your pixel ID here.
			fbq('track', 'PageView');
		</script>
		<noscript>
			<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1780572582224337&ev=PageView&noscript=1" />
		</noscript>
		<!-- DO NOT MODIFY -->
		<!-- End Facebook Pixel Code -->
	</head>
	<body>
		<main>
			<div class="deuce-logo">
				<img src="img/deuce-advent-logo.png">
			</div>
			<div class="calendar-wrap">
				<div class="calendar">
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/01/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/02/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/03/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/04/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/05/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/06/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/07/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/08/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/09/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/10/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/11/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/12/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/13/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/14/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/15/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/16/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/17/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/18/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/19/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/20/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/21/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#1c2d3f"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/22/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#cc0019"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/23/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#6161616"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/24/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#6161616"></div>
					<div class="cube" <?php echo ( (int) time() < (int) strtotime( '12/25/16' ) ) ? 'data-inactive data-title="Coming soon"' : ''; ?> data-bg-color="#6161616"></div>
				</div>
				<div class="content">
					<div class="content__block">
						<h3 class="content__title">Why is a Mobile-Friendly Website Absolutely Essential?</h3>
						<div class="content__description">
							<p>Mobile devices have transformed the way consumers explore products and research their most important purchases.</p>
							<p>Research conducted by Nielsen, xAd, and Telmetrics suggests that nearly half of the users they surveyed rely exclusively on their mobile devices for pre-purchase research, and that 30% of smartphone users (and 25% of tablet users) have immediate needs and purchase within an hour.</p>
							<p>However, Google research has shown that 61% of users are unlikely to return to a mobile site they had trouble accessing – with 40% visit a competitor's site instead.</p>
							<p>Not only can a mobile-unfriendly site negatively affect your visitors' experience, it can also harm your search engine rankings.  Earlier this year, Google rolled out an update to their algorithm that gives mobile-friendly sites a ranking boost in the search results pages.</p>
							<p>Having a mobile-friendly website is no longer just an option – it's a requirement. If your site has not been designed with mobile browsing in mind, this should without a doubt be the first thing you address in your 2017 marketing strategy.</p>
						</div>
						<p class="content__meta">Deuce Creative</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Impossible</h3>
						<p class="content__description">To be content with little is difficult; to be content with much, impossible.</p>
						<p class="content__meta">Marie von Ebner-Eschenbach</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Everything</h3>
						<p class="content__description">The things you own end up owning you. It's only after you lose everything that you're free to do anything.</p>
						<p class="content__meta">Chuck Palahniuk</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Hung Up</h3>
						<p class="content__description">A lot of people get so hung up on what they can't have that they don't think for a second about whether they really want it.</p>
						<p class="content__meta">Lionel Shriver</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Live Freely</h3>
						<p class="content__description">It is the preoccupation with possessions, more than anything else that prevents us from living freely and nobly.</p>
						<p class="content__meta">Bertrand Russell</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Tolerable Planet</h3>
						<p class="content__description">What is the use of a house if you haven't got a tolerable planet to put it on?</p>
						<p class="content__meta">Henry David Thoreau</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Normal</h3>
						<p class="content__description">Normal is getting dressed in clothes that you buy for work and driving through traffic in a car that you are still paying for - in order to get to the job you need to pay for the clothes and the car, and the house you leave vacant all day so you can afford to live in it.</p>
						<p class="content__meta">Ellen Goodman</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Superhero</h3>
						<p class="content__description">The reality of loving God is loving him like he's a Superhero who actually saved you from stuff rather than a Santa Claus who merely gave you some stuff.</p>
						<p class="content__meta">Criss Jami</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">New Weariness</h3>
						<p class="content__description">Every increased possession loads us with new weariness.</p>
						<p class="content__meta">John Ruskin</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">The Sinner</h3>
						<p class="content__description">The Christmas tree, twinkling with lights, had a mountain of gifts piled up beneath it, like offerings to the great god of excess.</p>
						<p class="content__meta">Tess Gerritsen</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Intellectual Wealth</h3>
						<p class="content__description">Whoever prefers the material comforts of life over intellectual wealth is like the owner of a palace who moves into the servants' quarters and leaves the sumptuous rooms empty.</p>
						<p class="content__meta">Marie von Ebner-Eschenbach</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Limiting Principle</h3>
						<p class="content__description">An attitude to life which seeks fulfilment in the single-minded pursuit of wealth - in short, materialism - does not fit into this world, because it contains within itself no limiting principle, while the environment in which it is placed is strictly limited.</p>
						<p class="content__meta">Ernst F. Schumacher</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Quaintly Free</h3>
						<p class="content__description">To have so little, and it of so little value, was to be quaintly free.</p>
						<p class="content__meta">Wallace Stegner</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">On A Level</h3>
						<p class="content__description">I've always felt that your belongings have never been on a level with you.</p>
						<p class="content__meta">George Eliot</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Experiences</h3>
						<p class="content__description">We all need new ideas, images, and experiences far more than we need new stoves or cars or computers.</p>
						<p class="content__meta">Bill Holm</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Entrenched</h3>
						<p class="content__description">We are being called upon to act against a prevailing culture, to undermine our own entrenched tendency to accumulate and to consume, and to refuse to define our individuality by our presumed ability to do whatever we want.</p>
						<p class="content__meta">Lyanda Lynn Haupt</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Happiness</h3>
						<p class="content__description">The way of the consumerist culture is to spend so much energy chasing happiness that it has none left to be happy.</p>
						<p class="content__meta">Criss Jami</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Working Jobs</h3>
						<p class="content__description">Advertising has us chasing cars and clothes, working jobs we hate so we can buy shit we don't need.</p>
						<p class="content__meta">Chuck Palahniuk</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Spending Billions</h3>
						<p class="content__description">Our economy is based on spending billions to persuade people that happiness is buying things, and then insisting that the only way to have a viable economy is to make things for people to buy so they’ll have jobs and get enough money to buy things.</p>
						<p class="content__meta">Philip Slater</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Principle Of Having</h3>
						<p class="content__description">The real opposition is that between the ego-bound man, whose existence is structured by the principle of having, and the free man, who has overcome his egocentricity.</p>
						<p class="content__meta">Erich Fromm</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Enemies</h3>
						<p class="content__description">Happy slaves are the bitterest enemies of freedom.</p>
						<p class="content__meta">Marie von Ebner-Eschenbach</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Better World</h3>
						<p class="content__description">If you assume that there is no hope, you guarantee that there will be no hope. If you assume that there is an instinct for freedom, that there are opportunities to change things, then there is a possibility that you can contribute to making a better world.</p>
						<p class="content__meta">Noam Chomsky</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Better World</h3>
						<p class="content__description">If you assume that there is no hope, you guarantee that there will be no hope. If you assume that there is an instinct for freedom, that there are opportunities to change things, then there is a possibility that you can contribute to making a better world.</p>
						<p class="content__meta">Noam Chomsky</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Better World</h3>
						<p class="content__description">If you assume that there is no hope, you guarantee that there will be no hope. If you assume that there is an instinct for freedom, that there are opportunities to change things, then there is a possibility that you can contribute to making a better world.</p>
						<p class="content__meta">Noam Chomsky</p>
					</div>
					<div class="content__block">
						<h3 class="content__title">Better World</h3>
						<p class="content__description">If you assume that there is no hope, you guarantee that there will be no hope. If you assume that there is an instinct for freedom, that there are opportunities to change things, then there is a possibility that you can contribute to making a better world.</p>
						<p class="content__meta">Noam Chomsky</p>
					</div>
					<div class="content__number">0</div>
					<a href="" class="btn-back" aria-label="Back to the grid view">&crarr;</a>
				</div><!-- /content -->
			</div>
		</main>
		<script src="js/charming.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/textfx.js"></script>
		<script src="js/main3.js"></script>
	</body>
</html>
