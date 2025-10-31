<?php
/**
 * Bố cục hiển thị bài viết đẹp cân đối, rõ chữ, có ảnh nhỏ bên trái
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
?>

<div class="container my-3">
  <div class="news-item-wrapper">
    <div class="news-item d-flex flex-wrap align-items-start border-bottom pb-3 mb-4 shadow-sm rounded-3 bg-white">

      <!-- Thumbnail -->
      <div class="news-left me-3 mb-3 mb-md-0">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['class' => 'news-img rounded']); ?>
          <?php else : ?>
            <img src="https://via.placeholder.com/260x160?text=No+Image"
                 alt="<?php the_title(); ?>" class="news-img rounded">
          <?php endif; ?>
        </a>
      </div>

      <!-- Nội dung -->
      <div class="news-right flex-grow-1 pe-md-3">
        <div class="d-flex align-items-start mb-2">
          <!-- Ngày tháng -->
          <div class="news-datebox text-center me-3">
            <div class="news-date fw-bold fs-4 text-primary"><?php echo get_the_date('d'); ?></div>
            <div class="news-month small text-uppercase text-secondary">
              Tháng <?php echo get_the_date('m'); ?>
            </div>
            <div class="news-year small text-muted"><?php echo get_the_date('Y'); ?></div>
          </div>

          <!-- Tiêu đề + mô tả -->
          <div class="news-info">
            <a href="<?php the_permalink(); ?>" class="news-title fw-bold text-dark d-block mb-2" style="font-size: 1.2rem;">
              <?php the_title(); ?>
            </a>
            <div class="news-category text-muted mb-2" style="font-size: 0.95rem;">
              Chuyên mục: <strong class="text-primary"><?php the_category(', '); ?></strong>
            </div>
            <p class="news-desc text-secondary mb-2" style="font-size: 1rem; line-height: 1.6;">
              <?php echo wp_trim_words(get_the_excerpt(), 32, '...'); ?>
            </p>

            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm mt-1">Đọc thêm →</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<style>
/* ======= Giao diện tin tức cân đối & rõ chữ ======= */
.news-item-wrapper {
  transition: all 0.3s ease;
}

.news-item {
  padding: 18px;
}

.news-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.news-left {
  flex: 0 0 250px;
}

.news-img {
  width: 100%;
  height: 160px;
  object-fit: cover;
  border-radius: 8px;
}

.news-datebox {
  width: 70px;
  min-width: 70px;
  border-right: 2px solid #0d6efd;
  padding-right: 12px;
  line-height: 1.3;
}

.news-title:hover {
  color: #0d6efd;
  text-decoration: underline;
}

.news-info {
  flex: 1;
}

.btn-outline-primary {
  font-size: 0.85rem;
  padding: 3px 10px;
  border-radius: 4px;
}

/* Responsive */
@media (max-width: 768px) {
  .news-item {
    flex-direction: column;
    padding: 12px;
  }
  .news-left {
    width: 100%;
    margin-bottom: 10px;
  }
  .news-img {
    height: 200px;
  }
  .news-datebox {
    border-right: none;
    border-bottom: 2px solid #0d6efd;
    width: 100%;
    margin-bottom: 8px;
    padding-bottom: 5px;
  }
}
</style>
