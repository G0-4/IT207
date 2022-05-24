<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="styles.css" type="text/css" />
	<head>
		<title>
			Index
		</title>
	</head>
	<body>
		<div id="outer-box">
			<div id="side-menu">
				<?php
				include("menu.php");
				?>
			</div>
			<div id="content">
				<div id="header">
				<?php
				include("header.php");
				?>
				</div>
				<div id="photo">
					<img style="height: 100%; width: 100%; object-fit: contain" src="IMG_0209.jpg" alt="Ayy It's Me">
				</div>
					<div id="summary">
					<p>
						<b>Summary</b><br/>
						<ul>
							<li>Personal</li>
							<ul>
								<li>Home town and country of South Riding, VA.</li>
								<li>Father is first generation American, whose parents arrived from Russia.</li>
								<li>Mother is an immigrant from the Philippines.</li>
							</ul>
							<li>Academic</li>
							<ul>
								<li>Currently in second semester of Junior year.</li>
								<li>Information Technology Major.</li>
								<li>Cloud Computing Concentration.</li>
							</ul>
						</ul><br /><br />
					</p>
					</div>
						<div id="details"
							<p>
								<b>Professional & Personal Details</b><br />
							</p>
							<p>
								<?php
									readfile("Intro.txt")
								?>
							</p>
							<br />
						</div>
				<div id="footer">
					<?php
					include("footer.php");
					?>
				</div>
			</div>
		</div>
	</body>
</html>