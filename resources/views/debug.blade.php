<form ng-submit="submitSignUp()" method="post" class="proximaLight" action="{{url('/')}}/api/login">
 <input type="hidden" name="_token" value="{{csrf_token()}}">
 <input type="text" name="username" value="">
 <input type="text" name="password" value="">
<button type="submit" name="button"></button>
 </form>
