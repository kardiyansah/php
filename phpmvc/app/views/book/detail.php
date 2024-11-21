
<div class="card" style="width: 15rem;">
  <img src="<?= BASEURL; ?>/img/<?= $data['book']['images']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $data['book']['title']; ?></h5>
    <p class="card-text">Writer : <?= $data['book']['writer']; ?></p>
    <p class="card-text">Publication Year : <?= $data['book']['publication_year']; ?></p>
    <p class="card-text">Total Pages : <?= $data['book']['total_pages']; ?></p>
    <a href="<?= BASEURL; ?>/book" class="btn btn-primary">Back</a>
  </div>
</div>