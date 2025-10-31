<?php
/**
 * Template hiển thị bài viết
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
?>

<div class="post-card-wrapper">
  <article <?php post_class('post-card-article'); ?>>
    <div class="post-card">
      
      <div class="post-thumb">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium_large', ['class' => 'post-img']); ?>
          <?php else : ?>
            <img src="https://via.placeholder.com/300x200?text=No+Image" alt="<?php the_title(); ?>" class="post-img" />
          <?php endif; ?>
        </a>
      </div>

      <div class="post-date">
        <div class="date-day"><?php echo get_the_date('d'); ?></div>
        <div class="date-month">THÁNG <?php echo get_the_date('m'); ?></div>
        <div class="date-year"><?php echo get_the_date('Y'); ?></div>
      </div>

      <div class="post-body">
        <h2 class="post-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        
        <div class="post-meta">
          <span class="post-cats">
            Categories: 
            <?php
            $categories = get_the_category();
            if ($categories) {
              foreach($categories as $cat) {
                echo '<span class="cat-badge">' . esc_html($cat->name) . '</span> ';
              }
            }
            ?>
          </span>
        </div>
        
        <div class="post-excerpt">
          <?php echo wp_trim_words(get_the_excerpt(), 28, '...'); ?>
        </div>
      </div>
      
    </div>
  </article>
</div>

<style>
.post-card-wrapper {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto 30px auto;
  padding: 0 15px;
}

.post-card-article {
  margin: 0;
}

.post-card {
  display: flex;
  align-items: stretch;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.08);
  overflow: hidden;
  transition: box-shadow 0.3s ease;
}

.post-card:hover {
  box-shadow: 0 4px 20px rgba(0,0,0,0.12);
}

.post-thumb {
  flex: 0 0 280px;
  max-width: 280px;
  min-height: 200px;
  overflow: hidden;
  background: #f5f5f5;
}

.post-img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  display: block;
  transition: transform 0.3s ease;
}

.post-thumb:hover .post-img {
  transform: scale(1.05);
}

.post-date {
  flex: 0 0 90px;
  max-width: 90px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border-right: 3px solid #1976d2;
  background: #fafafa;
  padding: 15px 5px;
  text-align: center;
}

.date-day {
  font-size: 2.5rem;
  font-weight: 700;
  color: #1976d2;
  line-height: 1;
}

.date-month {
  font-size: 0.85rem;
  color: #666;
  text-transform: uppercase;
  margin-top: 4px;
  letter-spacing: 0.5px;
}

.date-year {
  font-size: 0.9rem;
  color: #999;
  margin-top: 2px;
}

.post-body {
  flex: 1;
  padding: 20px 25px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.post-title {
  font-size: 1.3rem;
  font-weight: 700;
  color: #1a237e;
  margin: 0 0 10px 0;
  line-height: 1.4;
}

.post-title a {
  color: #1a237e;
  text-decoration: none;
  transition: color 0.2s ease;
}

.post-title a:hover {
  color: #1976d2;
  text-decoration: underline;
}

.post-meta {
  margin-bottom: 10px;
}

.post-cats {
  font-size: 0.95rem;
  color: #1976d2;
  font-weight: 500;
}

.cat-badge {
  display: inline-block;
  background: #e3f2fd;
  color: #1976d2;
  padding: 3px 10px;
  border-radius: 4px;
  font-size: 0.9rem;
  margin-left: 5px;
  font-weight: 600;
}

.post-excerpt {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
}

@media (max-width: 992px) {
  .post-thumb {
    flex: 0 0 220px;
    max-width: 220px;
    min-height: 160px;
  }
  
  .post-img {
    height: 160px;
  }
  
  .post-date {
    flex: 0 0 75px;
    max-width: 75px;
  }
  
  .date-day {
    font-size: 2rem;
  }
  
  .post-body {
    padding: 15px 18px;
  }
  
  .post-title {
    font-size: 1.15rem;
  }
}

@media (max-width: 768px) {
  .post-card {
    flex-direction: column;
  }
  
  .post-thumb {
    flex: none;
    max-width: 100%;
    min-height: 180px;
  }
  
  .post-img {
    height: 180px;
  }
  
  .post-date {
    flex: none;
    max-width: 100%;
    flex-direction: row;
    justify-content: center;
    gap: 10px;
    border-right: none;
    border-bottom: 3px solid #1976d2;
    padding: 12px 0;
  }
  
  .date-day {
    font-size: 1.8rem;
  }
  
  .date-month,
  .date-year {
    margin-top: 0;
    align-self: flex-end;
    padding-bottom: 3px;
  }
  
  .post-body {
    padding: 15px;
  }
}
</style>
