
<style>
            /*ul {
                height:300px;
                width: 600px;
                background:blue;
            }*/
            #karusel{
              height:100%;
              width: 100%;
            }
            img.alignLeft {
                float: left;
            }
        </style>

<div class="container-fluid" style=" padding:20px 10px;background-color:#ededed;min-height:768px;" >
  <div class="col-md-12">
      <div class="col-md-8">
          <!-- <ul rn-carousel rn-carousel-auto-slide rn-carousel-transition="slide" class="image" id="karusel">

            <li>
              <div class="thumbnail" style="border:none;box-shadow:none;">
                <img src="image/goodvibes.jpg" alt="">
              </div>
            </li>
            <li>
              <div class="thumbnail" style="border:none;box-shadow:none;">
                <img src="image/goodvibes.jpg" alt="">
              </div>
            </li>
          </ul> -->
          <div style="height: 100%;">
             <div uib-carousel active="active" interval="3000" style="" >
               <div uib-slide index="0">
                 <div class="thumbnail vertical-align" style="border:none;box-shadow:none;background:black;min-height:30em;">
                   <img src="image/goodvibes.jpg" alt="" style="max-height:30em;max-width:100%;">
                 </div>
               </div>
               <div uib-slide index="1">
                 <div class="thumbnail vertical-align" style="border:none;box-shadow:none;background:black;min-height:30em;">
                   <img src="image/price.jpg" alt="" style="max-height:30em;max-width:100%;">
                 </div>
               </div>
             </div>
           </div>
      </div>
      <div class="col-md-4">
          <div class="box">
              <div class="box-header" style="background-color:#86d528">
                  <h1 class="proximaBold" style="color:white">Info</h1>
              </div>
              <div class="box-body proximaLight">
                <div style="border-bottom: thin solid grey;margin-bottom:10px;">
                  <h2 class="proximaBold">Lucky Cat Coffe & Kitchen</h2>
                  <label>Keputih, Surabaya</label>
                </div>
                <div class="">
                      <label>Type</label> : Lunch
                      <br><label>Price</label> : Rp 20000 - 100000,-
                    <br>  <label>Hours</label> : 10 AM - 10 PM
                    <br>  <Strong>Facilities</Strong> :

                      <p>-  Wifi : Available</p>
                      <p>-  Reservation : Available</p>
                      <p>-  Smoking Area : N/A</p>
                      <p>-  Free Parking : Available</p>

                </div>


              </div>
          </div>
      </div>
  </div>
  <div class="col-md-12">
      <div class="col-md-8">
          <div class="box" style="padding:10px;">
             <div class="box-header" style="border-bottom:thin solid grey;">
               <h1 class="proximaBold">Reviews</h1>
             </div>
             <div class="box-body">
               <div class="col-md-3">
                 <div class="ic text-center">
                     <p class="proximaLight" style="color:white;margin-top:10px;">Overall Rating</p>
                     <br><h1 class="proximaBold" style="color:white;margin-top:5px;">4.5</h1>
                 </div>
               </div>
               <div class="col-md-9 proximaBold "  style="padding-top:20px">
                 <div class="col-md-6">
                    Food <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i>
                 </div>
                 <div class="col-md-6">
                   Place <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i>
                 </div>
                 <div class="col-md-6">
                   Service <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i>
                 </div>
                 <div class="col-md-6">
                   Price <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i>
                 </div>
               </div>

             </div>
          </div>

          <div class="box">
              <div class="box-header with-border">
                  <h2 class="proximaBold">Write a Review</h2>
              </div>
              <div class="box-body" style="font-family:ProximaLight;">
                <form class="form" action="index.html" method="post">
                  <div class="col-md-6">
                    <div class="form-group">
                      <h4>Food</h4>
                      <span uib-rating ng-model="rate" max="5" read-only="isReadonly" on-hover="hoveringOver(value)" on-leave="overStar = null" titles="['one','two','three']" aria-labelledby="default-rating"></span>
                    </div>
                    <div class="form-group">
                      <h4>Service</h4>
                      <span uib-rating ng-model="rate2" max="5" read-only="isReadonly" on-hover="hoveringOver(value)" on-leave="overStar = null" titles="['one','two','three']" aria-labelledby="default-rating"></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <h4>Price</h4>
                      <span uib-rating ng-model="rate3" max="5" read-only="isReadonly" on-hover="hoveringOver(value)" on-leave="overStar = null" titles="['one','two','three']" aria-labelledby="default-rating"></span>
                    </div>
                    <div class="form-group">
                      <h4>Place</h4>
                      <span uib-rating ng-model="rate4" max="5" read-only="isReadonly" on-hover="hoveringOver(value)" on-leave="overStar = null" titles="['one','two','three']" aria-labelledby="default-rating"></span>
                    </div>

                  </div>

                    <div class="form-group">
                        <textarea class="form-control" name="" value=""></textarea>
                    </div>

                    <div class="btn btn-default" ng-click="search()">
                        Submit
                    </div>
                </form>
              </div>
          </div>

          <div ng-hide="loading">

            <div class="box" style="padding:10px;">
                <div class="box-header" style="border-bottom:thin solid grey">

                    <div class="thumbnail col-md-3" style="width:75px;height:75px;margin:0px;">
                        <img src="image/food1.jpg" alt="" style="height:100%; width:100%;">
                    </div>
                    <div class="col-md-9" style="margin:10px; margin-bottom:0px;">
                      <div class="row">
                        <h3 class="proximaLight" style="margin:0px;">Ario Bimo</h3>
                      </div>
                      <div class="row">
                        <p class="proximaLight"style="margin:0px;">Location: Jakarta</p>
                      </div>
                      <div class="row">
                        <p class="proximaLight">Reviews written: 33</p>
                      </div>



                    </div>

                </div>
                <div class="box-body">
                    <div class="proximaLight col-md-9 col-xs-12">
                      <p>Ada banyak variasi tulisan Lorem Ipsum yang tersedia, tapi kebanyakan sudah mengalami perubahan bentuk, entah karena unsur humor atau kalimat yang diacak hingga nampak sangat tidak masuk akal. Jika anda ingin menggunakan tulisan Lorem Ipsum, anda harus yakin tidak ada bagian yang memalukan yang tersembunyi di tengah naskah tersebut. Semua generator Lorem Ipsum di internet cenderung untuk mengulang bagian-bagian tertentu. Karena itu inilah generator pertama yang sebenarnya di internet. Ia menggunakan kamus perbendaharaan yang terdiri dari 200 kata Latin, yang digabung dengan banyak contoh struktur kalimat untuk menghasilkan Lorem Ipsun yang nampak masuk akal. Karena itu Lorem Ipsun yang dihasilkan akan selalu bebas dari pengulangan, unsur humor yang sengaja dimasukkan, kata yang tidak sesuai dengan karakteristiknya dan lain sebagainya.

