<div class="container-fluid" style=" padding:0px;background-color:#ededed;min-height:768px;" >
  <div class="col-md-11">
    <!-- <div class="box" style="border:0;box-shadow: none; margin:2% 5%; padding:0px 50px" ng>
      <div class="box-header" style="border-bottom:thin solid grey">
        <h1 class="proximaBold" >Search</h1>
      </div>
      <div class="box-body">
        <form method="post">
          <div class="form-group " style="margin-top:20px;" >
            <div class="col-md-3">
              <select class="form-control proximaLight" ng-model="searchData.kota">
                <option value="Surabaya"Selected>Surabaya</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Bandung">Bandung</option>
                <option value="Semarang">Semarang</option>
                <option value="DIY">DIY</option>
                <option value="Banten" >Banten</option>
              </select>
            </div>
            <div class="col-md-7">
              <input type="text" name="" value="" class="form-control proximaLight" placeholder="Find Restaurant" ng-model="searchData.nama">
            </div>
            <a><div class="btn btn-default" ng-click="searchit()">
              search
            </div></a>
          </div>
        </form>
      </div>
    </div> -->

    <div class="row " ng-show="mood">
      <div class="col-md-12">
          <div class="box" style="border:0;box-shadow: none; margin:0% 5%; padding:0px 50px" ng-hide="loading">
            <div class="box-header" style="border-bottom:thin solid grey">
              <h1 class="proximaBold">Showing restaurants based on weather</h1>
            </div>
            <div class="box-body text-center" style="padding:100px;">
                <div class="col-md-12">
                    <div class="col-md-3">
                      <img src="image/{{type}}" alt="" style="max-height:200px;">

                    </div>
                    <div class="col-md-9">
                      <h2 class="proximaLight">Location : {{sess.city}}</h2>
                      <br><h2 class="proximaLight">Temperature : <i class="proximaBold">{{weather.temp}}F</i></h2>
                      <br><h2 class="proximaLight">Weather : <strong>{{weather.text}}</strong></h2>
                    </div>
                </div>

            </div>
          </div>
      </div>

    </div>



    <div class="row">
      <div class="box" style="border:0;box-shadow: none; margin:2% 5%; padding:0px 50px" ng-keydown="keydown($event)" tabindex="0" ng-hide="loading">
        <div class="box-header" style="border-bottom: thin solid grey">
          <h1 class="proximaBold ">Search Result</h1>

        </div>


        <div class="box-body right" >

          <div class="row" ng-repeat="rest in resto">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/resto/{{rest.Picture_Filename}}" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                  <a ng-href="#!/details/{{rest.ID_Resto}}" style="color:inherit"><h2 class="proximaBold"  style="margin-top:0px;">{{rest.Resto_Name}}</h2></a>

                  <div class="pull-right text-center" style="background-color:#86d528;" ng-show="rest.banyak">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">Reviewed</h4><br>
                    <h4 class="proximaBold" style=" color:white; margin:10px;">{{rest.banyak}} time(s)</h4>
                  </div>
                  <div class="pull-right text-center" style="background-color:#86d528;" ng-show="rest.Reviews_Place">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">Place Rating</h4><br>
                    <h4 class="proximaBold" style=" color:white; margin:10px;">{{rest.Reviews_Place}}</h4>
                  </div>
                  <div class="pull-right text-center" style="background-color:#86d528;" ng-show="price">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">Max Price</h4><br>
                    <h4 class="proximaBold" style=" color:white; margin:10px;">{{rest.Price_Max}}</h4>
                  </div>
                  <br><label>{{rest.Resto_City}}</label>
                  <p>{{rest.Resto_Location}}</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">
                    <label >Price :</label> Rp {{rest.Price_Min}} - {{rest.Price_Max}} ,-
                  </div>
                  <div class="col-md-6">
                    <label >Open At :</label> {{rest.Hours_Start}} - {{rest.Hours_Closed}}

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row" ng-repeat="restem in empty" ng-show="empty">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/resto/{{restem.Picture_Filename}}" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                  <a ng-href="#!/details/{{restem.ID_Resto}}" style="color:inherit"><h2 class="proximaBold"  style="margin-top:0px;">{{restem.Resto_Name}}</h2></a>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">Reviews:</h4><br>
                    <h4 class="proximaBold" style=" color:white; margin:10px;">Not available</h4>
                  </div>
                  <br><label>{{restem.Resto_City}}</label>
                  <p>{{restem.Resto_Location}}</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">
                    <label >Price :</label> Rp {{restem.Price_Min}} - {{restem.Price_Max}} ,-
                  </div>
                  <div class="col-md-6">
                    <label >Open At :</label> {{restem.Hours_Start}} - {{restem.Hours_Closed}}

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- <div class="box-body" >
          <div class="row">
            <div class="col-md-12 text-center">
              <div>
                <div class="btn btn-default" style="color:#111111;" ng-click="showMore()">
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="col-md-12">
        <p class="text-center" ng-show="loading"><img src="image/fluid-loader.gif" alt="" style="margin:50px;height:100px;"></p>
      </div>

    </div>
  </div>

</div>
