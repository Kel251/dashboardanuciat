@extends('blue.layouts.plantilla')
@section('content')
		
	        <form action="index.html" class="templatemo-login-form">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" placeholder="ingresa tu correro de recuperacion">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" placeholder="confirma tu correro de recuperacion">           
		          	</div>	
	        	</div>	          	
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Remember me</label>
				    </div>				    
				</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Recupera</button>
				</div>
				<a  class="templatemo-blue-button width-100" href="{{ URL::action('BlueController@index') }}">Cancela</a>
	        </form>

		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Not a registered user yet? <strong><a href="#" class="blue-text">Sign up now!</a></strong></p>

		</div>
                
                <div>
        <h2>Register form</h2>
        <button type="button" id="getRequest">Get request</button>
    </div>
    {!!Html::script('assets/js/jquery-2.1.4.min.js')!!}
    <script type="text/javascript" >
        $(document).ready(function(){
            $("#getRequest").click(function(){
                //alert($(this).text());
                $.get('vistabluereset/getRequest',function(data){
                    console.log(data);
                });
            });
        });
    </script>
@endsection