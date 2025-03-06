<?php foreach ($data['order'] as $x) {?>
	<?= $x['uid']; ?>
	<?= '<hr>'; ?>
	<?= $x['pid']; ?>
<?php  }?>

<a href="<?= BASE_URL; ?>/Keranjang/checkOut/<?= $x['pid']; ?>">Check OUT</a>