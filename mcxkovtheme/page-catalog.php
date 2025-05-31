<?php get_header( ); ?>

<script>

 $( function() {

 $( "#datepicker" ).datepicker({

  minDate: new Date(),

  dateFormat: "mm/dd/yy", // Формат дати

        onSelect: function(selectedDate) {

            // Встановлюємо мінімальну дату другого Datepicker

            $("#datepicker2").datepicker("option", "minDate", selectedDate);

            //Збирає дату з першого календаря

            // var datapick = $('#datepicker').datepicker('getDate');



            // var monthdate = datapick.getMonth() + 1;         // Get the month (0-11)

            // var daydate = datapick.getDate()          // Get the day as a number (1-31)

            // var yeardate = datapick.getFullYear()      // Get the four digit year (yyyy)

            // var fulldate = monthdate + "/" + daydate + "/" + yeardate

        }

 });

});

 </script>



<script>

     $(document).ready(function() {

            $("#submit").click(function() {

                var startDate = $("#datepicker").val();

                var endDate = $("#datepicker2").val();

            });

        });

</script>



 <script>

 $( function() {

 $( "#datepicker2" ).datepicker({

  dateFormat: "mm-dd-yy"

 });



});

 </script>



 <script>

  function collectdate() {

    //Збирає дату з першого календаря

    var datapick = $('#datepicker').datepicker('getDate');



    var monthdate = datapick.getMonth() + 1;         // Get the month (0-11)

    var daydate = datapick.getDate()          // Get the day as a number (1-31)

    var yeardate = datapick.getFullYear()      // Get the four digit year (yyyy)

    var fulldate = monthdate + "/" + daydate + "/" + yeardate

    //Збирає дату з другого календаря

    var datapick2 = $('#datepicker2').datepicker('getDate');



    var monthdate2 = datapick2.getMonth() + 1;         // Get the month (0-11)

    var daydate2 = datapick2.getDate()          // Get the day as a number (1-31)

    var yeardate2 = datapick2.getFullYear()      // Get the four digit year (yyyy)

    //з'єднює місяць день і рік в одну змінну

    var fulldate2 = monthdate2 + "/" + daydate2 + "/" + yeardate2

    

  }

 </script> 

 

<div class="vidstyp83"></div>

<div class="container mt-5">

    <h1>Catalog</h1>

</div>

