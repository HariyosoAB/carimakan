<div class="container-fluid" style=" padding:0px;background-color:#ededed;" >
  <div class=" bgAwal wrapper" style="height:50%;" >
    <div class="col-md-12 vertical-align" >
      <div class="ic" style="height:10em; margin-top:5em;">
          <h2 class="proximaBold"style="margin:2px; display:block;color:white;font-size:40px;">cari</h2>
          <h2 class="proximaBold" style="margin:2px;display:block;color:white;font-size:40px;">ma-</h2>
          <h2  class="proximaBold" style="margin:2px;display:block;color:white;font-size:40px;">kan</h2>
      </div>
    </div>

    <div class="col-md-12 vertical-align" style="height:25vh;" >
      <a href="#!/all" ng-show="Auth.data">
        <div class="btn btn-lg" style="background:#86d528; color:white;border-radius:10px">
          Show all restaurant available
        </div>
      </a>
    </div>

  </div>

  <div class="col-md-11" >
    <div class="box" style="border:0;box-shadow: none; margin:2% 5%; padding:0px 50px">
      <div class="box-header" style="border-bottom: thin solid grey">
        <h1 class="proximaBold ">Categories</h1>
      </div>
      <div class="box-body" style="padding-bottom:5%;">
        <a href="#!/popular">
          <div class="col-md-6 col-xs-12" style="height:10em; margin-top:10px;">
              <div class="bgpop wrapper text-center vertical-align">
                  <h1 class="proximaBold" style="color:white;">Most Popular</h1>
              </div>
          </div>
        </a>
        <a href="#!/vibes">
          <div class="col-md-6 col-xs-12">
              <div class="bggvs wrapper text-center vertical-align" style="height:10em;margin-top:10px;">
                <h1 class="proximaBold" style="color:white;">Good Vibes</h1>
              </div>
          </div>
        </a>

          <a href="#!/lists" ng-show="Auth.data"><div class="col-md-6 col-xs-12" style="height:10em;margin-top:10px;">
              <div class="bgmd wrapper text-center vertical-align">
                <h1 class="proximaBold" style="color:white;">Suits the Mood</h1>
              </div>
          </div>
        </a>
        <a href="#!/price" ng-show="Auth.data">
          <div class="col-md-6 col-xs-12">
              <div class="bgprc wrapper text-center vertical-align" style="height:10em;margin-top:10px;">
                  <h1 class="proximaBold" style="color:white;">Good Price</h1>
              </div>
          </div>
        </a>

      </div>
    </div>

    <div class="box" style="border:0;box-shadow: none; margin:2% 5%; padding:0px 50px">
      <div class="box-header" style="border-bottom: thin solid grey">
        <h1 class="proximaBold ">Highest Rating</h1>
      </div>
      <div class="box-body">
            <div class="row" ng-repeat="feat in featuredData">
              <div class="col-md-3" >
                <div class="thumbnail" style="margin:10px;">
                  <img src="image/resto/{{feat.Picture_Filename}}" alt="" style="max-height:165px;">
                </div>
              </div>
              <div class="col-md-9">
                <div class="box box-success">
                  <div class="box-header" style="border-bottom: thin solid grey">
                    <a ng-href="#!/details/{{feat.ID_Resto}}" style="color:inherit"><h2 class="proximaBold"  style="margin-top:0px;">{{feat.Resto_Name}}</h2></a>
                    <div class="pull-right text-center" style="background-color:#86d528;">
                      <h4 class="proximaBold" style=" color:white; margin:10px;">{{feat.rating}}</h4>
                    </div>
                    <br><label>{{feat.Resto_City}}</label>
                    <p>{{feat.Resto_Location}}</p>
                  </div>
                  <div class="box-body proximaLight col-md-12">
                    <div class="col-md-6">

                      <label >Price :</label> Rp {{feat.Price_Min}} - {{feat.Price_Max}} ,-
                    </div>
                    <div class="col-md-6">
                      <label >Open At :</label> {{feat.Hours_Start}}- {{feat.Hours_Closed}}

                    </div>
                  </div>
                </div>
              </div>

            </div>

      </div>
    </div>

  </div>
</div>
