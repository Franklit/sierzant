<?php



class Breadcrumbs {

  private static function getAncestors( $termId, $taxonomy ) {

      $ancestors = get_ancestors( $termId, $taxonomy );
      $ancestors = array_reverse( $ancestors );
      $ancestorData = [
        'name' => '',
        'link' => '',
      ];

      foreach ( $ancestors as $ancestor ) :

        $ancestor = get_term( $ancestor, $taxonomy );

        if ( ! is_wp_error( $ancestor ) && $ancestor ) :
          $ancestorData['name'] = $ancestor->name;
          $ancestorData['link'] = get_term_link( $ancestor );
        endif;

      endforeach;

    return $ancestorData;

  }

  private static function delimiter() {
    ?>

    <span class='crumbs__delimiter'>/</span>

    <?php
  }

  private static function link( $href, $name ) {
    ?>

    <a class='crumbs__link ' href='<?php echo esc_url( $href ); ?>'><?php echo esc_html( $name ); ?></a>

    <?php
  }

  private static function homeLink() {

    $homeId = get_option( 'page_for_posts' );

    self::link( get_permalink( $homeId ), get_the_title( $homeId ) );

  }

  private static function lastWord( $name = false ) {

    if ( get_query_var( 'paged' ) ) : ?>
      <span class='crumbs__current'>
        <?php printf( esc_html__( '%s (strona %s)', 'sage' ), ( $name ? $name : single_cat_title( '', false ) ), get_query_var( 'paged' ) ); ?>
      </span>
    <?php else : ?>
      <span class='crumbs__current'><?php echo esc_html( $name ? $name : single_cat_title( '', false ) ); ?></span>
    <?php
    endif;

  }

  private static function start() {
    ?>

    <div class='crumbs'>

      <div class='crumbs__container'>

        <nav class='crumbs__links'>

    <?php
  }

  private static function end() {
    ?>

        </nav>

      </div>

    </div>

    <?php
  }

  public static function init()
  {

    self::start();

    global $post;

    $currentBefore = '<span class="crumbs__current">';
    $currentAfter  = '</span>';
  
    if ( ! is_front_page() || is_paged() ) :

      self::link( get_bloginfo( 'url' ), esc_html__( 'Home', 'sage' ) );
      self::delimiter();

    if ( is_category() ) :

      global $wp_query;

      self::homeLink();
      self::delimiter();

      $category  = $wp_query->get_queried_object();
      $catId     = get_category( $category->term_id );
      $parentCat = get_category( $catId->parent );

      if ( $catId->parent !== 0 ) :
        self::link( get_category_link( $parentCat->term_id ), $parentCat->name );
        self::delimiter();
      endif;

      self::lastWord();

    elseif ( is_day() ) :

      $year = get_the_time( 'Y' );

      self::link( get_year_link( $year ), $year );
      self::delimiter();

      self::link( get_month_link( $year, get_the_time( 'm' ) ), get_the_time( 'F' ) );
      self::delimiter();

      self::lastWord( get_the_time( 'd' ) );

    elseif ( is_month() ) :

      $year = get_the_time( 'Y' );

      self::link( get_year_link( $year ), $year );
      self::delimiter();

      self::lastWord( get_the_time( 'F' ) );

    elseif ( is_year() ) :

      self::lastWord( get_the_time( 'Y' ) );

    elseif ( is_singular( 'post' ) ) :

      self::homeLink();
      self::delimiter();

      self::lastWord( get_the_title() );

      elseif ( is_singular( 'specialty' ) ) :

        $href = get_permalink(165);
        $title = get_the_title(165);

        self::link( $href, $title );
      self::delimiter();
        self::lastWord( get_the_title() );

    elseif ( is_home() ) :

      self::lastWord( get_the_title() );

    elseif ( is_attachment() ) :

      $parent    = get_post( $post->post_parent );
      $cat       = get_the_category( $parent->ID )[0];
      $catId     = get_category( $cat->term_id );
      $parentCat = get_category( $catId->parent );

      self::link( get_category_link( $parentCat->term_id ), $parentCat->name );
      self::delimiter();

      // echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      self::link( get_permalink( $parent ), $parent->post_title );
      // echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';

      self::lastWord( get_the_title() );
      // echo $currentBefore;
      // the_title();
      // echo $currentAfter;

    elseif ( is_page() && ! $post->post_parent ) :

      self::lastWord( get_the_title() );

    elseif ( is_page() && $post->post_parent ) :

      $parentId = $post->post_parent;
      $crumbs   = [];

      while ( $parentId ) :
        $page     = get_page( $parentId );
        $crumbs[] = [
          'url' => get_permalink( $page->ID ),
          'title' => get_the_title( $page->ID )
        ];
        $parentId = $page->post_parent;
      endwhile;

      $crumbs = array_reverse( $crumbs );

      foreach ( $crumbs as $crumb ) :
        self::link( $crumb['url'], $crumb['title'] );
        self::delimiter();
      endforeach;

      self::lastWord( get_the_title() );

    elseif ( is_search() ) :

      self::lastWord( 'Wyniki wyszukiwania' );

    elseif ( is_tag() ) :

      self::lastWord( single_tag_title() );

    elseif ( is_author() ) :

      self::homeLink();
      self::delimiter();

      $page = get_pages( [
        'post_type' => 'page',
        'meta_key' => '_wp_page_template',
        'hierarchical' => 0,
        'meta_value' => 'page-templates/zespol.php'
      ] );

      $page = $page[0];

      self::link( get_permalink( $page->ID ), $page->post_title );
      self::delimiter();

      self::lastWord( get_the_author_meta( 'display_name' ) );

    elseif ( is_404() ) :

      self::lastWord( '#404' );

    endif;

  endif;

  self::end();

  }

}