<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Самая Компактная коляска в мире Compacta YOYA. Аналог: Коляска yoyo или Коляска трость. Вы можете Купить Детскую Прогулочную коляску Yoya на нашем сайте.">
    <meta name="keywords" content="Купить коляску, Детские коляски, Прогулочные коляски, Коляска прогулочная, Коляска трость, Коляска-трость, коляски цены, Купить коляску трость, Коляска yoyo, Детские коляски трости, Yoya, Коляска yoya, Коляски  yoya, Складная коляска, Компактная коляска, Коляска мини, Yoya baby, Купить коляску yoya, Yoya baby коляска, Yoya детские коляски">
    <meta name="author" content="">
    <meta name="yandex-verification" content="8738af9a91016485" />

    	<link rel="icon" href="/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:700|Open+Sans:400,400i,700|Lato:400&amp;subset=cyrillic" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <!-- My CSS -->
   <?php echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/style.min.css" />'; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div id="page" class="site">
	<div class="container-fluid header">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-light">
					<div class="navbar-brand pull-left">
	    					<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">COMPACTA</a></h2>
	    						<?php
								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<p class="site-description"><?php echo $description; ?></p>
								<?php
								endif; 
							?>
	    				</div><!--/.navbar-brand-->
	    				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">&#9776;</button>
	  				<div class="navbar-toggleable-xs" id="exCollapsingNavbar2">
						<?php
						 // Use The new walker
						 wp_nav_menu(array(
						    'menu'            => 'primary',
						    'theme_location'  => 'primary',
						    'container'       => 'div',
						    'container_id'    => 'exCollapsingNavbar2',
						    'container_class' => 'collapse navbar-toggleable-sm',
						    'menu_id'         => false,
						    'menu_class'      => 'nav navbar-nav',
						    'depth'           => 2,
						    'fallback_cb'     => 'bs4navwalker::fallback',
						    'walker'          => new bs4navwalker()
						));
						?>
						<a class="btn btn-primary pull-right" href="#buy" title="Купить">Купить</a>
					</div><!--/.navbar-toggleable-xs  -->
				</nav>
			</div><!-- /.row -->
		</div> <!-- .container -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 header-text">
				<p class="text-muted text-uppercase headline">Compacta Yoya</p>
				<?php 
				// the query
				$query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'p'=>1)); ?>
				<?php if ( $query->have_posts() ) : ?>
					<!-- the loop -->
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<!-- end of the loop -->
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				<div class="text-xs-center"><a href="#buy" title="ВЫБРАТЬ COmpacta" class="btn btn-yellow">ВЫБРАТЬ COmpacta</a></div>
				</div><!--/.header-text  -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<img src="<?php bloginfo('template_url') ?>/img/trolly_header.png" alt="Коляска" class="img-fluid">
				</div>
			</div><!-- /row -->
			<div class="text-xs-center arrow"><a href="#buy" title="Коляска"><img src="<?php bloginfo('template_url');?>/img/arrow.png" class="img-responsive" alt="Коляска"></a></div>
		</div> <!-- /.container -->
	</div> <!-- /.container-fluid -->
	<div class="container">
	<h3 id="adv" class="text-xs-center">Любимый выбор мам по всей России</h3>
	<?php 
	// the query
	$query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'p' => 23 )); ?>
	<?php if ( $query->have_posts() ) : ?>
		<!-- the loop -->
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<h4 class="text-xs-center"><?php the_title(); ?></h4>
			<?php the_content(); ?>
			<div class="row columns">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
					<img src="<?php bloginfo('template_url'); ?>/img/troly-size.png" class="img-responsive" alt="Удобная коляска">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 offset-lg-1">
					<h5><span class="tag tag-pill tag-1">1</span> compacta очень Удобная</h5>
					<h6>Максимум удобства во<br> всех мелочах</h6>
					<p>Compacta Yoya по форме удлинённая, не очень глубокая. Доступ к корзине не затрудняется при опущенной спинке. На задней части капюшона есть небольшой кармашек для мелочей. Коляска оснащена плечевым ремнем, при раскладывании он автоматически «ныряет» в корзинку и не пачкается. 
	Размеры в сложенном виде (ДхШхВ)  50 х 44 х 18 см</p>
				</div>
			</div><!--/.columns  -->
			<div class="row columns">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
					<h5 class="text-xs-right">compacta очень легкая<span class="tag tag-pill tag-2">2</span></h5>
					<h6>Легкая и максимально компактная</h6>
					<p>В сложенном виде коляска Compacta YoYa занимает в два раза меньше места, чем классическая коляска-трость. Место малыша довольно просторное (ширина 32 см, глубина 25 см, высота спинки 45 см), с мягким цветным вкладышем. 
