<?php get_header(); ?>

<div class="vidstyp83"></div>
  <body>
    <div class="container">
        
       
        <div class=" position-relative  ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ol">
                    <li class="breadcrumb-item "><a href="<?php the_permalink(); ?>">Головна сайту</a></li>
                    <li class="breadcrumb-item ol  " aria-current="page"><?php the_title(); ?></li>
                </ol>
            </nav>
        </div>
    </div>
<div class="container mb-4 mt-3 ">
    <div class="fs-2 fw-bold text-dark  "><?php the_title(); ?></div>
   <h2 class="fs-5 fw-light" style="font-family: Inter; word-wrap: break-word;"><?php the_field("krayina"); ?></h2>
      <div class=" mb-3 top-82">    
        <div class="row g-0">
          <div class="col-md-7 img-shadow2">
             <?php the_post_thumbnail( 'full', array('class' => 'card-img') ); ?>
            <div class="row g-0">
            <!-- <?php 

             $images = get_field('gallery');

              if( $images ): ?>
               <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <img class="photki" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </li>
        <?php endforeach; ?>
    </ul>
              <?php endif; ?> -->
                <!-- <div class="col-md-3"><img src="png/image 69.png" class="photki w-100" /></div>
                <div class="col-md-3"> <img src="png/Rectangle 245.png" class="photki w-100" /></div>
                <div class="col-md-3"><img src="png/Rectangle 246.png" class="photki w-100" /></div>
                <div class="col-md-3"><img src="png/Rectangle 247.png" class="photki w-100" /></div> -->
            </div>         
          </div>
          <div class="col-md-5 nigga3 img-shadow">
            <div class="card-body vidstup2 ">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-7 w-100">
                            <h5 class="card-title">Інформація про тур</h5>
                            <p class="card-text mt-1">
                                <span class="fw-700 ">Дати туру: </span>
                                <span class="fw-500">з <?php the_field("z_daty"); ?> <span>до </span> <?php the_field("do_daty"); ?></span>
                            </p>
                            <p class="card-text">
                                <small class="text-body-secondary">
                                     <span class="fw-700">Харчування: </span>
                                     <span class="fw-500"><?php the_field("harchyvanya"); ?></span>
                                     <br>
                                     <span class="fw-700">Туристи: </span>
                                     <span class="fw-500"><?php the_field("turysty"); ?></span>
                                    <br>
                                     <span class="fw-700">Переліт: </span>
                                     <span class="fw-500"><?php the_field("perelit"); ?></span>
                                     <br>
                                     <span class="fw-600">виліт з  <?php the_field("z_daty"); ?>, з <?php the_field("vyyizd_z"); ?> </span><br />
                                </small>
                            </p>
                            <div class="border border-dark mt-3"></div>
                            <div class="mt-3">
                                <span class="fw-300">Ціна за <?php the_field("turysty"); ?></span>
                                <div class="fw-800 fs-4"><?php the_field("price"); ?> <span> грн</span></div>
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                            <!-- інше -->
                        </div>
                    </div>
                </div>    
              <div class="overflow-hidden vidstup">
                <button type="button" class="btn btn-warning   background: #FF6B00; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px mt-3">Відправити заявку</button>
              </div>
           </div>
          </div>
        </div>
      </div>
</div>

<?php
get_footer();
