<?php
/**
 * Hiển thị bài viết dạng thẻ tin tức (ngày tháng vuông - ngang hàng với tiêu đề)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
?>

<article <?php post_class('news-card-wrapper'); ?>>
  <div class="news-card">

    <!-- Ảnh bài viết -->
    <div class="news-thumb">
      <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('large', ['class' => 'news-img']); ?>
        <?php else : ?>
          <img src="https://via.placeholder.com/400x260?text=No+Image" alt="<?php the_title(); ?>" class="news-img" />
        <?php endif; ?>
      </a>
    </div>

    <!-- Nội dung -->
    <div class="news-content">

      <!-- Tiêu đề và ngày tháng cùng hàng -->
      <div class="news-header">
        <div class="news-date-box">
          <span class="news-day"><?php echo get_the_date('d'); ?></span>
          <div class="news-date-meta">
            <span class="news-month">THÁNG <?php echo get_the_date('m'); ?></span>
            <span class="news-year"><?php echo get_the_date('Y'); ?></span>
          </div>
        </div>
        <h2 class="news-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
      </div>

      <!-- Danh mục -->
      <div class="news-meta">
        <span class="meta-label">Categories:</span>
        <span class="meta-cats">
          <?php
          $categories = get_the_category();
          if ($categories) {
            $links = [];
            foreach ($categories as $cat) {
              $links[] = '<a href="' . esc_url(get_category_link($cat->term_id)) . '" class="cat-link">' . esc_html($cat->name) . '</a>';
            }
            echo implode('&nbsp;', $links);
          }
          ?>
        </span>
      </div>

      <!-- Tóm tắt -->
      <div class="news-excerpt">
        <?php echo wp_trim_words(get_the_excerpt(), 35, '...'); ?>
      </div>

    </div>
  </div>
</article>

<style>
/* ==== Tổng thể ==== */
.news-card-wrapper {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto 36px auto;
  padding: 0 40px;
  box-sizing: border-box;
}

.news-card {
  display: flex;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 8px 22px rgba(0, 0, 0, 0.05);
  overflow: hidden;
  border: 1px solid rgba(148, 163, 184, 0.22);
  transition: 0.3s;
}
.news-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 16px 35px rgba(0, 0, 0, 0.08);
}

/* ==== Ảnh ==== */
.news-thumb {
  flex: 0 0 300px;
  max-width: 300px;
  overflow: hidden;
  background: #f1f5f9;
}
.news-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}
.news-thumb:hover .news-img {
  transform: scale(1.05);
}

/* ==== Nội dung ==== */
.news-content {
  flex: 1;
  padding: 26px 36px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* ==== Header (ngày + tiêu đề) ==== */
.news-header {
  display: flex;
  align-items: center;
  gap: 20px;
  margin-bottom: 10px;
}

/* ==== Ô ngày tháng vuông ==== */
.news-date-box {
  background: #eaf0ff;
  border: 1px solid rgba(59, 130, 246, 0.35);
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(37, 99, 235, 0.1);
  padding: 10px 14px;
  display: flex;
  align-items: center;
  gap: 10px;
  color: #1d4ed8;
  flex-shrink: 0;
}

.news-day {
  font-size: 1.8rem;
  font-weight: 700;
  line-height: 1;
}

.news-date-meta {
  display: flex;
  flex-direction: row;
  gap: 4px;
  font-size: 0.8rem;
  font-weight: 600;
  color: #475569;
  text-transform: uppercase;
}

/* ==== Tiêu đề ==== */
.news-title {
  font-size: 1.45rem;
  font-weight: 700;
  color: #0f172a;
  margin: 0;
  line-height: 1.4;
}
.news-title a {
  color: inherit;
  text-decoration: none;
}
.news-title a:hover {
  color: #1d4ed8;
}

/* ==== Danh mục ==== */
.news-meta {
  font-size: 0.85rem;
  margin: 8px 0;
  color: #334155;
}
.meta-label {
  color: #94a3b8;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  font-weight: 700;
}
.cat-link {
  color: #1d4ed8;
  font-weight: 600;
}
.cat-link:hover {
  text-decoration: underline;
}

/* ==== Tóm tắt ==== */
.news-excerpt {
  font-size: 0.95rem;
  color: #334155;
  line-height: 1.7;
  max-width: 720px;
}

/* ==== Responsive ==== */
@media (max-width: 992px) {
  .news-card {
    flex-direction: column;
  }
  .news-thumb {
    max-width: 100%;
    height: 240px;
  }
  .news-content {
    padding: 20px;
  }
  .news-header {
    flex-direction: column;
    align-items: flex-start;
  }
}
</style>
