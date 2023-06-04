<div class="pagination-box">
    <a href="?pagina=<?= $page > 1 ? $page - 1 : 1 ?>"
        class="pagination-box-link pagination-box-link--active">&laquo;</a>

    <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++): ?>
        <a href="?pagina=<?= $page_number ?> " class="pagination-box-link <?= $page_number == $page ? "pagination-box-link--active" : "" ?> ">
            <?= $page_number ?>
        </a>
    <?php endfor; ?>

    <!-- <a href="#" class="pagination-box-link">2</a>
  <a href="#" class="pagination-box-link pagination-box-link--active">3</a>
  <a href="#" class="pagination-box-link">4</a>
  <a href="#" class="pagination-box-link">5</a>
  <a href="#" class="pagination-box-link">6</a>
  <span class="dots">...</span>
  <a href="#" class="pagination-box-link">23</a> -->

    <a href="?pagina=<?= $page < $total_pages ? $page + 1 : $total_pages ?>"
        class="pagination-box-link pagination-box-link--active">&raquo;</a>
</div>