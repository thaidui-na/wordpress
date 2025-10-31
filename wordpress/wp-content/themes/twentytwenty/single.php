<?php
/**
 * Custom Single Post Template (No Image - Clean News Style)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */

get_header();
?>

<style>
/* ===============================
   SINGLE POST PAGE - CLEAN STYLE
   =============================== */
.single-layout {
    background-color: #f5f6fa;
    padding: 70px 0;
    font-family: "Segoe UI", sans-serif;
}

/* Card tổng */
.post-box {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
    padding: 40px;
}

/* ===============================
   BÀI VIẾT CHÍNH (Không có ảnh)
   =============================== */
.news-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    padding: 30px 35px;
    margin-bottom: 40px;
    position: relative;
}

/* Ô ngày tròn vàng */
.news-card .date-circle {
    position: absolute;
    top: 20px;
    right: 25px;
    background: #ffdf63;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    color: #222;
    font-weight: bold;
    text-align: center;
    line-height: 1.2;
    box-shadow: 0 3px 6px rgba(0,0,0,0.15);
    border: 2px solid #fff;
}
.news-card .date-circle .day {
    font-size: 18px;
    margin-top: 8px;
}
.news-card .date-circle .month {
    font-size: 11px;
    text-transform: uppercase;
}

/* Tiêu đề */
.news-card h1 {
    font-size: 24px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 15px;
    padding-right: 80px; /* chừa khoảng trống cho ô ngày */
}

/* Meta */
.news-card .meta {
    font-size: 14px;
    color: #777;
    margin-bottom: 15px;
}

/* Nội dung */
.news-card .text {
    font-size: 16px;
    color: #333;
    line-height: 1.8;
}
.news-card .text p {
    margin-bottom: 15px;
}
.news-card .text em {
    color: #666;
}

/* Nguồn */
.news-card .source {
    text-align: right;
    font-style: italic;
    color: #555;
    font-size: 14px;
    margin-top: 10px;
}

/* ===============================
   SIDEBAR TRÁI
   =============================== */
.sidebar-left {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    padding: 20px;
}
.sidebar-left h5 {
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 15px;
    color: #011210ff;
}

/* ===============================
   SIDEBAR PHẢI (THEO MẪU MỚI)
   =============================== */
.sidebar-right {
  background: #45c2cb; /* Xanh ngọc giống mẫu */
  border-radius: 8px;
  color: #fff;
  padding: 0;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  overflow: hidden;
  font-family: "Segoe UI", sans-serif;
}

/* Danh sách bài viết */
.sidebar-right .recent-posts {
  padding: 15px 20px;
}

.sidebar-right .recent-item {
  display: flex;
  align-items: center;
  border-bottom: 1px solid rgba(255,255,255,0.25);
  padding: 10px 0;
}
.sidebar-right .recent-item:last-child {
  border-bottom: none;
}

/* Ô ngày tháng */
.sidebar-right .recent-date {
  text-align: center;
  width: 45px;
  margin-right: 15px;
  font-weight: 600;
  line-height: 1.2;
  color: #fff;
}
.sidebar-right .recent-date .day {
  font-size: 16px;
}
.sidebar-right .recent-date .month {
  font-size: 11px;
  opacity: 0.9;
}

/* Tiêu đề bài viết */
.sidebar-right a {
  color: #fff;
  font-weight: 500;
  text-decoration: none;
  font-size: 0.9rem;
  transition: color 0.2s;
}
.sidebar-right a:hover {
  color: #ffe97f;
  text-decoration: underline;
}

/* Dòng “Xem tất cả tin tức” */
.sidebar-right .view-all {
  background: rgba(255,255,255,0.15);
  text-align: center;
  padding: 10px 0;
  font-weight: bold;
  text-transform: uppercase;
  color: #fff;
  border-top: 1px solid rgba(255,255,255,0.2);
  transition: background 0.2s;
}
.sidebar-right .view-all:hover {
  background: rgba(255,255,255,0.25);
}

/* ===============================
   PREV / NEXT POSTS
   =============================== */
