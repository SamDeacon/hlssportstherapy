<?php
/**
 * Template Name: Availability Page template
 */
?>
<section class="services with-intro-para">
<div class="container">
<?php while (have_posts()) : the_post(); ?>
  <?php # get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<?php 
  $page_meta = get_post_meta( get_the_ID());

  $box_1_heading = $page_meta['_avilability_box_1_title'][0];
  $box_1_col_1_title = $page_meta['_avilability_box_1_header_1'][0];
  $box_1_col_2_title = $page_meta['_avilability_box_1_header_2'][0];
  $box_1_rows = unserialize($page_meta['box_1_group'][0]);
  
  $box_2_heading = $page_meta['_avilability_box_2_title'][0];
  $box_2_col_1_title = $page_meta['_avilability_box_2_header_1'][0];
  $box_2_col_2_title = $page_meta['_avilability_box_2_header_2'][0];
  $box_2_rows = unserialize($page_meta['box_2_group'][0]);

  $box_3_heading = $page_meta['_avilability_box_3_title'][0];
  $box_3_rows = unserialize($page_meta['box_3_group'][0]);


// echo '<pre>' . var_export($page_meta, true) . '</pre>';

//  echo '<br><pre>' . var_export($box_3_rows, true) . '</pre>';
?>

<div class="avilability-tables">
<!-- BOX 1 -->
  <div class="table-box table-1">
    <div class="header">
      <?php echo $box_1_heading; ?>
    </div>
    <div class="sub-headings">
      <div class="cell-1"><?php echo $box_1_col_1_title; ?></div>
      <div class="cell-2"><?php echo $box_1_col_2_title; ?></div>
    </div>
    <?php foreach ($box_1_rows as $key => $row) :?>
    <div class="row-repeat">
      <div class="cell-1"><?php echo $row['column_1_text']; ?></div>
      <div class="cell-2"><?php echo $row['column_2_text']; ?></div>
    </div>
    <?php endforeach; ?>
  </div>
  <!-- BOX 2 -->
  <div class="table-box table-2">
    <div class="header">
      <?php echo $box_2_heading; ?>
    </div>
    <div class="sub-headings">
      <div class="cell-1"><?php echo $box_2_col_1_title; ?></div>
      <div class="cell-2"><?php echo $box_2_col_2_title; ?></div>
    </div>
    <?php foreach ($box_2_rows as $key => $row) :?>
    <div class="row-repeat">
      <div class="cell-1"><?php echo $row['column_1_text']; ?></div>
      <div class="cell-2"><?php echo $row['column_2_text']; ?></div>
    </div>
    <?php endforeach; ?>
  </div>
    <!-- BOX 3 Prices -->
    <div class="table-box table-3">
    <div class="header">
      <?php echo $box_3_heading; ?>
    </div>
    <?php foreach ($box_3_rows as $key => $row) :?>
    <div class="row-repeat">
      <div class="cell-1">
      <?php echo $row['column_1_text']; ?>
      <?php if($row['column_1_text_sub'] != ''): ?>
      <p><?php echo $row['column_1_text_sub'] ?></p>
      <?php endif ?>
      </div>
      <div class="cell-2"><?php echo $row['column_2_text']; ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
<br>
<br>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDqI8XbQz7sDQH1z50yZvI4deMaDR7vBh4"></script>
<div id="map-canvas" style="height:400px; width:100%;"></div>
</div>
</section>
