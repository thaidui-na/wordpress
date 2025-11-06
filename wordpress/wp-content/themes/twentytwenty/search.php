<?php
/**
 * Custom Search Template (Theo mẫu thầy - đầy đủ 13, 5, 14, 15)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
get_header();
?>

<style>
/* ===============================
   SEARCH PAGE LAYOUT
   =============================== */
.search-page {
    background-color: #f9f9f9;
    padding: 40px 0 60px;
    font-family: "Segoe UI", sans-serif;
}
.container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 20px;
}
.search-layout {
    display: grid;
    grid-template-columns: 1fr;
    gap: 25px;
}
.search-top-row {
    display: grid;
    grid-template-columns: minmax(0, 2.6fr) minmax(0, 2.8fr) minmax(0, 1.2fr);
    gap: 24px;
    align-items: start;
}
.search-top-row > .sidebar-left {
    grid-column: 1 / 2;
}
.search-top-row > .search-results-box {
    grid-column: 2 / 3;
    align-self: stretch;
}
.search-top-row > .sidebar-right {
    grid-column: 3 / 4;
    align-self: stretch;
}
@media (max-width: 992px) {
    .search-top-row {
        grid-template-columns: 1fr;
    }
}

/* ===============================
   MODULE 13 - BÀI VIẾT NỔI BẬT (full-width strip)
   =============================== */
.sidebar-left {
    height: 100%;
    background: #ffffff;
    box-shadow: 0 6px 18px rgba(15, 23, 42, 0.06);
    border-radius: 16px;
    padding: 26px 20px 28px;
    overflow: hidden;
}

.sidebar-left h4 {
    font-size: 18px;
    font-weight: 700;
    text-transform: uppercase;
    color: #0f172a;
    margin: 0 0 16px;
    padding: 0;
}

/* Lưới bài viết nổi bật */
.sidebar-left .featured-posts-grid {
    display: flex;
    gap: 16px;
    flex-wrap: nowrap;
    padding-right: 4px;
    overflow-x: auto;
    scrollbar-width: thin;
}
.sidebar-left .featured-posts-grid::-webkit-scrollbar {
    height: 6px;
}
.sidebar-left .featured-posts-grid::-webkit-scrollbar-thumb {
    background: rgba(15, 23, 42, 0.18);
    border-radius: 999px;
}
.sidebar-left .featured-posts-grid::-webkit-scrollbar-track {
    background: transparent;
}

/* Card bài viết */
.featured-post {
    background: #fdfdfd;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(15, 23, 42, 0.08);
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    flex: 0 0 auto;
}
.featured-post a {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 12px;
    padding: 14px;
    text-decoration: none;
    color: inherit;
    width: 150px;
    min-width: 150px;
}
.featured-post:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 20px rgba(15, 23, 42, 0.12);
}