.custom-prev-next {
    margin-top: 50px;
    padding-top: 25px;
    border-top: 1px solid #eee;
}
.date-box {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
    width: 55px;
    height: 55px;
    text-align: center;
    line-height: 1.2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-weight: bold;
    font-size: 15px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.05);
}
.date-box span {
    font-size: 11px;
    color: #888;
}
.title-link {
    text-decoration: none;
    font-size: 16px;
    color: #222;
    font-weight: 500;
}
.title-link:hover {
    color: #007bff;
    text-decoration: underline;
}

/* ===============================
   COMMENT SECTION
   =============================== */
.comment-section {
    margin-top: 60px;
    padding-top: 30px;
    border-top: 1px solid #eee;
}
.comment-section h3 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
}
</style>

<section class="single-layout">
    <div class="container">
        <div class="row gy-4">

            <!-- SIDEBAR TRÁI -->
            <div class="col-md-3">
                <div class="sidebar-left">
                    <h5>Categories</h5>
                    <?php if (is_active_sidebar('sidebar-1')) : ?>
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    <?php else : ?>
                        <p class="text-muted">No categories available.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- NỘI DUNG CHÍNH -->
            <div class="col-md-6">
                <div class="post-box">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php 
                            $day = get_the_date('d');
                            $month = strtoupper(date_i18n('M', strtotime(get_the_date('Y-m-d'))));
                        ?>

                        <div class="news-card">
                            <div class="date-circle">
                                <div class="day"><?php echo esc_html($day); ?></div>
                                <div class="month"><?php echo esc_html($month); ?></div>
                            </div>

                            <h1><?php the_title(); ?></h1>
                            <div class="meta">
                                Đăng ngày: <?php echo get_the_date('d/m/Y'); ?> | 
                                Tác giả: <?php the_author(); ?>
                            </div>

                            <div class="text">
                                <?php the_content(); ?>
                            </div>

                            <div class="source">(Theo <?php echo get_bloginfo('name'); ?>)</div>
                        </div>

                        <!-- PREV / NEXT POSTS -->
                        <div class="custom-prev-next">
                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            <?php if ($prev_post): ?>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="date-box me-3">
                                        <strong><?php echo get_the_date('d', $prev_post); ?></strong>
                                        <span><?php echo get_the_date('m', $prev_post); ?></span>
                                    </div>
                                    <a href="<?php echo get_permalink($prev_post); ?>" class="title-link">
                                        <?php echo get_the_title($prev_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php if ($next_post): ?>
                                <div class="d-flex align-items-center">
                                    <div class="date-box me-3">
                                        <strong><?php echo get_the_date('d', $next_post); ?></strong>
                                        <span><?php echo get_the_date('m', $next_post); ?></span>
                                    </div>
                                    <a href="<?php echo get_permalink($next_post); ?>" class="title-link">
                                        <?php echo get_the_title($next_post); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- COMMENT SECTION -->
                        <div class="comment-section">
                            <?php comments_template(); ?>
                        </div>

                    <?php endwhile; endif; ?>
                </div>
            </div>

          <!-- SIDEBAR PHẢI -->
<div class="col-md-3">
  <div class="sidebar-right">
    <div class="recent-posts">
      <?php
      $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 3,
        'post_status' => 'publish'
      ));
      if (!empty($recent_posts)) :
        foreach ($recent_posts as $post) : ?>
          <div class="recent-item">
            <div class="recent-date">
              <div class="day"><?php echo get_the_date('d', $post['ID']); ?></div>
              <div class="month"><?php echo get_the_date('m', $post['ID']); ?></div>
            </div>
            <a href="<?php echo get_permalink($post['ID']); ?>">
              <?php echo esc_html($post['post_title']); ?>
            </a>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <p>Chưa có bài viết nào.</p>
      <?php endif; ?>
    </div>

    <div class="view-all">
      <a href="<?php echo get_category_link(get_cat_ID('Tin tức')); ?>" style="color: inherit; text-decoration: none;">
  Xem tất cả tin tức
</a>

    </div>
  </div>
</div>


        </div>
    </div>
</section>

<?php get_footer(); ?>