Массу удовольствия доставляет процесс раскладывания коляски – одним легким движением руки собранный «комок» превращается в полноценную прогулочную коляску! А нажав на кнопку фиксатора и потянув за него, вы также изящно сложите коляску в компактную конструкцию, которую сможете переносить на плече, как обычную сумку.<br> Вес коляски всего 5,8 кг.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-lg-1">
					<img src="<?php bloginfo('template_url'); ?>/img/troly-weight.png" class="img-responsive" alt="Легкая коляска">
				</div>
			</div><!--/.columns  -->
			<div class="row columns">
				<h5 class="text-xs-center">COmpacta очень надежная<span class="tag tag-pill tag-3">3</span></h5>
				<h6 class="text-xs-center">Надежная защита от солнца и дождя</h6>
				<p class="text-xs-center">Четыре положения козырька надежно защитят вашего малыша как от солнца так и от дождя.</p>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-xs-center">
					<img src="<?php bloginfo('template_url'); ?>/img/troley-1.png" class="img-responsive" alt="Надежная защита">	
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-xs-center">
					<img src="<?php bloginfo('template_url'); ?>/img/troley-2.png" class="img-responsive" alt="Надежная защита">	
				</div>	
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-xs-center">
					<img src="<?php bloginfo('template_url'); ?>/img/troley-3.png" class="img-responsive" alt="Надежная защита">	
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-xs-center">
					<img src="<?php bloginfo('template_url'); ?>/img/troley-4.png" class="img-responsive" alt="Надежная защита">	
				</div>	
			</div><!--/.columns  -->
			<div class="row columns">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
					<img src="<?php bloginfo('template_url'); ?>/img/troley-comfort.png" class="img-responsive" alt="Комфортная коляска">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 offset-lg-1">
					<h5><span class="tag tag-pill tag-4">4</span> compаста очень комфортная</h5>
					<h6>Максимальный комфорт для вашего малыша</h6>
					<p>Спинка Compacta YoYa многопозиционная, плавно регулируется ремешком. Раскладывается до угла наклона в 150 градусов. Ручка сплошная, поэтому коляска легко управляется одной рукой. Имеется жесткая нерегулируемая подставка для ног.</p>
				</div>
			</div><!--/.columns  -->
			<div class="row columns">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
					<h5 class="text-xs-right">compacta очень безопасная<span class="tag tag-pill tag-2">5</span></h5>
					<h6>Безопасность даже для самых активных</h6>
					<p>Пятитотечные ремни безопасности крепкие и надежные.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-lg-1">
					<img src="<?php bloginfo('template_url'); ?>/img/troley-safe.png" class="img-responsive" alt="Безопасная коляска">
				</div>
			</div><!--/.columns  -->
			<div class="row columns">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
					<img src="<?php bloginfo('template_url'); ?>/img/troley-bright.png" class="img-responsive" alt="Светлая коляска">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 offset-lg-1">
					<h5><span class="tag tag-pill tag-6">6</span> COMPACTA очень Светлая</h5>
					<h6>Ваш малыш всегда под наблюдением</h6>
					<p>В капюшон вшито силиконовое смотровое окошко.</p>
				</div>
			</div><!--/.columns  -->
			<div class="row columns">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
					<h5 class="text-xs-right">compacta очень ударопрочная<span class="tag tag-pill tag-7">7</span></h5>
					<h6>Ударопрочный и надежный каркас </h6>
					<p>Каркас выполнен из ударопрочного, армированного стекловолокном материала DuPont Zytel.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-lg-1">
					<img src="<?php bloginfo('template_url'); ?>/img/troley-shockproof.png" class="img-responsive" alt="Ударопрочная коляска">
				</div>
			</div><!--/.columns  -->
			<div class="row columns">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
					<img src="<?php bloginfo('template_url'); ?>/img/troley-smooth.png" class="img-responsive" alt="Плавная коляска">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 offset-lg-1">
					<h5><span class="tag tag-pill tag-2">8</span> compacta очень плавная</h5>
					<h6>Плавная езда даже по неровной дороге</h6>
					<p>Шасси коляски YoYa вращающиеся на 360° и передние колеса диаметром 13 см автоматически фиксируются при езде по неровной дороге, обеспечивая легкий плавный ход</p>
				</div>
			</div><!--/.columns  -->
			<div class="row columns">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
					<h5 class="text-xs-right"> надежные торомоза<span class="tag tag-pill tag-9">9</span></h5>
					<h6>Отличная тормозная система</h6>
					<p>Небольшая педаль тормоза легко нажимается и также легко поднимается.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 offset-lg-1">
					<img src="<?php bloginfo('template_url'); ?>/img/troley-brake.png" class="img-responsive" alt="Ударопрочная коляска">
				</div>
			</div><!--/.columns  -->
		</div> <!-- /container -->
		<?php endwhile; ?>
		<!-- end of the loop -->
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<div class="container-fluid bg-main">
			<div class="container">
				<h3 class="text-xs-center">Индивидуальный выбор для каждого</h3>
				<h4 class="text-xs-center">Выберите коляску, которая подойдет именно вам </h4>
				<p class="text-xs-center">Вы можете выбрать цвет коляски и рамы, а также необходимо вам количество</p>
				<div class="row block">
					<?php echo do_shortcode('[product_page id="10"]'); ?>
				</div>
			</div>
		</div>
	</div>
