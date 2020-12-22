<?php foreach ($campanhas as $key => $campanha): ?>
<div class="campaigns__card">
  <div class="campaigns__card-header">
    <?= $campanha['title'];?>
  </div>
  <img class="campaigns__card-img-top" src="<?= $campanha['img'];?>" alt="<?= $campanha['title'];?>">
  <div class="campaigns__card-body">
    <p class="campaigns__card-description"><?= $campanha['description'];?></p>
  </div>
  <div class="campaigns__card-footer">
    <a href="#link-<?= $key + 1;?>" class="btn btn-roxo btn-block">ver campanha</a>
  </div>
</div>
<?php endforeach; ?>