<div class="container mt-5">

    <div class="row">

        <div class="col-lg-4">

            <form action="" method="post">

                <div class="">

                    <h3>Країна</h3>

                     <select name="category" id="countrySelect">

                      <option value="">Виберіть країну</option>  

                    <?php

                    $categories = get_categories();

                    foreach ($categories as $category) {

                        



                        if($category->cat_ID != 1){

                             echo '<option value="' . $category->slug . '">' . $category->name . '</option>';

                        }

                    } 

                    

                    ?>

                   



                    </select>

                </div>

                <div class="price mt-3">

                    <h3>Ціна</h3>

                    <label for="">Від</label>

                    <input type="text" name="price_from"> <br>

                    <label for="">До</label>

                    <input type="text" name="price_to">

                </div>

                <br>

                  <div class="harchyvanya mt-3">

                  <h3>Тип харчування</h3>

                  <select name="harchyvanya" id="Harchy">

                      <option value="">Виберіть тип харчування</option>  

                      <option name="harchyvanya" value="Все_включено">Все включено</option>

                      <option name="harchyvanya" value="без_харчування">без харчування</option>

                      <option name="harchyvanya" value="Сніданок">Сніданок</option>

                      <option name="harchyvanya" value="2-х_разове">2-х разове</option>

                      <option name="harchyvanya" value="3-х_разове">3-х разове</option>

                </select>

                 </div> 

                 

                   <div class="date mt-3">

                 <h3>З дати, до дати</h3>

                 

                 <p>З дати: <input type="text" id="datepicker" name="z_daty"></p> 

                 <p>До дати: <input type="text" id="datepicker2" name="do_daty"></p>

                 </div> 
    <br>
    <div class="garachyj_tury">
    <h3>Гарячі тури</h3>

    <input name="garachyj_tury" type="checkbox" id="checkbox1" value="1" onclick="Check()">
    <label for="checkbox1">Гарячі тури</label>
    </div>
    <!-- <script>
        
        function Check(){
            var isChecked = $("#checkbox1").is(":checked") ? 1 : 0;
            console.log(isChecked)
        
    }
    </script> -->
    <br>

                <div class="submit">

                    <input id="submit" type="submit" value="Send">

                </div>

            </form>

        </div>

        <div class="col-lg-8">

            <div class="row">

                <?php 



       

                if ($_POST) {

                    $price_from = ($_POST['price_from'] && $_POST['price_from'] > 0) ? $_POST['price_from'] : 0; 

                    $price_to = ($_POST['price_to'] && $_POST['price_to'] > 0) ? $_POST['price_to'] : 1000000;

                    $category = ($_POST['category'] && $_POST['category'] != 'all') ? $_POST['category'] : '';

                    $harchyvanya = ($_POST['harchyvanya'] && $_POST['harchyvanya'] != '') ? $_POST['harchyvanya'] : '';

                    $garachyj_tury = ($_POST['garachyj_tury'] && $_POST['garachyj_tury'] != '') ? $_POST['garachyj_tury'] : '';

                    // $z_daty = ($_POST['z_daty'] && $_POST['z_daty'] != '') ? $_POST['z_daty'] : '';

                    // $do_daty = ($_POST['do_daty'] && $_POST['do_daty'] != '') ? $_POST['do_daty'] : '';



                    $meta_query = array(

                        array(

                            'key' => 'price',

                            'value' => array($price_from, $price_to),

                            'type' => 'numeric',

                            'compare' => 'BETWEEN'

                        )

                    );

        

                    if ($harchyvanya) {

                        $meta_query[] = array(

                            'key' => 'harchyvanya',

                            'value' => $harchyvanya,

                            'compare' => '='

                        );

                    }

                    if ($garachyj_tury) {

                        $meta_query[] = array(

                            'key' => 'garachyj_tury',

                            'value' => $garachyj_tury,

                            'compare' => '='

                        );

                    }

                    $args = array(

                        'post_type' => 'post',

                        'posts_per_page' => -1,

                        'category_name' => $category, 

                        'meta_query' => $meta_query,

                    );

                    

                    // $meta_query = array(

                    //     array(

                    //         'key' => 'date',

                    //         'value' => array($fulldate, $fulldate2),

                    //         'type' => 'numeric',

                    //         'compare' => 'BETWEEN'

                    //     )

                    // );

        // $args = array(

                    //     $meta_query[] = array(

                    //         'key' => 'date',

                    //         'value' => array($z_daty, $do_daty),

                    //         'compare' => 'BETWEEN'

                    //     )

                    //     );

                    // $args = array(

                    //     'post_type' => 'post',

                    //     'posts_per_page' => -1,

                    //     'category_name' => $category, 

                    //     'meta_query' => array(

                    //         array(

                    //             'key' => 'price',

                    //             'value' => array($price_from, $price_to),

                    //             'type' => 'numeric',

                    //             'compare' => 'BETWEEN'

                    //         )

                    //     ) 

                   // );

                } else {

                    // echo 'no post';

                    $args = array(

                        'post_type' => 'post',

                        'posts_per_page' => -1

                    );

                }

           

            



                $query = new WP_Query($args);

                if($query->have_posts()) { 

                    while($query->have_posts()) {

                         $query->the_post();

                            ?>

                            <div class="col-lg-4 mb-3">

                                <div class="card flex-direction-column d-flex justify-content-between h-100">

                                    <?php the_post_thumbnail( 'medium', array('class' => 'card-img-top') ); ?>

                                    <div class="">

                                    <div class="card-body">

                                        <h5 class="card-title"><?php the_title(); ?></h5>

                                        <p class="card-text">Ціна: <?php the_field('price'); ?> грн</p> 

                                        <p class="card-text">Тип харчування: <?php the_field('harchyvanya'); ?></p> 

                                        <p class="card-text">Виїзд з: <?php the_field("vyyizd_z"); ?></p>

                                    

                                    </div>

                                        

                                        <div class="card-body ">

                                        <a href="<?php the_permalink();?>" class="btn btn-warning color-black-text col-12">Детальніше</a>

                                    </div>

                                </div>

                                </div>

                            </div>

                   <? 

                    wp_reset_postdata(  );

                }

            }

                ?>



            </div>

        </div>

    </div>

    <script>

        $(document).ready(function(){

             // Get the value of the 'country' parameter from the URL

    const urlParams = new URLSearchParams(window.location.href.split('?')[1]);

    const countryParam = urlParams.get('country');

    const harchyParam = urlParams.get('harchyvanya');

    const startscriptParam = new URLSearchParams(urlParams);

    const startscriptCode = urlParams.get("startscript");

    const GarachyjTur = urlParams.get("garyachyj_tur");

    const from_date = urlParams.get("from_date");

    const to_date = urlParams.get("to_date");

   localStorage.setItem('startscript', startscriptCode);

    // Set the value attribute of the option element

    if(countryParam) {

        //console.log($(`#countrySelect option[value=${countryParam}]`))





        $(`#countrySelect option[value=${countryParam}]`).attr('selected', 'true');

    }

    if(harchyParam) {

        //console.log($(`#countrySelect option[value=${countryParam}]`))





        $(`#Harchy option[value=${harchyParam}]`).attr('selected', 'true');

    }
    if(from_date) {

        $('#datepicker').val(`${from_date}`).datepicker({
    dateFormat: 'mm/dd/yy',
});

    }

    if(to_date) {

$('#datepicker2').val(`${to_date}`).datepicker({
dateFormat: 'mm/dd/yy',
});

}

    if(GarachyjTur) {

//console.log($(`#countrySelect option[value=${countryParam}]`))





$(`#checkbox1 option[value=${GarachyjTur}]`).attr('selected');

}

           



  if (localStorage.getItem('startscript') == 1){

    

 // Current URL: https://my-website.com/page_a

const nextURL = `http://portfolio.startit.lviv.ua/touragency/catalog/?country=${countryParam}&harchyvanya=${harchyParam}&startscript=0`;


// This will create a new entry in the browser's history, reloading afterwards

window.location.href = nextURL;



// This will replace the current entry in the browser's history, reloading afterwards

window.location.assign(nextURL);



// This will replace the current entry in the browser's history, reloading afterwards





$('#submit').trigger('click');

window.location.replace(nextURL);

  }

  





  //trigger start here

// document.querySelector('startscript').addEventListener('click', () => {

//   localStorage.removeItem('startscript');

//   //All other logic here

  



         

                 

          

})





    





    



    </script>

    

    


</div>
    <?php get_footer( ); ?>