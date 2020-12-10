<div class="news-list-sharing-overlay news-list-sharing-overlay_color-news">
  <button class="news-list-sharing-overlay__close">X</button>          
  <span class="news-list-sharing-overlay__text">matéria</span>
  <span class="news-list-sharing-overlay__title"><?= $noticia->title; ?></span>
  <span class="news-list-sharing-overlay__content">
    <div class="header">
      COMPARTILHAR:
      <div class="icons news-list-sharing-overlay__content_color-news_icons">
        <?php include BASE_URL . '/includes/share.inc.php';?>
      </div>
    </div>
    <button aria-label="COPIAR LINK DA MATÉRIA" data-clipboard-text="<?= $noticia->url; ?>"
      class="btn btn-link footer news-list-sharing-overlay__link news-list-sharing-clipboard news-list-sharing-overlay__content_color-news__footer">
      COPIAR LINK DA MATÉRIA
    </button>
  </span>
</div>