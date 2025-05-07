<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../style.php">
	<link rel="icon" href="../../Res/icon.png">
	<title>Blog</title>
</head>
<body>
	<h1 class="Hidden">Tyrland.se blog</h1>
	<?php
		readfile("../../nav.htm");
	?>
	<div id="ContentContainer">
		<!--Begin content here-->
		<div class="Content">
			<div id="BlogArea">
				<!--Start-Blog-Posts-->
				<div class="BlogPost Glass">
					<h2>Home server down</h2>
					<p class="Mono">2025-01-29</p>
					<p>
						The home server that was hosting Tyrland.se, currently only found
						at <a class="Link U" href="http://158.174.115.144/">http://158.174.115.144/</a>
						has recently had issues meaning I had to shut it down. It seems
						like the fan started developing problems with it's sensor, causing
						the server to run the fan at max, as suddenly the server couldn't
						tell how fast the fan was going. I am kind of conflicted regarding
						this failure: on one hand, it's bad that the server's fan is failing,
						but on the other, good riddance. That fan has been noisy since
						forever, and so I'm glad to replace it. Unfortunately these issues
						developed the day before a skiing trip, meaning repairs will have
						to wait until I get home from said trip. I should hopefully be able
						to get the server up and running again in not too long, but this was
						definitely annoying.
					</p>
				</div>
				<div class="BlogPost Glass">
					<h2>Massive change, without actual change</h2>
					<p class="Mono">2025-01-29</p>
					<p>
						Such is the state of Tyrland.se right now, there have been massive
						improvements in the backend of the site, performance, and QoL
						improvements for maintaining and updating the site. Now the site
						almost exclusively uses index.php-files instead of
						[whatever].htm-files, meaning you no longer see the file extension
						unless you specifically navigate to it. It should also be noted that
						the site is almost completely non-functional using local browsing
						now that most files use PHP, although maybe you could install PHP on
						your dev environment, I cannot be bothered. These are all great
						additions, but what's next? What's the next big improvement/feature?
						<br><br>Well, I don't know. DungeonPlanner still needs doing, but the
						big thing there is doing the backend, which I have been struggling to
						do for a while, and my motivation has been waning significantly,
						meaning it might take a while to finally get DungeonPlanner
						operational, but it should be operational sometime, just not in
						the near future. Aside from that, however, a rework of the main
						page would be in order at some point, perhaps to make it a little
						bit more useful.
					</p>
				</div>
				<div class="BlogPost Glass">
					<h2>DungeonPlanner beginning</h2>
					<p class="Mono">2025-01-29</p>
					<p>
						Now, I'm putting my attention on DungeonPlanner, making the webpages that will become
						DungeonPlanner, and figuring out how it will work. It's a long road ahead to get
						DungeonPlanner working, but many of the UIs are already mostly finished, although no
						backend logic exists yet to make the pages functional. Currently, I'll keep slowly
						working on it until I have a finished product.
					</p>
				</div>
				<div class="BlogPost Glass">
					<h2>A visual overhaul</h2>
					<p class="Mono">2025-01-23</p>
					<p>
						It's been a while, but now I'm working more actively on the site. I've been trying to
						set up a github repo on the server to make development easier, but I haven't had any
						particular luck getting that to work. Before now, the site used a space image I drew
						for the navbar and a tiny tileable space background that ended up looking like Minecraft
						obsidian. This was ok, but I didn't like it. I wanted a more interesting background to
						look at, and the navbar had some subtle issues with rendering the background image.
						The new look dawned upon me when I was browsing apple.com one day, and noticed that
						their navbar has a blur effect. That got me very curious, how might they be doing that?
						Well, it turns out it was stupidly simple to implement, just set backdrop-filter to
						blur(5px), and the background became blurred! So, now the site uses this Windows
						Aero-esque design which I find far more appealing. I also found a nice background image
						which I could press down into just 38kb, so the background is now also interesting to
						look at, just as I wanted.
					</p>
				</div>
				<div class="BlogPost Glass">
					<h2>Cookies, JavaScript, and user privacy</h2>
					<p class="Mono">2024-11-14</p>
					<p>
						I pride myself on my site not using any JavaScript, and using cookies 
						only for remembering user settings and such.
						(Although I don't currently do this)
						I've always been annoyed by the ridiculous use of cookies, JavaScript
						and tracking in most websites, and feel like it's really difficult
						not to have your every movement tracked and logged by huge 
						companies, just to make more money. We are starting to see more and
						more data breaches nowadays as well, which really highlights how user
						privacy has become so much more important now. Therefore I set myself
						the goal not to use JavaScript in any of the site, using server-side PHP as a
						replacement where absolutely necessary.
					</p>
				</div>
				<div class="BlogPost Glass">
					<h2>A public WIP</h2>
					<p class="Mono">2024-10-15</p>
					<p>
						The site is public since thursday, but I haven't been finding the 
						energy to work on it. I think I'll leave it and move on to other things
						right now, and work on it again when I find the energy to do so. I've
						also been pretty bad at keeping the production version up-to-date with
						the development version, and transferring it is currently kind of a
						pain to do, so I really need to improve that.
					</p>
				</div>
				<div class="BlogPost Glass">
					<h2>Almost there now</h2>
					<p class="Mono">2024-10-09</p>
					<p>
						The site will soon be going live!<br>
						ISP rubbish is finished after some back-and-forth, and DNS+Certs
						shouldn't be that difficult, now that that hurdle is done.<br>
						I have been dwelling over the background however, the tileable 32x32
						image I currently use is nice, however I have my qualms about it, and
						I might replace it with a larger image later, but that also conflicts
						with my goal to keep the site under 100kB. I'll have to think about
						this, but for now the tiled background will stay.
					</p>
				</div>
				<div class="BlogPost Glass">
					<h2>The first draft</h2>
					<p class="Mono">2024-10-02</p>
					<p>
						At this point I have created a basic site that can do most of what I 
						want to accomplish, but it's still quite boring. I definitely need to
						add some more fun things to the site, and maybe go somewhat crazy with
						the colours, but all in all it's pretty good. Just gotta hope that my
						ISP can hurry up with their part so that the site can actually go live.
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>