/* Ảnh bài viết */
.featured-thumb {
    width: 100%;
    height: 120px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: inset 0 0 0 1px rgba(15, 23, 42, 0.06);
}
.featured-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Thông tin bài viết */
.featured-body {
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.featured-body h5 {
    font-size: 14px;
    color: #1d4ed8;
    font-weight: 600;
    margin-bottom: 6px;
}
.featured-body p {
    font-size: 12px;
    color: #4b5563;
    line-height: 1.45;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Responsive */
@media (max-width: 992px) {
    .sidebar-left {
        padding: 20px 20px 24px;
    }
    .sidebar-left .featured-posts-grid {
        padding: 0 20px 10px;
        flex-wrap: wrap;
        justify-content: center;
        overflow-x: visible;
    }
    .sidebar-left h4 {
        padding: 0 20px;
    }
    .search-top-row > .sidebar-left,
    .search-top-row > .search-results-box,
    .search-top-row > .sidebar-right {
        grid-column: 1 / -1;
    }
}
@media (max-width: 600px) {
    .featured-post a {
        width: 100%;
    }
    .featured-thumb {
        width: 100%;
        height: 180px;
    }
}



/* ===============================
   MODULE 5 - KẾT QUẢ TÌM KIẾM
   =============================== */
.search-results-box {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}
.search-results-box h2 {
    text-align: center;
    font-size: 22px;
    margin-bottom: 25px;
}

.search-results-list {
    display: flex;
    flex-direction: column;
    gap: 25px;
}
.search-row {
    display: flex;
    border-radius: 18px;
    background: #fff;
    overflow: hidden;
    border: 1px solid rgba(59,130,246,0.1);
    box-shadow: 0 10px 28px rgba(15,76,129,0.08);
    transition: all 0.25s ease;
}
.search-row:hover {
    transform: translateY(-4px);
    box-shadow: 0 18px 40px rgba(15,76,129,0.14);
}
.search-thumb {
    flex: 0 0 260px;
    background: #f3f4f6;
}
.search-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.search-body {
    flex: 1;
    padding: 28px 36px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.search-date-box {
    min-width: 82px;
    border-radius: 16px;
    border: 1px solid rgba(59,130,246,0.25);
    padding: 10px 14px;
    text-align: center;
    color: #1d4ed8;
    box-shadow: 0 6px 20px rgba(59,130,246,0.1);
    font-weight: 600;
}
.date-day {
    font-size: 1.8rem;
}
.date-month, .date-year {
    display: block;
    font-size: 0.75rem;
}
.search-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
}
.search-title a {
    color: inherit;
    text-decoration: none;
}
.search-title a:hover {
    color: #1d4ed8;
}
.search-desc {
    font-size: 0.94rem;
    color: #374151;
    line-height: 1.7;
}

/* Responsive cho module 5 */
@media (max-width: 768px) {
    .search-row {
        flex-direction: column;
    }
    .search-thumb {
        flex: none;
        width: 100%;
        height: 200px;
    }
    .search-body {
        padding: 20px;
    }
}

/* ===============================
   MODULE 14 - BÌNH LUẬN NỔI BẬT
   =============================== */
.sidebar-right {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
}
.sidebar-right h4 {
    font-size: 18px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 20px;
}
.comment-box {
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.comment {
    display: flex;
    gap: 10px;
    background: #f9f9f9;
    border-radius: 6px;
    padding: 10px;
}
.comment.reply {
    margin-left: 40px;
    background: #f2f2f2;
}
.comment .avatar img {
    border-radius: 50%;
}
.comment .content strong {
    font-weight: bold;
    color: #333;
}
.comment .content p {
    font-size: 14px;
    color: #444;
    margin: 5px 0;
}
.comment .content a {
    font-size: 13px;
    color: #007bff;
}

/* ===============================
   MODULE 15 - LATEST NEWS
   =============================== */
.latest-news-box {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 6px 24px rgba(15, 23, 42, 0.08);
    padding: 36px 48px;
    margin-top: 40px;
    grid-column: 1 / -1;
    position: relative;
}
.latest-news-box h2 {
    font-size: 22px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 28px;
    position: relative;
}
.latest-news-box h2::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -14px;
    width: 72px;
    height: 3px;
    background: #1d4ed8;
    border-radius: 999px;
}
.latest-news-timeline {
    position: relative;
    padding-left: 24px;
}
.latest-news-timeline::before {
    content: "";
    position: absolute;
    left: 10px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #c7d2fe;
}
.news-item {
    position: relative;
    padding: 18px 0 18px 32px;
}
.news-item:not(:last-child) {
    border-bottom: 1px solid rgba(148, 163, 184, 0.25);
}
.news-item::before {
    content: "";
    position: absolute;
    left: 3px;
    top: 26px;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    border: 3px solid #1d4ed8;
    background: #fff;
    box-shadow: none;
}
.news-item h3 {
    font-size: 18px;
    margin: 0 0 6px;
}
.news-title {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #1d4ed8;
    font-weight: 600;
    text-decoration: none;
}
.news-title:hover {
    text-decoration: underline;
}
.news-meta {
    display: flex;
    align-items: baseline;
    gap: 12px;
    margin-bottom: 6px;
    width: 100%;
}
.news-title {
    flex: 1;
}
.news-date {
    font-size: 14px;
    color: #1d4ed8;
    font-weight: 600;
    text-align: right;
    flex-shrink: 0;
}
.news-excerpt {
    font-size: 14px;
    color: #4a5568;
    line-height: 1.6;
    margin: 0;
}

/* ===============================
   PHÂN TRANG
   =============================== */
.pagination {
    margin-top: 30px;
    text-align: center;
}
</style>

<section class="search-page">
    <div class="container">
        <div class="search-layout">
            <div class="search-top-row">

                <!-- MODULE 13 -->
                <div class="sidebar-left">
                    <h4>Bài viết nổi bật</h4>
                    <div class="featured-posts-grid">
                    <?php
                    $featured_posts = get_posts([
                        'numberposts' => 3,
                        'post_status' => 'publish'
                    ]);
                    foreach ($featured_posts as $post) :
                    ?>
                        <div class="featured-post">
                            <a href="<?php echo get_permalink($post->ID); ?>">
                                <div class="featured-thumb">
                                    <?php if (has_post_thumbnail($post->ID)) :
                                        echo get_the_post_thumbnail($post->ID, 'medium_large');
                                    else : ?>
                                        <img src="https://via.placeholder.com/400x250?text=No+Image" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="featured-body">
                                    <h5><?php echo esc_html($post->post_title); ?></h5>
                                    <p><?php echo wp_trim_words(get_the_excerpt($post->ID), 15, '...'); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>

                <!-- MODULE 5 -->
                <div class="search-results-box">
                    <h2>Kết quả tìm kiếm cho: "<strong><?php echo get_search_query(); ?></strong>"</h2>
                    <?php if (have_posts()) : ?>
                        <div class="search-results-list">
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="search-row">
                                    <div class="search-thumb">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium_large');
                                            } else {
                                                echo '<img src="https://via.placeholder.com/400x250?text=No+Image" alt="">';
                                            } ?>
                                        </a>
                                    </div>
                                    <div class="search-body">
                                        <div class="search-date-box">
                                            <span class="date-day"><?php echo get_the_date('d'); ?></span>
                                            <span class="date-month">TH<?php echo get_the_date('m'); ?></span>
                                            <span class="date-year"><?php echo get_the_date('Y'); ?></span>
                                        </div>
                                        <h3 class="search-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="search-desc"><?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>

                        <div class="pagination">
                            <?php the_posts_pagination([
                                'mid_size' => 2,
                                'prev_text' => __('← Trước'),
                                'next_text' => __('Sau →'),
                            ]); ?>
                        </div>
                    <?php else : ?>
                        <p>Không tìm thấy kết quả phù hợp.</p>
                    <?php endif; ?>
                </div>

                <!-- MODULE 14 -->
                <div class="sidebar-right">
                    <h4>Bình luận nổi bật</h4>
                    <div class="comment-box">
                        <?php
                        $recent_comments = get_comments([
                            'number' => 5,
                            'status' => 'approve'
                        ]);
                        if ($recent_comments) :
                            foreach ($recent_comments as $comment) :
                                $avatar = get_avatar($comment->comment_author_email, 45);
                                $author = $comment->comment_author;
                                $excerpt = wp_trim_words($comment->comment_content, 15, '...');
                                $post_link = get_permalink($comment->comment_post_ID);
                        ?>
                                <div class="comment">
                                    <div class="avatar"><?php echo $avatar; ?></div>
                                    <div class="content">
                                        <strong><?php echo esc_html($author); ?></strong>
                                        <p><?php echo esc_html($excerpt); ?></p>
                                        <a href="<?php echo esc_url($post_link); ?>">Xem bài viết</a>
                                    </div>
                                </div>
                        <?php endforeach; else : echo '<p>Chưa có bình luận nào.</p>'; endif; ?>
                    </div>
                </div>

            </div>

            <!-- MODULE 15 -->
            <div class="latest-news-box">
                <h2>Latest News</h2>
                <div class="latest-news-timeline">
                <?php
                $recent_posts = get_posts(['numberposts' => 3, 'post_status' => 'publish']);
                foreach ($recent_posts as $post) :
                ?>
                    <div class="news-item">
                        <div class="news-meta">
                            <a href="<?php echo get_permalink($post->ID); ?>" class="news-title"><?php echo esc_html($post->post_title); ?></a>
                            <span class="news-date"><?php echo get_the_date('d F, Y', $post->ID); ?></span>
                        </div>
                        <p class="news-excerpt"><?php echo wp_trim_words(get_the_excerpt($post->ID), 24, '...'); ?></p>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
