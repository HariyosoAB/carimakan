<div class="container-fluid" style="height:768px;padding:0px;">
    <div class="bghome col-md-12" style="padding-top:10%;">
        <div class="col-md-8 vertical-align" id="slogan" style="margin-bottom:50px;margin-top:5%;">
          <div class="container">
            <h1 class="proximaBold text-center" id="su" style="color:white;display: block; font-size:50px;"> The right food at the right time </h1>
            <div id="stripe" ></div>
            <p class="proximaLight text-center" id="ss"style="color:white;display: block; font-size: 40px;">
              Carimakan helps you find places to eat near you
            </p>
                <div class="text-center">
                  <a href="#!/categories" class="btn btn-lg" id="btnAnm" style="background:#86d528; color:white;">
                      See More
                  </a>
                </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 vertical-align"  id="formFront" >
            <div class="container" style="background:white;" id="isifrontform">
              <div class="row" style="text-align:center;" >
                   <h1 class="proximaBold" style="color: #86d528;font-size:60px; background:white;">Login</h1>
              </div>
              <div class="row" style="background:white;" >
                  <form ng-submit="submitLogin()" method="POST" style="padding: 20px" >
                    <div class="form-group">
                      <p class="proximaLight" style="color:grey;font-size:20px;">Username</p>
                    <input type="text" class="form-control proximaLight" id="usr" placeholder="Username" ng-model="loginData.username" required>
                    </div>
                    <div class="form-group">
                    <p class="proximaLight" style="color:grey; font-size:20px;">Password</p>
                    <input type="password" class="form-control proximaLight" id="pwd" placeholder="Password" ng-model="loginData.password" required>
                    </div>
                    <div class="text-right">
                      <button type="submit" class="btn btn-lg" id="btnAnm" style="background:#86d528; color:white;">Login</button>
                    </div>
                  </form>
              </div>
              <div class="row vertical-align" style="background:#86d528;text-align:center;font-size:20px;">
                <div style="margin:10px;">
                  <p class="proximaLight" style="color: white; margin-right:10px;">Not a member? </p>
                    <a href="" style="text-decoration:none;">
                      <p class="proximaBold" style="color:white;display:block;" ng-click="signUp()">

                      Sign up
                        </p>
                    </a>

                </div>

              </div>
            </div>

        </div>
        <div class="text-center col-xs-12" id="tesbtnbawah" >
          <a href="#!/categories" class="btn btn-lg" style="background:#86d528; color:white;">
              Enter as guest
          </a>
        </div>
    </div>
</div>
