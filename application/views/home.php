<div class="container">
	<div class="row">
		<div class="span3">
			<div id="photo">
				<img src="http://www.gravatar.com/avatar/<?= md5('kevin.wen.lu@gmail.com') ?>?s=300" />
			</div>
			<div id="info">
				<div id="name">
					<?= $attributes['name'] ?>
				</div>
				<div id="title">
					<?= $attributes['title'] ?>
				</div>
			</div>
			<hr />
			<div id="social">
				<div><i class="icon-envelope"></i> <a href="mailto:<?= $attributes['email'] ?>"><?= $attributes['email'] ?></a></div>
				<div><i class="icon-linkedin-sign"></i> <a href="<?= $attributes['linkedin'] ?>" target="_new">LinkedIn Profile</a></div>
				<div><i class="icon-twitter-sign"></i> <a href="https://twitter.com/<?= $attributes['twitter'] ?>" target="_new">@<?= $attributes['twitter'] ?></a></div>
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