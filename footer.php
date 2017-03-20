<div class="container footer">
      <div class="row">
        
        <!--/sobre nos rodape/-->
        <div class="col-md-4 sobrenos-rodape">
          <div class="title_box">
            <h4>Sobre nos</h4>
          </div>
          <?php
            if(is_active_sidebar('sidebar-sobrenos')){
              dynamic_sidebar('sidebar-sobrenos');
            }
          ?>
        </div>
        <!--fim do sobre nos-->
        
        <!--instagram-->
        <div class="col-md-4 instagram-rodape">
          <div class="title_box">
            <h4>Galerias</h4>
          </div>
          <?php
            if(is_active_sidebar('sidebar-instagram')){
              dynamic_sidebar('sidebar-instagram');
            }
          ?>
        </div>
        <!--fim instagram-->
        
        <!--Link úteis-->
        <div class="col-md-4">
          <div class="title_box">
            <h4>Links úteis</h4>
          </div>
          <ul class="list-unstyled">
                <?php
                  wp_nav_menu( array(
                      'theme_location'    => 'links',
                      'container'         => '',
                      'menu_class'        => 'list-unstyled',
                  ));
                ?>
          </ul>  
        </div>
        <!--Fim Link úteis-->
        
    </div>
    
    <div class="footer-copy">
      <div class="container">
        <div class="row">
          <div class="col-md-12">Direitos autorais | Des. Sato</div>
        </div>
      </div>  
    </div>
    
      
    <!-- modal para cadastro de usuarios -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Minha conta</h4>
          </div>
          <div class="modal-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
              <li role="presentation"><a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">Regras do portal</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content minha-conta">
              
              <div role="tabpanel" class="tab-pane active" id="login">

                <?php
                  if(is_active_sidebar('sidebar-login')){
                    dynamic_sidebar('sidebar-login');
                  }
                ?>
                
              </div> 
              
              <div role="tabpanel" class="tab-pane" id="cadastro">
              
                <?php
                  if(is_active_sidebar('sidebar-regras')){
                    dynamic_sidebar('sidebar-regras');
                  }
                ?>
                
              </div>
            </div>
          
          </div <!--fechamento do modal body-->
        </div>
      </div>
    </div> <!--fechamento da modal cadastro-->
    
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <?php wp_footer(); ?>
      
  </body>
</html>