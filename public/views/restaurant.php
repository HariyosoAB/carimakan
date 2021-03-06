
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
  <div ng-show="loading" class="text-center">
      <img src="image/fluid-loader.gif" alt="" style="margin:50px;height:100px;">
      <!-- <i class="fa fa-meh-o fa-5x fa-spin" style="margin:50px;"></i> -->
  </div>
  <div ng-hide="loading">

    <div class="col-md-12" >

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
  <div uib-carousel active="active" interval="3000" >
    <div uib-slide index="$index" ng-repeat="picture in pictures">
      <input type="hidden" value="{{$index + 1}}">
      <div class="thumbnail vertical-align" style="border:none;box-shadow:none;background:black;min-height:30em;">
        <img src="image/resto/{{picture.Picture_Filename}}" alt="" style="max-height:30em;max-width:100%;">
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
        <h2 class="proximaBold">{{info[0].Resto_Name}}</h2>
        <br>
        <strong>{{info[0].Resto_City}}</strong>
        <br><label>{{info[0].Resto_Location}}</label>
      </div>
      <div class="">
        <br><label>Price</label> : Rp {{info[0].Price_Min}} - {{info[0].Price_Max}},-
        <br>  <label>Hours</label> : {{info[0].Hours_Start}} - {{info[0].Hours_Closed}}
        <br>  <Strong>Facilities</Strong> :

        <p>-  Wifi : <i ng-if="info[0].Wifi == '1'">Available</i><i ng-if="info[0].Wifi == '0'">Not Available</i></p>
        <p>-  Reservation :  <i ng-if="info[0].Reservation == '1'">Available</i><i ng-if="info[0].Reservation == '0'">Not Available</i></p>
        <p>-  Smoking Area :  <i ng-if="info[0].Smoking_Area == '1'">Available</i><i ng-if="info[0].Smoking_Area == '0'">Not Available</i></p>
        <p>-  Free Parking :  <i ng-if="info[0].Free_Parking == '1'">Available</i><i ng-if="info[0].Free_Parking == '0'">Not Available</i></p>

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
            <br><h1 class="proximaBold" style="color:white;margin-top:5px;">{{avg.overall}}</h1>
          </div>
        </div>
        <div class="col-md-9 proximaBold "  style="padding-top:20px">
          <div class="col-md-6">
            Food <i class="fa fa-star fa-lg" style="color:yellow;"></i><i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i> <i class="fa fa-star fa-lg" style="color:yellow;"></i>
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

    <div class="box" ng-hide="!Auth.data">
      <div class="box-header with-border">
        <h2 class="proximaBold">Write a Review</h2>
      </div>
      <div class="box-body" style="font-family:ProximaLight;">
        <form class="form" action="index.html" name="commentform" method="post">
          <div class="col-md-6">
            <div class="form-group">
              <h4>Food</h4>
              <span uib-rating ng-model="commentData.rate" max="5" read-only="isReadonly" on-hover="hoveringOver(value)" on-leave="overStar = null" titles="['one','two','three']" aria-labelledby="default-rating"></span>
            </div>
            <div class="form-group">
              <h4>Service</h4>
              <span uib-rating ng-model="commentData.rate2" max="5" read-only="isReadonly" on-hover="hoveringOver(value)" on-leave="overStar = null" titles="['one','two','three']" aria-labelledby="default-rating"></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <h4>Price</h4>
              <span uib-rating ng-model="commentData.rate3" max="5" read-only="isReadonly" on-hover="hoveringOver(value)" on-leave="overStar = null" titles="['one','two','three']" aria-labelledby="default-rating"></span>
            </div>
            <div class="form-group">
              <h4>Place</h4>
              <span uib-rating ng-model="commentData.rate4" max="5" read-only="isReadonly" on-hover="hoveringOver(value)" on-leave="overStar = null" titles="['one','two','three']" aria-labelledby="default-rating"></span>
            </div>

          </div>

          <div class="form-group">
            <textarea class="form-control" ng-model="commentData.text" value=""></textarea>
          </div>

          <div class="btn btn-default" ng-click="submitComment()">
            Submit
          </div>
        </form>
      </div>
    </div>

    <div ng-hide="commload">

      <div class="box" style="padding:10px;" ng-repeat="review in reviews">
        <div class="box-header" style="border-bottom:thin solid grey">

          <div class="thumbnail col-md-3" style="width:75px;height:75px;margin:0px;">
            <img src="image/avatar/{{review.dp}}" alt="" style="height:100%; width:100%;">
          </div>
          <div class="col-md-9" style="margin:10px; margin-bottom:0px;">
            <div class="row">
              <h3 class="proximaLight" style="margin:0px;">{{review.Reviews_Author}}</h3>
            </div>
            <div class="row">
              <p class="proximaLight"style="margin:0px;">Location: {{review.loc}}</p>
            </div>
            <div class="row">
              <p class="proximaLight">Reviews written: {{review.banyak}}</p>
            </div>



          </div>

        </div>
        <div class="box-body">
          <div class="proximaLight col-md-9 col-xs-12">
            <p>{{review.Reviews_Description}} </p>


          </div>
          <div class="col-md-3 col-xs-12">
            <div class="pull-right ic text-center ">
              <h5 class="proximaBold" style="color:white;margin-bottom:0px;">Review Score</h5>
              <h3 class="proximaLight" style="color:white;display:block;margin-top:0px;">{{review.rating}}</h2>
              </div>
            </div>

          </div>
          <div class="box-footer with-border">
            <div class="proximaLight">
              <small>{{review.Reviews_Time}}</small>
            </div>
          </div>
        </div>

      </div>



    </div>
    <div ng-show="commload" class="text-center">
        <img src="image/fluid-loader.gif" alt="" style="margin:50px;height:100px;">
        <!-- <i class="fa fa-meh-o fa-5x fa-spin" style="margin:50px;"></i> -->
    </div>
    <div class="col-md-4">
      <div class="box" style="padding:10px;">
        <div class="box-header" style="border-bottom:thin solid grey">
          <h1 class="proximaBold">Suggested</h1>
        </div>
        <div class="box-body">
          <div class="row" ng-repeat="feat in featuredData">
            <div class="col-md-5" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/resto/{{feat.Picture_Filename}}" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-7">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                  <a ng-href="#!/details/{{feat.ID_Resto}}" style="color:inherit"><h2 class="proximaBold"  style="margin-top:0px;">{{feat.Resto_Name}}</h2></a>

                  <br><label>{{feat.Resto_City}}</label>
                  <p>{{feat.Resto_Location}}</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
  </div>

</div>
