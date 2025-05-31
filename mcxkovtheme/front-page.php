<?php  get_header();?>

<script>

 $( function() {

 $( "#datepicker" ).datepicker({

  minDate: new Date(),

  dateFormat: "mm-dd-yy", // Формат дати

        onSelect: function(selectedDate) {

            // Встановлюємо мінімальну дату другого Datepicker

            $("#datepicker2").datepicker("option", "minDate", selectedDate);

        }

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

    console.log(fulldate);

    //Збирає дату з другого календаря

    var datapick2 = $('#datepicker2').datepicker('getDate');



    var monthdate2 = datapick2.getMonth() + 1;         // Get the month (0-11)

    var daydate2 = datapick2.getDate()          // Get the day as a number (1-31)

    var yeardate2 = datapick2.getFullYear()      // Get the four digit year (yyyy)

    //з'єднює місяць день і рік в одну змінну

    var fulldate2 = monthdate2 + "/" + daydate2 + "/" + yeardate2

    console.log(fulldate2);

    

  }

 </script> 

 

<div class="vidstyp83"></div>

 <div class="container">

      <div id="carouselExampleIndicators" class="carousel slide">

          <div class="carousel-indicators">

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>

            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

          </div>

          

          <div class="carousel-inner">

            <div class="carousel-item active">

            <img src="<?php echo get_template_directory_uri(  );?>/assets/png/r.png" alt="" class="d-block w-100 z-index">

            </div>

            <div class="carousel-item ">

            <img src="<?php echo get_template_directory_uri(  );?>/assets/png/reklama33.png" alt="" class="d-block w-100 z-index">

            </div>

            <div class="carousel-item">

            <img src="<?php echo get_template_directory_uri(  );?>/assets/png/reklama23.png" alt="" class="d-block w-100 z-index">

            </div>

          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="visually-hidden">Previous</span>

          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="visually-hidden">Next</span>

          </button>

        </div>

        

            

            <div class="color-white-bg znayty justify-content-center g-0 h-100">

              <div class="justify-content-center gap-2 row offs d-lg-flex color-white-bg znayty2 g-0">

                  <div class="tryvalyst col-lg-3 col-md-6 borderznaity textlight">

                      <div class="centertext padup">

                      <img src="<?php echo get_template_directory_uri(  );?>/assets/svg/datesvg.svg" alt="" class="imgcalendar">

                        <div class="row formbox"><div class="formbox-element">З дати, До дати</div> 

                        <div class="formbox-element"><li class="nav-item dropdown nomarker">



                          <div class="btn-group">

                              <button class="nav-link dropdown-toggle krayina padfortext" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">

                                Дата

                              </button>

                              <!-- <button class="nav-link dropdown-toggle krayina padfortext" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" onclick="collectdate()">

                                Дата

                              </button> -->

                              <ul class="dropdown-menu">

                              <p>З дати: <input type="text" id="datepicker" ></p> 

                              <p>До дати: <input type="text" id="datepicker2" ></p>

                              </ul>

                              

                             



                              

                              



                                  <!-- <div class="month">

                                      <ul>

                                        <li>Січень<br><span style="font-size:18px">2024</span></li>

                                      </ul>

                                    </div>

                                    

                                    <ul class="weekdays">

                                      <li>Mo</li>

                                      <li>Tu</li>

                                      <li>We</li>

                                      <li>Th</li>

                                      <li>Fr</li>

                                      <li>Sa</li>

                                      <li>Su</li>

                                    </ul>

                                    

                                    <ul class="days">

                                      <li>1</li>

                                      <li>2</li>

                                      <li>3</li>

                                      <li>4</li>

                                      <li>5</li>

                                      <li>6</li>

                                      <li>7</li>

                                      <li>8</li>

                                      <li>9</li>

                                      <li>10</li>

                                      <li>11</li>

                                      <li>12</li>

                                      <li>13</li>

                                      <li>14</li>

                                      <li>15</li>

                                      <li>16</li>

                                      <li>17</li>

                                      <li>18</li>

                                      <li>19</li>

                                      <li>20</li>

                                      <li>22</li>

                                      <li>23</li>

                                      <li>24</li>

                                      <li>25</li>

                                      <li>26</li>

                                      <li>27</li>

                                      <li>28</li>

                                      <li>29</li>

                                      <li>30</li>

                                      <li>31</li>

                                    </ul>-->

                              

                            </div> 

                        

                      </li></div></div>

                          

                      

                  </div>

                  </div> 
                  <script>
                    function submitForm() {
                      var monthdate = datapick.getMonth() + 1;         // Get the month (0-11)

                      var daydate = datapick.getDate()          // Get the day as a number (1-31)

                      var yeardate = datapick.getFullYear()      // Get the four digit year (yyyy)

                      var fulldate = monthdate + "/" + daydate + "/" + yeardate

                      var monthdate2 = datapick2.getMonth() + 1;         // Get the month (0-11)

                      var daydate2 = datapick2.getDate()          // Get the day as a number (1-31)

                      var yeardate2 = datapick2.getFullYear()      // Get the four digit year (yyyy)

                      //з'єднює місяць день і рік в одну змінну

                      var fulldate2 = monthdate2 + "/" + daydate2 + "/" + yeardate2
                    }
                  </script>

                  <div class="col-lg-3 col-md-6 borderznaity textlight justify-content-center">

                      <div class=" color-white-bg g-0 znayty2">

                          <div class="centertext">

                            <img src="<?php echo get_template_directory_uri(  );?>/assets/svg/plane.svg" alt="" class="vyizd">

                          <div class="row formbox">

                            <div class="formbox-element">Виліт з</div>

                          <div class="btn-group">

                              <button class="nav-link dropdown-toggle krayina padfortext" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">

                                  Країна

                              </button>



                              <form id="FormCountry">

                              <ul class="dropdown-menu">

                                <div class="custom-radio padleft">

                                  <input type="radio" id="radio26" name="Countrytype" value="albaniya">

                                  <label for="radio26">Албанія</label>

                                </div>

                                <div class="custom-radio padleft">

                                  <input type="radio" id="radio27" name="Countrytype" value="bolgariya">

                                  <label for="radio27">Болгарія</label>

                                </div>

                                <div class="custom-radio padleft">

                                  <input type="radio" id="radio28" name="Countrytype" value="grecziya">

                                  <label for="radio28">Греція</label>

                                </div>

                                <div class="custom-radio padleft">

                                  <input type="radio" id="radio29" name="Countrytype" value="yegypet">

                                  <label for="radio29">Єгипет</label>

                                <div class="custom-radio ">

                                  <input type="radio" id="radio30" name="Countrytype" value="turechynna">

                                  <label for="radio30">Туреччина</label>

                                </div>

                              </ul>

                            </form>



                            </div>

                      </div>

                          </div>

                      </div>

                  </div> 

                  <!-- зчитувач країни  -->

                  <script>

        function submitForm() {

            const form = document.getElementById('FormCountry');

            const formData = new FormData(form);

            const selectedOption = formData.get('Countrytype');

        }

    </script>

                  <div class="ai col-lg-3 col-md-6 borderznaity textlight">

                      <div class="centertext padup">

                          <img src="<?php echo get_template_directory_uri(  );?>/assets/svg/Burger.svg" alt="" class="imgcalendar">

                          <div class="row formbox">

                            <div class="formbox-element">Тип харчування</div> 

                          <div class="btn-group">

                              <button class="nav-link dropdown-toggle krayina padfortext" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">

                                  Виберіть тип

                              </button>



                              <form id="FormHarchyvanya">

                              <ul class="dropdown-menu">

                                <div class="custom-radio padleft">

                                      <input type="radio" id="radio8" name="eattype" value="Все_включено">

                                      <label for="radio8">Все включено</label>

                                    </div>

                                    <div class="custom-radio padleft">

                                      <input type="radio" id="radio6" name="eattype" value="Сніданок">

                                      <label for="radio6">Сніданок</label>

                                    </div>

                                    <div class="custom-radio padleft">

                                      <input type="radio" id="radio7" name="eattype" value="2-х_разове">

                                      <label for="radio7">2-х разове</label>

                                    </div>

                                    <div class="custom-radio padleft">

                                      <input type="radio" id="radio31" name="eattype" value="3-х_разове">

                                      <label for="radio31">3-х разове</label>

                                    </div>

                                    <div class="custom-radio padleft">

                                      <input type="radio" id="radio5" name="eattype" value="без_їжі">

                                      <label for="radio5">без харчування</label>

                                    </div>

                              </ul>

                            </form>

                            <!-- зчитувач харчування  -->

                            <script>

        function submitForm() {

            const form2 = document.getElementById('FormHarchyvanya');

            const formData2 = new FormData(form2);

            const selectedOptionHarchyvanya = formData2.get('eattype');

        }

    </script>

                            </div>

                      </div>

                      </div>

                  </div> 

                  <!-- людей -->
                  <!-- <div class="htoyide col-lg-2 col-md-6 borderznaity textlight">

                      <div class="centertext1 padup">

                          <img src="<?php echo get_template_directory_uri(  );?>/assets/svg/person.svg" alt="" class="imghuman">

                          <div class="row formbox">

                            <div class="formbox-element">Хто їде</div> 



                          <div class="btn-group">

                              <button class="nav-link dropdown-toggle krayina padfortext" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">

                                Людей

                              </button>

                              <form id="FormLydei">

                              <ul class="dropdown-menu">

                                  <div class="custom-radio padleft">

                                      <input type="radio" id="radio1" name="customRadio" value="1">

                                      <label for="radio1">1 дорослий</label>

                                    </div>

                                    <div class="custom-radio padleft">

                                      <input type="radio" id="radio2" name="customRadio" value="2">

                                      <label for="radio2">2 дорослих</label>

                                    </div>

                                    <div class="custom-radio padleft">

                                      <input type="radio" id="radio3" name="customRadio" value="3">

                                      <label for="radio3">3 дорослих</label>

                                    </div>

                                    </form>


                                    <script>

                                        function submitForm() {

                                            const form3 = document.getElementById('FormLydei');

                                            const formData3 = new FormData(form3);

                                            const selectedOptionHarchyvanya = formData3.get('customRadio');

                                        }

                                    </script>

                                  <li>

                                      <hr class="dropdown-divider">

                                  </li>

                                  <div class="btn-group">

                                      <button class="nav-link dropdown-toggle krayina padfortext" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">

                                          Дитина

                                      </button>

                                      <form id="FormDitey">

                                      <ul class="dropdown-menu">

                                          <div class="custom-radio padleft">

                                              <input type="radio" id="radio9" name="Ditey">

                                              <label for="radio9">1 рік</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio10" name="Ditey">

                                              <label for="radio10">2 роки</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio11" name="Ditey">

                                              <label for="radio11">3 роки</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio12" name="Ditey">

                                              <label for="radio12">4 роки </label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio13" name="Ditey">

                                              <label for="radio13">5 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio14" name="Ditey">

                                              <label for="radio14">6 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio15" name="Ditey">

                                              <label for="radio15">7 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio16" name="Ditey">

                                              <label for="radio16">8 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio17" name="Ditey">

                                              <label for="radio17">9 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio18" name="Ditey">

                                              <label for="radio18">10 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio19" name="Ditey">

                                              <label for="radio19">11 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio20" name="Ditey">

                                              <label for="radio20">12 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio21" name="Ditey">

                                              <label for="radio21">13 років </label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio22" name="Ditey">

                                              <label for="radio22">14 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio23" name="Ditey">

                                              <label for="radio23">15 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio24" name="Ditey">

                                              <label for="radio24">16 років</label>

                                            </div>

                                            <div class="custom-radio padleft">

                                              <input type="radio" id="radio25" name="Ditey">

                                              <label for="radio25">17 років</label>

                                            </div>

                                      </ul>

                                    </form>


                                    <script>

                                        function submitForm() {

                                            const form4 = document.getElementById('FormDitey');

                                            const formData4 = new FormData(form4);

                                            const selectedOptionHarchyvanya = formData4.get('Ditey');

                                        }

                                    </script>



                                    </div>

                                  

                                  

                              </ul>

                            </div>



                    <!--    <div class="formbox-element"><li class="nav-item dropdown nomarker">

                          <a class="nav-link dropdown-toggle krayina padfortext" href="#" role="button" data-bs-toggle="dropdown"

                              aria-expanded="false">

                              Виберіть

                          </a>

                          <ul class="dropdown-menu">

                              <div class="custom-radio padleft">

                                  <input type="radio" id="radio1" name="customRadio">

                                  <label for="radio1">1 дорослий</label>

                                </div>

                                <div class="custom-radio padleft">

                                  <input type="radio" id="radio2" name="customRadio">

                                  <label for="radio2">2 дорослих</label>

                                </div>

                                <div class="custom-radio padleft">

                                  <input type="radio" id="radio3" name="customRadio">

                                  <label for="radio3">3 дорослих</label>

                                </div>

                                

                              <li>

                                  <hr class="dropdown-divider">

                              </li>

                              <li><a class="dropdown-item" href="#">Див. інші варіанти</a></li>

                          </ul>

                      </li></div></div>

                      </div>

                  </div>  -->

                  <div class="buttonznaity col-lg-2 col-md-12">

                  <!-- <input class="bg-warning btn textznaity text-center w-100 h-100 whitebold" id="submit" type="submit" value="Знайти"> -->

                  <button type="button" class="btn textznaity text-center w-100 h-100 whitebold" onclick="submitdata()">Знайти</button>

                  </div>

                  <script>

                    function submitdata() {

                      var datapick = $('#datepicker').datepicker('getDate');

                      var datapick2 = $('#datepicker2').datepicker('getDate');

                      const form = document.getElementById('FormCountry');

                      const formData = new FormData(form);

                      const selectedOption = formData.get('Countrytype');

                      const form2 = document.getElementById('FormHarchyvanya');

                      const formData2 = new FormData(form2);

                      const selectedOptionHarchyvanya = formData2.get('eattype');

                      var monthdate = datapick.getMonth() + 1;         // Get the month (0-11)

                      var daydate = datapick.getDate();          // Get the day as a number (1-31)

                      var yeardate = datapick.getFullYear();      // Get the four digit year (yyyy)

                      var fulldate = monthdate + "/" + daydate + "/" + yeardate;

                      var monthdate2 = datapick2.getMonth() + 1;         // Get the month (0-11)

                      var daydate2 = datapick2.getDate();          // Get the day as a number (1-31)

                      var yeardate2 = datapick2.getFullYear();      // Get the four digit year (yyyy)

                      //з'єднює місяць день і рік в одну змінну

                      const fulldate2 = monthdate2 + "/" + daydate2 + "/" + yeardate2;

                      

                      




                      // const form3 = document.getElementById('FormLydei');

                      // const formData3 = new FormData(form3);

                      // const selectedOptionHarchyvanya = formData3.get('customRadio');

                      // const form4 = document.getElementById('FormDitey');

                      // const formData4 = new FormData(form4);

                      // const selectedOptionHarchyvanya = formData4.get('Ditey');

                     

                       window.location.href = `http://portfolio.startit.lviv.ua/touragency/catalog/?country=${selectedOption}&harchyvanya=${selectedOptionHarchyvanya}&from_date=${fulldate}&to_date=${fulldate2}&startscript=0`;

                    }

                  </script>

              </div>

          </div>

          <br>

            <div class="row justify-content-center">

              <?php 



                                  

                  $args = array(

                    'posts_per_page' => 6,

                    //'orderby' => 'comment_count'

                  );

                  



                  $q = new WP_Query( $args );

                  



                  if( $q->have_posts() ) :

                  

                    



                    while( $q->have_posts() ) : $q->the_post(); ?>

                  

                    <div class="col-lg-4 col-md-12 mb-4">

                    <div class="card w-100 flex-direction-column d-flex justify-content-between h-100">

                      <?php the_post_thumbnail( 'full', array('class' => 'card-img-top') ); ?>

                      <div class="">

                        <div class="card-body">



                          <h5 class="card-title"><?php the_title(); ?></h5>

                          <p class="card-text"><?php the_field("krayina"); ?></p>

                        </div>

                        <ul class="list-group list-group-flush">

                          <li class="list-group-item"><img src="<?php echo get_template_directory_uri(  );?>/assets/svg/Plane-2.svg" alt=""> з <?php the_field("z_daty"); ?> до <?php the_field("do_daty"); ?></li>

                          <li class="list-group-item"><img src="<?php echo get_template_directory_uri(  );?>/assets/svg/Bus.png" alt=""> Виїзд з <?php the_field("vyyizd_z"); ?> </li>

                          <li class="list-group-item"><img src="<?php echo get_template_directory_uri(  );?>/assets/svg/dish.png"alt=""> <?php the_field("harchyvanya"); ?></li>

                        </ul>

                        <div class="card-body">

                          <a class="btn btn-warning color-yellow color-black-text col-12" href="<?php the_permalink(); ?>" role="button">Детальніше</a>

                        </div>

                        </div>

                      </div>

                              

            

              </div>

                     

        <?php            endwhile;

                  endif;

                  



                  wp_reset_postdata();

             

              ?>
       

              <!-- <div class="col-lg-2 col-md-12">

                  <div class="card w-100">

                              <img src="CardPhoto.png" class="card-img-top" alt="...">

                              <div class="card-body">

                                <h5 class="card-title">Готель Sentido Palm Royale Soma Bay Resort</h5>

                                <p class="card-text">Єгипет, Сома Бей</p>

                              </div>

                              <ul class="list-group list-group-flush">

                                <li class="list-group-item"><img src="Language-2.svg" alt=""> з 10.08 до 10.15</li>

                                <li class="list-group-item"><img src="Language-2.svg" alt=""> Виїзд з Варшави</li>

                                <li class="list-group-item"><img src="Language-2.svg" alt=""> SP</li>

                              </ul>

                              <div class="card-body">

                                <a class="btn btn-warning color-yellow color-black-text col-12" href="Details.html" role="button">Детальніше</a>

                              </div>

                            </div>

                            </div><div class="col-lg-2 col-md-6">

                              <div class="card w-100">

                                          <img src="CardPhoto.png" class="card-img-top" alt="...">

                                          <div class="card-body">

                                            <h5 class="card-title">Готель Sentido Palm Royale Soma Bay Resort</h5>

                                            <p class="card-text">Єгипет, Сома Бей</p>

                                          </div>

                                          <ul class="list-group list-group-flush">

                                            <li class="list-group-item"><img src="Language-2.svg" alt=""> з 10.08 до 10.15</li>

                                            <li class="list-group-item"><img src="Language-2.svg" alt=""> Виїзд з Варшави</li>

                                            <li class="list-group-item"><img src="Language-2.svg" alt=""> SP</li>

                                          </ul>

                                          <div class="card-body"> 

                                              <a class="btn btn-warning color-yellow color-black-text col-12" href="Details.html" role="button">Детальніше</a>

                                          </div>

                                        </div>

                                        </div> -->

                                        <!-- <div class="col-lg-2 col-md-6">

                                          <div class="card w-100" >

                                                      <img src="CardPhoto.png" class="card-img-top" alt="...">

                                                      <div class="card-body">

                                                        <h5 class="card-title">Готель Sentido Palm Royale Soma Bay Resort</h5>

                                                        <p class="card-text">Єгипет, Сома Бей</p>

                                                      </div>

                                                      <ul class="list-group list-group-flush">

                                                        <li class="list-group-item"><img src="Language-2.svg" alt=""> з 10.08 до 10.15</li>

                                                        <li class="list-group-item"><img src="Language-2.svg" alt=""> Виїзд з Варшави</li>

                                                        <li class="list-group-item"><img src="Language-2.svg" alt=""> SP</li>

                                                      </ul>

                                                      <div class="card-body">

                                                        <a class="btn btn-warning color-yellow color-black-text col-12" href="Details.html" role="button">Детальніше</a>

                                                      </div>

                                                    </div>

                                                    </div>

                                                    <div class="col-lg-2 col-md-6">

                                                      <div class="card w-100">

                                                                  <img src="CardPhoto.png" class="card-img-top" alt="...">

                                                                  <div class="card-body">

                                                                    <h5 class="card-title">Готель Sentido Palm Royale Soma Bay Resort</h5>

                                                                    <p class="card-text">Єгипет, Сома Бей</p>

                                                                  </div>

                                                                  <ul class="list-group list-group-flush">

                                                                    <li class="list-group-item"><img src="Language-2.svg" alt=""> з 10.08 до 10.15</li>

                                                                    <li class="list-group-item"><img src="Language-2.svg" alt=""> Виїзд з Варшави</li>

                                                                    <li class="list-group-item"><img src="Language-2.svg" alt=""> SP</li>

                                                                  </ul>

                                                                  <div class="card-body">

                                                                    <a class="btn btn-warning color-yellow color-black-text col-12" href="Details.html" role="button">Детальніше</a>

                                                                  </div>

                                                                </div>

                                                                </div>

                                                                <div class="col-lg-2 col-md-6">

                                                                  <div class="card w-100">

                                                                              <img src="CardPhoto.png" class="card-img-top" alt="...">

                                                                              <div class="card-body">

                                                                                <h5 class="card-title">Готель Sentido Palm Royale Soma Bay Resort</h5>

                                                                                <p class="card-text">Єгипет, Сома Бей</p>

                                                                              </div>

                                                                              <ul class="list-group list-group-flush">

                                                                                <li class="list-group-item"><img src="Language-2.svg" alt=""> з 10.08 до 10.15</li>

                                                                                <li class="list-group-item"><img src="Language-2.svg" alt=""> Виїзд з Варшави</li>

                                                                                <li class="list-group-item"><img src="Language-2.svg" alt=""> SP</li>

                                                                              </ul>

                                                                              <div class="card-body">

                                                                                <a class="btn btn-warning color-yellow color-black-text col-12" href="Details.html" role="button">Детальніше</a>

                                                                              </div>

                                                                            </div>

                                                                            </div>

            </div>

            <br>

            <div class="row justify-content-center">

              <div class="col-lg-2 col-md-6">

                  <div class="card w-100">

                              <img src="CardPhoto.png" class="card-img-top" alt="...">

                              <div class="card-body">

                                <h5 class="card-title">Готель Sentido Palm Royale Soma Bay Resort</h5>

                                <p class="card-text">Єгипет, Сома Бей</p>

                              </div>

                              <ul class="list-group list-group-flush">

                                <li class="list-group-item"><img src="Language-2.svg" alt=""> з 10.08 до 10.15</li>

                                <li class="list-group-item"><img src="Language-2.svg" alt=""> Виїзд з Варшави</li>

                                <li class="list-group-item"><img src="Language-2.svg" alt=""> SP</li>

                              </ul>

                              <div class="card-body">

                                <a class="btn btn-warning color-yellow color-black-text col-12" href="Details.html" role="button">Детальніше</a>

                              </div>

                            </div>

                            </div><div class="col-lg-2 col-md-6">

                              <div class="card w-100">

                                          <img src="CardPhoto.png" class="card-img-top" alt="...">

                                          <div class="card-body">

                                            <h5 class="card-title">Готель Sentido Palm Royale Soma Bay Resort</h5>

                                            <p class="card-text">Єгипет, Сома Бей</p>

                                          </div>

                                          <ul class="list-group list-group-flush">

                                            <li class="list-group-item"><img src="Language-2.svg" alt=""> з 10.08 до 10.15</li>

                                            <li class="list-group-item"><img src="Language-2.svg" alt=""> Виїзд з Варшави</li>

                                            <li class="list-group-item"><img src="Language-2.svg" alt=""> SP</li>

                                          </ul>

                                          <div class="card-body">

                                            <a class="btn btn-warning color-yellow color-black-text col-12" href="Details.html" role="button">Детальніше</a>

                                          </div>

                                        </div>

                                        </div>

                                        <div class="col-lg-2 col-md-6">

                                          <div class="card w-100" >

                                                      <img src="CardPhoto.png" class="card-img-top" alt="...">

                                                      <div class="card-body">

                                                        <h5 class="card-title">Готель Sentido Palm Royale Soma Bay Resort</h5>

                                                        <p class="card-text">Єгипет, Сома Бей</p>

                                                      </div>

                                                      <ul class="list-group list-group-flush">

                                                        <li class="list-group-item"><img src="Language-2.svg" alt=""> з 10.08 до 10.15</li>

                                                        <li class="list-group-item"><img src="Language-2.svg" alt=""> Виїзд з Варшави</li>

                                                        <li class="list-group-item"><img src="Language-2.svg" alt=""> SP</li>

                                                      </ul>

                                                      <div class="card-body">

                                                        <a class="btn btn-warning color-yellow color-black-text col-12" href="Details.html" role="button">Детальніше</a>

                                                      </div>

                                                    </div>

                                                    </div>

                                                    <div class="col-lg-2 col-md-6">

                                                      <div class="card w-100">

                                                                  <img src="CardPhoto.png" class="card-img-top" alt="...">

                                                                  <div class="card-body">

                                                                    <h5 class="card-title">Готель Sentido Palm Royale Soma Bay Resort</h5>

                                                                    <p class="card-text">Єгипет, Сома Бей</p>

                                                                  </div>

                                                                  <ul class="list-group list-group-flush">

                                                                    <li class="list-group-item"><img src="Language-2.svg" alt=""> з 10.08 до 10.15</li>

                                                                    <li class="list-group-item"><img src="Language-2.svg" alt=""> Виїзд з Варшави</li>

                                                                    <li class="list-group-item"><img src="Language-2.svg" alt=""> SP</li>

                                                                  </ul>

                                                                  <div class="card-body">

                                                                    <a class="btn btn-warning color-yellow color-black-text col-12" href="Details.html" role="button">Детальніше</a>

                                                                  </div>

                                                                </div>

                                                                </div>

                                                                <div class="col-lg-2 col-md-6">

                                                                  <div class="card w-100">

                                                                              <img src="CardPhoto.png" class="card-img-top" alt="...">

                                                                              <div class="card-body">

                                                                                <h5 class="card-title">Готель Sentido Palm Royale Soma Bay Resort</h5>

                                                                                <p class="card-text">Єгипет, Сома Бей</p>

                                                                              </div>

                                                                              <ul class="list-group list-group-flush">

                                                                                <li class="list-group-item"><img src="Language-2.svg" alt=""> з 10.08 до 10.15</li>

                                                                                <li class="list-group-item"><img src="Language-2.svg" alt=""> Виїзд з Варшави</li>

                                                                                <li class="list-group-item"><img src="Language-2.svg" alt=""> SP</li>

                                                                              </ul>

                                                                              <div class="card-body">

                                                                                <a class="btn btn-warning color-yellow color-black-text col-12" href="Details.html" role="button">Детальніше</a>

                                                                              </div>

                                                                            </div>

                                                                            </div> -->

            </div>

            <div class="row justify-content-center">

        <!--<button type="button" class="btn btn-secondary col-6 color-black-text color-gray-bg">Більше</button> -->

        <a class="mb-3 btn btn-warning col-6 color-black-text color-yellow" href="http://portfolio.startit.lviv.ua/touragency/catalog" role="button">Більше</a>

            </div>



        </div>
</div>

        <?php get_footer();?> 

      