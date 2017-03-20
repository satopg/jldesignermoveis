<?php get_header(); ?>
    
    <div class="container">
      <div class="row">
        <div class="col-md-8 slider-noticia">
          
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              
              <?php
              $posts_slides = new WP_Query(array(
                'category_name' => 'destaques',
                'posts_per_page' => 3
              ));
              $i = 1;
              while($posts_slides->have_posts()) : $posts_slides->the_post();
              
              ?>
              
              <div class="item <?php if($i==1) echo 'active'; ?>">
                <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail('thumbnail-slide'); ?></a>
                <div class="carousel-caption visible-lg">
                  <h3><?php the_title(); ?></h3>
                  <button type="button" class="btn btn-primary"><?php echo rwmb_meta('subtitulo'); ?></button>
                  <p><?php echo rwmb_meta('resumo'); ?></p>
                </div>
              </div>
              <?php $i++; endwhile; wp_reset_postdata();?>
              
            </div>
            <!--fim do slider-->

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!--fechamento carrosel-->
        </div>
        <div class="col-md-4 itens-destaques">
          
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#maisvistos" aria-controls="maisvistos" role="tab" data-toggle="tab">Mais Vistos</a></li>
            <li role="presentation"><a href="#maiscomentados" aria-controls="maiscomentados" role="tab" data-toggle="tab">Mais Comentados</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="maisvistos">
              <ul class="list-group">
                <li class="list-group-item">
                  <span class="badge">14</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                  <span class="badge">14</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                  <span class="badge">14</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                  <span class="badge">14</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                  <span class="badge">14</span>
                    Cras justo odio
                </li>
              </ul>
            </div>
            <!--fechamento do mais vistos-->
            <div role="tabpanel" class="tab-pane" id="maiscomentados">
              <ul class="list-group">
                <li class="list-group-item">
                  <span class="badge">14</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                  <span class="badge">12</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                  <span class="badge">16</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                  <span class="badge">11</span>
                    Cras justo odio
                </li>
                <li class="list-group-item">
                  <span class="badge">10</span>
                    Cras justo odio
                </li>
              </ul>           
            </div>
            <!--fechamento do mais comentados-->
          </div>
          
          <a href=""><img src="http://placehold.it/370x130/999999/cccccc" class="img-responsive"  title="" alt=""></a>
          
        </div>
        <!--fechamento de itens destaques -->
      </div>
    </div>
    <!--fechamento do destaques  -->
    
    <div class="width-full-box">
      <div class="container">
        
        <div class="row">
          <div class="title_box">
            <div class="col-md-9"><h4>Cozinha</h4></div>
            <div class="col-md-3 sala visible-lg"><h4>Sala</h4></div>
          </div>
        </div>
        
        <div class="row">
          
          <!--box de cozinha-->
          <?php
            $posts_slides = new WP_Query(array(
              'category_name' => 'cozinha',
              'posts_per_page' => 3
            ));
            while($posts_slides->have_posts()) : $posts_slides->the_post();
          ?>
          <div class="col-md-3 item-futebol">
            <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail('img-cozinha', array('class'=>'img-responsive img-thumbnail')); ?></a>
            <span><?php echo rwmb_meta('subtitulo'); ?></span>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          </div>
          <?php endwhile; wp_reset_postdata();?>
          <!--fim box cozinha-->
          
          <!--sala-->
          <?php
            $posts_slides = new WP_Query(array(
              'category_name' => 'sala',
              'posts_per_page' => 1
            ));
            while($posts_slides->have_posts()) : $posts_slides->the_post();
          ?>
          <div class="col-md-3 item-futebol sala pull-right">
            <div class="title_box  visible-xs "><h4>Sala</h4></div>
            <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail('img-cozinha', array('class'=>'img-responsive img-thumbnail')); ?></a>
            <span><?php echo rwmb_meta('subtitulo'); ?></span>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          </div>
          <?php endwhile; wp_reset_postdata();?>
          <!--fim sala-->
          
        </div>
        
      </div>
      
    </div>
    <!--fechamento do width-full-box-->
    
    <div class="container">
      <div class="row">
        <div class="title_box">
          <div class="col-md-7"><h4>Mundo do design</h4></div>
          <div class="col-md-5 visible-lg"><h4>Ultimos projetos</h4></div>
        </div>
      </div>  
      <div class="row">
        <div class="col-md-7" id="post-designers">
          
          <!--mundo do design-->
          <?php
            $posts_slides = new WP_Query(array(
              'category_name' => 'designers',
              'posts_per_page' => 2
            ));
            while($posts_slides->have_posts()) : $posts_slides->the_post();
          ?>
          <div class="media">
            <div class="media-left">
              <a href='<?php the_permalink(); ?>'><?php the_post_thumbnail('img-design', array('class'=>'media-object img-responsive img-thumbnail')); ?></a>
            </div>
            <div class="media-body">
              <h1 class="media-heading"><a href="" ><?php the_title() ?></a></h1>
              <button type="button" class="btn btn-primary btn-xs"><?php echo rwmb_meta('subtitulo'); ?></button>
              <p class="visible-lg"><?php echo rwmb_meta('resumo'); ?></p>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata();?>
        </div>
        <!--fechamento post-designers-->
        
        <!--videos-->
        <div class="col-md-5" id="post-projetos">
          <!-- 16:9 aspect ratio -->
          <div class="title_box visible-xs"><h4>Ultimos projetos</h4></div>
          
          <?php
            $posts_slides = new WP_Query(array(
              'category_name' => 'projetos',
              'posts_per_page' => 1
            ));
            while($posts_slides->have_posts()) : $posts_slides->the_post();
          ?>
          <div class="embed-responsive embed-responsive-16by9">
            <?php echo rwmb_meta('oembed', type-oembed); ?>
          </div>
          <?php endwhile; wp_reset_postdata();?>
          
        </div>
        <!--fechamento videos-->
        
        
      </div>
    </div>
    
<?php get_footer(); ?>    