<div class="container-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
				<?php 
                // the query
                $query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'p' => 101 )); ?>

                <?php if ( $query->have_posts() ) : ?>
                    <!-- the loop -->
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <h4><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                    <?php endwhile; ?>
                    <!-- end of the loop -->
                <?php endif; ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 offset-lg-2">
				<form action="" method="POST" role="form" id="contact"> 
                    <div class="row">
                        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Ваше имя">
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <input name="email" type="text" class="form-control" id="email" placeholder="Ваш email">
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <textarea name="message" id="message" class="form-control" rows="8" required="required" placeholder="Ваше сообщение"></textarea>           
                        </div>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                            <button type="submit" class="btn btn-yellow">Отправить</button>
                        </div>
                    </div>               
                </form>
			</div>

		</div>
	</div>
</div>
<div class="container-fluid footer-nav">
    <div class="container">
        <?php wp_nav_menu( array( 
                'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
                'container' => 'ul', 
                'container_class' => 'nav navbar-nav',
                'container_id' => ''
                )); ?>
        <div class="navbar-brand text-center">
        <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Compacta</a></h2>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php
            endif; ?>
          </div>
    </div>
</div>
<div class="container-fluid footer-copyright text-center">
    <div class="container">
        <p>Compacta.ca 2016  All right reserved  •  <em>Made with love by</em> <a href="http://clickwebstudio.com">ClickWebStudio.com</a></p>
    </div>
</div>
<?php wp_footer(); ?>    
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script type="text/javascript">
    	jQuery(function($) {
			                $.validator.setDefaults( {
                        submitHandler: function () {
                           $.ajax({
                                type: 'POST',
                                url: "<?php bloginfo('template_url') ?>/contact.php",
                                data: $("#contact").serialize(),
                                beforeSend: function()
                                    {
                                        $("#contact .btn-yellow").attr("disabled", true);
                                        $('#contact .btn-yellow').html('Пожалуйста подождите...');
                                    },
                                success: function(result) {
                                    $('#contact').html(result);
                                }
                                })
                            }});
                         $( "#contact" ).validate( {
                            rules: {
                                name: "required",
                                email: {
                                    required: true,
                                    email: true
                                },
                                message: "required"
                            },
                            messages: {
                                name: "Введите ваше имя",
                                email: "Введите ваш email",
                                message: "Введите ваше сообщение"
                            },
                            errorElement: "em",
                            errorPlacement: function ( error, element ) {
                                // Add the `help-block` class to the error element
                                error.addClass( "help-block" );

                                // Add `has-feedback` class to the parent div.form-group
                                // in order to add icons to inputs
                                element.parents( ".col-xs-12" ).addClass( "has-feedback" );

                                if ( element.prop( "type" ) === "checkbox" ) {
                                    error.insertAfter( element.parent( "label" ) );
                                } else {
                                    error.insertAfter( element );
                                }

                                // Add the span element, if doesn't exists, and apply the icon classes to it.
                                // if ( !element.next( "span" )[ 0 ] ) {
                                //     $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
                                // }
                            },
                            success: function ( label, element ) {
                                // Add the span element, if doesn't exists, and apply the icon classes to it.
                                if ( !$( element ).next( "span" )[ 0 ] ) {
                                    $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
                                }
                            },
                            highlight: function ( element, errorClass, validClass ) {
                                $( element ).parents( ".col-xs-12" ).addClass( "has-error" ).removeClass( "has-success" );
                                $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
                            },
                            unhighlight: function ( element, errorClass, validClass ) {
                                $( element ).parents( ".col-xs-12" ).addClass( "has-success" ).removeClass( "has-error" );
                                $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
                            }
                        } );
    	    jQuery("div.quantity").append('<div class="inc button">+</div><div class="dec button">-</div>');
    	    jQuery(".quantity .button").on("click", function() {

    	      var $button = jQuery(this);
    	      var oldValue = $button.parent().find("input").val();

    	      if ($button.text() == "+") {
    	    	  var newVal = parseFloat(oldValue) + 1;
    	    	} else {
    	       // Don't allow decrementing below zero
    	        if (oldValue > 0) {
    	          var newVal = parseFloat(oldValue) - 1;
    	        } else {
    	          newVal = 0;
    	        }
    	      }

    	      $button.parent().find("input").val(newVal);

    	    });
    	    jQuery(".button.alt.single_add_to_cart_button").on('click',function(e){
    	    	e.preventDefault();
    	    	$.ajax({
    	    	    type: 'POST',
    	    	    url: "<?php bloginfo('template_url') ?>/checkout.php",
    	    	    data: $(".variations_form").serialize(),
                    beforeSend: function()
                        {
                            $(".single_add_to_cart_button").hide();
                            $('.single_loading_button').show();
                        },
    	    	    success: function(result) {
						$('.shipping_form').hide();
						$(".single_add_to_cart_button").show();
                        $('.single_loading_button').hide();
						$('.variations').hide();
						$('.thumbnails').hide();
    	    	        $('.checkout_form').html(result);
						
    	    	    }
        	    });
        	});
    	});
		
    </script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  </body>
</html>