</p>


                    </div>
                    <div class="col-md-3 col-xs-12">
                      <div class="pull-right ic text-center ">
                          <h5 class="proximaBold" style="color:white;margin-bottom:0px;">Review Score</h5>
                          <h3 class="proximaLight" style="color:white;display:block;margin-top:0px;">4.5</h2>
                      </div>
                    </div>

                </div>
                <div class="box-footer with-border">
                    <div class="proximaLight">
                        <small>posted on 22-04-2017</small>
                    </div>
                </div>
            </div>
            <div class="box" style="padding:20px;">
                <div class="box-header" style="border-bottom:thin solid grey">

                    <div class="thumbnail col-md-3" style="border-radius:50%;width:100px;height:100px;">
                        <img src="image/avatar.png" alt="" style="border-radius:50%; height:100%; width:100%;">
                    </div>
                    <h2 class="proximaLight col-md-9" style="margin-top:40px;" >Aria Bimo</h2>
                </div>
                <div class="box-body">
                    <div class="proximaLight">
                      <p>Saya lumayan Suka makan disini</p>
                    </div>
                </div>
                <div class="box-footer with-border">
                    <div class="proximaLight">
                        <small>posted on 22-04-2017</small>
                    </div>
                </div>
            </div>
            <div class="box" style="padding:20px;">
                <div class="box-header" style="border-bottom:thin solid grey">

                    <div class="thumbnail col-md-3" style="border-radius:50%;width:100px;height:100px;">
                        <img src="image/food1.jpg" alt="" style="border-radius:50%; height:100%; width:100%;">
                    </div>
                    <h2 class="proximaLight col-md-9" style="margin-top:40px;" >Ario Bima</h2>
                </div>
                <div class="box-body">
                    <div class="proximaLight">
                      <p>Saya gak Suka makan disini</p>
                    </div>
                </div>
                <div class="box-footer with-border">
                    <div class="proximaLight">
                        <small>posted on 22-04-2017</small>
                    </div>
                </div>
            </div>

          </div>
          <div ng-show="loading" class="text-center">
              <img src="image/fluid-loader.gif" alt="" style="margin:50px;height:100px;">
              <!-- <i class="fa fa-meh-o fa-5x fa-spin" style="margin:50px;"></i> -->
         </div>


      </div>
      <div class="col-md-4">
            <div class="box" style="padding:10px;">
              <div class="box-header" style="border-bottom:thin solid grey">
                  <h1 class="proximaBold">Suggested</h1>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-md-5" >
                    <div class="thumbnail" style="margin:10px;">
                      <img src="image/food1.jpg" alt="" style="max-height:165px;">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="box box-success">
                      <div class="box-header" style="border-bottom: thin solid grey">
                        <a href="#!/resto" style="color:inherit"><h2 class="proximaBold"  style="margin-top:0px;">Sego jamur</h2></a>

                        <br><label>Jakarta</label>
                        <p>Jl. Tebet Timur Dalam Raya 44B, Tebet, Jakarta</p>
                      </div>
                  </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-md-5" >
                    <div class="thumbnail" style="margin:10px;">
                      <img src="image/food1.jpg" alt="" style="max-height:165px;">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="box box-success">
                      <div class="box-header" style="border-bottom: thin solid grey">
                        <a href="#!/resto" style="color:inherit"><h2 class="proximaBold"  style="margin-top:0px;">Lemongrass</h2></a>

                        <br><label>Jakarta</label>
                        <p>Jl. Tebet Timur Dalam Raya 44B, Tebet, Jakarta</p>
                      </div>
                  </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-md-5" >
                    <div class="thumbnail" style="margin:10px;">
                      <img src="image/food1.jpg" alt="" style="max-height:165px;">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="box box-success">
                      <div class="box-header" style="border-bottom: thin solid grey">
                        <a href="#!/resto" style="color:inherit"><h2 class="proximaBold"  style="margin-top:0px;">Sego jamur</h2></a>

                        <br><label>Jakarta</label>
                        <p>Jl. Tebet Timur Dalam Raya 44B, Tebet, Jakarta</p>
                      </div>
                  </div>
                  </div>

                </div>


              </div>
            </div>

      </div>
  </div>

</div>
