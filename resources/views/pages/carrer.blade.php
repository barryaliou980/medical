@extends('layouts.app')
@section('content')


   <!--Start Banner-->
   <div class="sub-banner">
	<img class="banner-img" src="/assets/image/cropped-b_four-doctors.png" alt="">    <div class="detail">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	
                    <div class="paging">
                		<h2>Postuler</h2>
						<ul>
						<li><a href="/">Accueil</a></li>
						<li><a>Postuler</a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>	
   
   <!--End Banner-->
   <!--Start Content-->
   <div class="content">
  <div class="main-appointment-form">
   		<div class="container">
        	
            <div class="row">
	        <div class="col-md-12">
            <div class="main-title text-center"> 
                <h2><span>Nous avons des postes disponibles !</span>Appliquer sans attendre ! </h2>
                <p>Vous êtes à la recherche d’un  emploi dans le domaine de la Sante</p>
            </div>
            </div>
            </div>
            
            <div class="row">
				<div class="col-md-12">
					<div class="icon-center">
					<div class="appoint-icon">
						<i class="icon-clipboard"></i>
					</div></div>
						<div class="appointment-form">
				<div class="form">
    <section class="bgcolor-a">
        <p class="error" id="error" style="display:none;"></p>
    <p class="success" id="success" style="display:none;"></p>
    <form name="appointment_form" id="appointment_form" method="post" action="appointment.html#" onSubmit="return false">
				<span class="input input--kohana">
					<input class="input__field input__field--kohana" type="text" id="input-29" name="input-29" />
					<label class="input__label input__label--kohana" for="input-29">
                        <i class="icon-user6 icon icon--kohana"></i>
						<span class="input__label-content input__label-content--kohana">Nom complet</span>
					</label>
				</span>
				<span class="input input--kohana">
					<input class="input__field input__field--kohana" type="text" id="input-30" name="input-30"/>
					<label class="input__label input__label--kohana" for="input-30">
						<i class="icon-dollar icon icon--kohana"></i>
						<span class="input__label-content input__label-content--kohana">Adresse mail</span>
					</label>
				</span>
				<span class="input input--kohana last">
					<input class="input__field input__field--kohana" type="text" id="input-31" name="input-31"/>
					<label class="input__label input__label--kohana" for="input-31">
						<i class="icon-phone5 icon icon--kohana"></i>
						<span class="input__label-content input__label-content--kohana">N telephone</span>
					</label>
				</span>
                <span class="input input--kohana">
				  {{-- <label class="input-group-text" for="inputGroupFile01">Upload</label> --}}
 					 <input type="file" class="form-control" id="inputGroupFile01" placeholder="CV">
					  	<label class="input__label input__label--kohana" for="input-31">
						<i class="icon-phone5 icon icon--kohana"></i>
						<span class="input__label-content input__label-content--kohana">Votre Cv</span>
					</label>
				</span>
                <span class="input input--kohana message">
					<textarea class="input__field input__field--kohana" id="textarea" name="textarea" ></textarea>
					<label class="input__label input__label--kohana" for="textarea">
						<i class="icon-new-message icon icon--kohana"></i>
						<span class="input__label-content input__label-content--kohana">Message</span>
                    </label>
                </span>
                <input name="submit_appointment" type="submit" value="Envoyer" onClick="validateAppointment();">
            </form>
			</section>
				</div>
			</div>
				</div>
			</div>
        </div>
   </div>
   </div>
   <!--End Content-->
@endsection