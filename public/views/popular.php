<div class="container-fluid" style=" padding:0px;background-color:#ededed;min-height:768px;" >
  <div class="col-md-11">
    <div class="box" style="border:0;box-shadow: none; margin:2% 5%; padding:0px 50px" >
      <div class="box-header" style="border-bottom:thin solid grey">
        <h1 class="proximaBold" >Search</h1>
      </div>
      <div class="box-body">

        <div class="form-group " style="margin-top:20px;" >
            <div class="col-md-3">
              <select class="form-control proximaLight">
                <option Selected>Surabaya</option>
                <option Selected>Jakarta</option>
                <option Selected>Bandung</option>
              </select>
            </div>
        <div class="col-md-7">
          <input type="text" name="" value="" class="form-control proximaLight">

        </div>
            <a href="#!/lists"><div class="btn btn-default" ng-click="search()">
              search
            </div></a>
        </div>
      </div>
    </div>

  

    <div class="row">
      <div class="box" style="border:0;box-shadow: none; margin:2% 5%; padding:0px 50px" ng-keydown="keydown($event)" tabindex="0" ng-hide="loading">
        <div class="box-header" style="border-bottom: thin solid grey">
          <h1 class="proximaBold ">Showing restaurants based on Most Popular</h1>

        </div>
        <div class="form-group proximaLight" style="margin:10px 20px;">
          Sort By:
          <select class="form-control" name="">
              <option> Rating</option>
              <option> Price</option>

          </select>
        </div>

        <div class="box-body right" ng-show="page2">

          <div class="row">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/food1.jpg" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                  <a href="#!/resto" style="color:inherit"><h2 class="proximaBold"  style="margin-top:0px;">Sego jamur</h2></a>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">4.9</h4>
                  </div>
                  <br><label>Jakarta</label>
                  <p>Jl. Tebet Timur Dalam Raya 44B, Tebet, Jakarta</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">

                    <label >Price :</label> Rp 20000 - 100000 ,-
                    <br><label >Open At :</label> 10.00 AM - 10.00 PM
                  </div>
                  <div class="col-md-6">
                    <label>Type :</label> Lunch
                    <br><label >Phone Number :</label> 08568859594

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/mood.jpg" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                  <h2 class="proximaBold"  style="margin-top:0px;">Rumah Sosis</h2>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">4.7</h4>
                  </div>
                  <br><label>Bogor Utara</label>
                  <p>Jl. Raya Pajajaran No. 21, Bogor Utara, Bogor</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">

                    <label >Price :</label> Rp 25000 - 75000 ,-
                    <br><label >Open At :</label>09.00 AM - 11.00 PM
                  </div>
                  <div class="col-md-6">
                    <label>Type :</label> Dinner
                    <br><label >Phone Number :</label> 08128393918

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/food1.jpg" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                <a href="#!/resto" style="color:inherit">  <h2 class="proximaBold"  style="margin-top:0px;">Lucky cat cafe</h2></a>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">4.9</h4>
                  </div>
                  <br><label>Jakarta</label>
                  <p>Jl. Tebet Timur Dalam Raya 44B, Tebet, Jakarta</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">

                    <label >Price :</label> Rp 20000 - 100000 ,-
                    <br><label >Open At :</label> 10.00 AM - 10.00 PM
                  </div>
                  <div class="col-md-6">
                    <label>Type :</label> Lunch
                    <br><label >Phone Number :</label> 08568859594

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/mood.jpg" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                  <a href="#!/resto" style="color:inherit"><h2 class="proximaBold"  style="margin-top:0px;">Lemongrass</h2></a>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">4.7</h4>
                  </div>
                  <br><label>Bogor Utara</label>
                  <p>Jl. Raya Pajajaran No. 21, Bogor Utara, Bogor</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">

                    <label >Price :</label> Rp 25000 - 75000 ,-
                    <br><label >Open At :</label>09.00 AM - 11.00 PM
                  </div>
                  <div class="col-md-6">
                    <label>Type :</label> Dinner
                    <br><label >Phone Number :</label> 08128393918

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/mood.jpg" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                <a href="#!/resto" style="color:inherit">  <h2 class="proximaBold"  style="margin-top:0px;">lemm</h2></a>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">4.7</h4>
                  </div>
                  <br><label>Bogor Utara</label>
                  <p>Jl. Raya Pajajaran No. 21, Bogor Utara, Bogor</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">

                    <label >Price :</label> Rp 25000 - 75000 ,-
                    <br><label >Open At :</label>09.00 AM - 11.00 PM
                  </div>
                  <div class="col-md-6">
                    <label>Type :</label> Dinner
                    <br><label >Phone Number :</label> 08128393918

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="box-body left" ng-show="page1">
          <div class="row">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/food1.jpg" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                <a href="#!/resto" style="color:inherit">  <h2 class="proximaBold"  style="margin-top:0px;">Lucky cat cafe</h2></a>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">4.9</h4>
                  </div>
                  <br><label>Jakarta</label>
                  <p>Jl. Tebet Timur Dalam Raya 44B, Tebet, Jakarta</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">

                    <label >Price :</label> Rp 20000 - 100000 ,-
                    <br><label >Open At :</label> 10.00 AM - 10.00 PM
                  </div>
                  <div class="col-md-6">
                    <label>Type :</label> Lunch
                    <br><label >Phone Number :</label> 08568859594

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/mood.jpg" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                  <a href="#!/resto" style="color:inherit"><h2 class="proximaBold"  style="margin-top:0px;">Lemongrass</h2></a>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">4.7</h4>
                  </div>
                  <br><label>Bogor Utara</label>
                  <p>Jl. Raya Pajajaran No. 21, Bogor Utara, Bogor</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">

                    <label >Price :</label> Rp 25000 - 75000 ,-
                    <br><label >Open At :</label>09.00 AM - 11.00 PM
                  </div>
                  <div class="col-md-6">
                    <label>Type :</label> Dinner
                    <br><label >Phone Number :</label> 08128393918

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/food1.jpg" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                <a href="#!/resto" style="color:inherit">  <h2 class="proximaBold"  style="margin-top:0px;">Lucky cat cafe</h2></a>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">4.9</h4>
                  </div>
                  <br><label>Jakarta</label>
                  <p>Jl. Tebet Timur Dalam Raya 44B, Tebet, Jakarta</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">

                    <label >Price :</label> Rp 20000 - 100000 ,-
                    <br><label >Open At :</label> 10.00 AM - 10.00 PM
                  </div>
                  <div class="col-md-6">
                    <label>Type :</label> Lunch
                    <br><label >Phone Number :</label> 08568859594

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/mood.jpg" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                <a href="#!/resto" style="color:inherit">  <h2 class="proximaBold"  style="margin-top:0px;">Lemongrass</h2></a>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">4.7</h4>
                  </div>
                  <br><label>Bogor Utara</label>
                  <p>Jl. Raya Pajajaran No. 21, Bogor Utara, Bogor</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">

                    <label >Price :</label> Rp 25000 - 75000 ,-
                    <br><label >Open At :</label>09.00 AM - 11.00 PM
                  </div>
                  <div class="col-md-6">
                    <label>Type :</label> Dinner
                    <br><label >Phone Number :</label> 08128393918

                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3" >
              <div class="thumbnail" style="margin:10px;">
                <img src="image/mood.jpg" alt="" style="max-height:165px;">
              </div>
            </div>
            <div class="col-md-9">
              <div class="box box-success">
                <div class="box-header" style="border-bottom: thin solid grey">
                <a href="#!/resto" style="color:inherit">  <h2 class="proximaBold"  style="margin-top:0px;">Lemongrass</h2></a>
                  <div class="pull-right text-center" style="background-color:#86d528;">
                    <h4 class="proximaBold" style=" color:white; margin:10px;">4.7</h4>
                  </div>
                  <br><label>Bogor Utara</label>
                  <p>Jl. Raya Pajajaran No. 21, Bogor Utara, Bogor</p>
                </div>
                <div class="box-body proximaLight col-md-12">
                  <div class="col-md-6">

                    <label >Price :</label> Rp 25000 - 75000 ,-
                    <br><label >Open At :</label>09.00 AM - 11.00 PM
                  </div>
                  <div class="col-md-6">
                    <label>Type :</label> Dinner
                    <br><label >Phone Number :</label> 08128393918

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="box-body" >
          <div class="row">
            <div class="col-md-12 text-center">
              <div>
                <div class="btn btn-default" style="color:#111111;" ng-click="pindahPage()">
                  <i class="fa fa-arrow-left"> </i>
                </div>
                <div class="btn btn-default" style="color:#111111;" ng-click="pindahPage()">
                  <i class="fa fa-arrow-right"> </i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
      </div>

    </div>
  </div>

</div>
