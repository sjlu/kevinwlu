<div class="container">
	<div class="row">
		<div class="span3">
			<div id="photo">
				<img src="http://www.gravatar.com/avatar/<?= md5('kevin.wen.lu@gmail.com') ?>?s=300" />
			</div>
			<div id="info">
				<div id="name">
					Kevin W. Lu, D.Sc.
				</div>
				<div id="title">
					Senior Principal Scientist
				</div>
			</div>
			<hr />
			<div id="social">
				<div><i class="icon-envelope"></i> <a href="mailto:kevin.wen.lu@gmail.com">kevin.wen.lu@gmail.com</a></div>
				<div><i class="icon-linkedin-sign"></i> <a href="http://www.linkedin.com/profile/view?id=3722048" target="_new">LinkedIn Profile</a></div>
				<div><i class="icon-twitter-sign"></i> <a href="https://twitter.com/kevinwlu" target="_new">@kevinwlu</a></div>
			</div>
		</div>
		<div class="span9">
			<?php foreach($sections as $title => $text): ?>
				<div class="section">
					<h1><?= $title ?></h1>
					<div class="content"><?= $text ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>