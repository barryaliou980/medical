@extends('layouts.app')
@section('content')
   <!--Start Banner-->
   
   <div class="sub-banner">
	<img class="banner-img" src="/assets/image/cropped-b_four-doctors.png" alt="">
	    <div class="detail">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                    <div class="paging">
                		<h2>Contactez-nous</h2>
						<ul>
						<li><a href="/">Accueil</a></li>
						<li><a>Contact</a></li>
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
  <div class="contact-us">
		<div class="leave-msg dark-back">
			<div class="container">
			
			<div class="rox">
				<div class="col-md-7">
					
					<div class="main-title">
						<h2><span>Nous  sommes</span> A votre ecoute<span></span></h2>
						<p>Professionnel de la santé nous avons les ressources dont vous avez besoin.</p>
					 </div>
					
					<div class="form">
				<div class="row">
                        <p class="success" id="success" style="display:none;"></p>
                        <p class="error" id="error" style="display:none;"></p>
                <form name="contact_form" id="contact_form" method="post" action="contact-us2.html#" onSubmit="return false">
					<div class="col-md-4"><input type="text" data-delay="300" placeholder="Nom complet" name="contact_name" id="contact_name" class="input"></div>
					<div class="col-md-4"><input type="text" data-delay="300" placeholder="Adresse mail" name="contact_email" id="contact_email" class="input"></div>
					<div class="col-md-4"><input type="text" data-delay="300" placeholder="Sujet" name="contact_subject" id="contact_subject" class="input"></div>
					<div class="col-md-12"><textarea data-delay="500" class="required valid" placeholder="Message" name="message" id="message"></textarea></div>
					<div class="col-md-3"><input name=" " type="submit" value="Envoyer	" onClick="validateContact();"></div>
                    </form>
                    
				</div>
			</div>
				</div>
				<div class="col-md-5">
					<div class="contact-get">
					<div class="main-title">
						<h2><span>Nos</span> Coordonnes</h2>
					 </div>
					<div class="get-in-touch">
					<div class="detail">
						<span><b>Telephone:</b> 1.800.555.6789</span>
						<span><b>Email:</b> <a href="#">support@medical.com</a></span>
					 </div>
					 <div class="social-icons">
                        	<a href="#" class="fb"><i class="icon-euro"></i></a>
                            <a href="#" class="tw"><i class="icon-yen"></i></a>
                     </div>
					 </div>
					 </div>
				</div>
				
			</div>

			</div>
		</div>
		
   </div>
  
   
   </div>
   <!--End Content-->
   
   
   
   


   @endsection
