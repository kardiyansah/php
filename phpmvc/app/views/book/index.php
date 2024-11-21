
<div class="row mt-4">
    <div class="col-lg-6">
        <?php Flasher::Flash(); ?>
    </div>
</div>

<div class="row mt-1 mb-3">
    <div class="col-lg-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-createBook" data-bs-toggle="modal" data-bs-target="#formModal">
        Create New Book
        </button>
    </div>
</div>

<div class="row mt-4 mb-3">
    <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/book/search" method="post">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Enter The Keyword Here" name="keyword" id="keyword" autofocus autocomplete="off">
            <button class="btn btn-outline-secondary" type="submit" id="btn-search">Button</button>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <h3>Books list</h3>
            <ul class="list-group">
            <?php foreach( $data['book'] as $book ) : ?>
                <li class="list-group-item">
                    <?= $book['title']; ?>
                    <a href="<?= BASEURL; ?>/book/delete/<?= $book['id']; ?>" class="badge text-bg-danger float-end ms-2" style="text-decoration: none;" onclick="return confirm('Are You Sure ?');">Delete</a>
                    <a href="<?= BASEURL; ?>/book/detail/<?= $book['id']; ?>" class="badge text-bg-primary float-end ms-2" style="text-decoration: none;">Detail</a>
                    <a href="<?= BASEURL; ?>/book/update/<?= $book['id']; ?>" class="badge text-bg-warning float-end ms-2 update-modal" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $book['id']; ?>">Update</a>
                </li>
            <?php endforeach; ?>
            </ul>
                    
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Create New Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/book/create" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="oldImage" id="oldImage" value="<?= $book['images']; ?>">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="writer" class="form-label">Writer</label>
                <input type="text" class="form-control" id="writer" name="writer">
            </div>
            <div class="mb-3">
                <label for="publication-year" class="form-label">Publication Year</label>
                <input type="number" class="form-control" id="publication-year" name="publication-year">
            </div>
            <div class="mb-3">
                <label for="total-pages" class="form-label">Total Pagse</label>
                <input type="number" class="form-control" id="total-pages" name="total-pages">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Photo Here</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create New Book</button>
        </form>
      </div>
    </div>
  </div>
</div>