
<!--
########## Choose the ownCloud Version – Server or Enterprise ##########
 -->

<div class="installers">
  <div id="instructions-server" class="container branch modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="instructions modal-dialog modal-lg" role="document">
      <div class="overlay-body modal-content">

       <div class="modal-header">
         <h2 class="modal-title" id="exampleModalLabel">Please choose your ownCloud download type </h2>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>

         <div class="modal-body pl-5 pr-5 pt-2">
										<div class="col-offset-1 col-xs-10">
											<div class="row row-eq-height">

												<div class="col-sm-6 community">
													<div class="button-area box h-100  ">
														<p><strong class="mb-2 d-inline-block">Get the ownCloud Server</strong><br /><span>Setup an ownCloud instance yourself with the free ownCloud Server</span></p>
														<a id="serverbutton" href="#" class="btn btn-primary">Download ownCloud Server</a>
													</div>
												</div>

            <div class="col-sm-6 enterprise">
													<div class="button-area box h-100">
														<p><strong class="mb-2 d-inline-block">Try ownCloud Enterprise Edition free for 30 days</strong><br /><span>Get started in no time providing a complete ownCloud environment, fully setup and ready to go!</span></p>
														<a href="https://owncloud.com/download/?ref=orgB" target="_blank" class="btn btn-primary btn-orange">Download Enterprise Edition</a>
													</div>
												</div>

											</div>
										</div>
								 </div>

   </div> <!-- modal-content -->
 	</div> <!-- modal-dialog -->
 </div> <!-- modal -->
</div> <!-- installers -->


<!--
########## Load the modal tabs for the download modal ##########
 -->

<div class="installers">

	<div id="edition" class="container modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="instructions modal-dialog modal-lg" role="document">
			<div class="overlay-body modal-content">

    <div class="modal-header justify-content-end">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="modal-body">

				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item"><a class="nav-link active" href="#tab-archive" title="For server owners" role="tab" data-toggle="tab"><i class="fa fa-archive"></i> Archive File<br><small>For server owners</small></a></li>
					<li class="nav-item"><a class="nav-link" href="#tab-web" title="Best for shared hosts" role="tab" data-toggle="tab"><i class="fa fa-code"></i> Web Installer<br><small>For shared hosts</small></a></li>
					<li class="nav-item" id="li-tab-packages"><a class="nav-link" href="#tab-packages" title="Provides automated updates" role="tab" data-toggle="tab"><i class="fa fa-linux"></i> Packages<br><small>For auto updates</small></a></li>
					<li class="nav-item"><a href="#tab-cloud" class="nav-link" title="Provides automated updates" role="tab" data-toggle="tab"><i class="fa fa-cloud"></i> Appliances<br><small>For easy deployment</small></a></li>
				</ul>

  		<div class="tab-content text-left">

       <!-- Tab Archive -->
    			<?php echo get_field('modal_archive_file'); ?>

       <!-- Tab Web Installer -->
    			<?php echo get_field('modal_web_installer'); ?>

       <!-- Tab Packages -->
    			<?php echo get_field('modal_packages'); ?>

       <!-- Tab Appliances -->
    			<?php echo get_field('modal_appliances'); ?>


					</div> <!-- tab-content -->
				</div> <!-- modal-body -->
   </div> <!-- modal-content -->
 	</div> <!-- modal-dialog -->
 </div> <!-- modal -->
</div> <!-- installers -->


<!--
########## Load the modal tabs for the desktop clients ##########
 -->

 <div class="installers">

 	<div id="install-clients" class="container modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 		<div class="instructions modal-dialog modal-lg" role="document">
 			<div class="overlay-body modal-content">

     <div class="modal-header justify-content-end">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>

     <div class="modal-body">

 				<ul class="nav nav-tabs" role="tablist">
 					<li class="nav-item"><a class="nav-link desktop active" href="#tab-desktop" title="Install Desktop Clients" role="tab" data-toggle="tab"><i class="fa fa-archive"></i> Install Desktop Clients</a></li>
 					<li class="nav-item"><a class="nav-link mobile" href="#tab-mobile" title="Install Mobile Apps" role="tab" data-toggle="tab"><i class="fa fa-code"></i> Install Mobile Apps</a></li>
 				</ul>

   		<div class="tab-content text-left">

      <!-- Tab Archive -->
      <?php echo get_field('modal_desktop_clients'); ?>

      <!-- Tab Web Installer -->
      <?php echo get_field('modal_mobile_clients'); ?>

 					</div> <!-- tab-content -->
 				</div> <!-- modal-body -->
    </div> <!-- modal-content -->
  	</div> <!-- modal-dialog -->
  </div> <!-- modal -->
 </div> <!-- installers -->


<!--
########## Load the modal tabs for the testing packages ##########
 -->

 <div class="installers">

 	<div id="testing-development" class="container modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 		<div class="instructions modal-dialog modal-lg" role="document">
 			<div class="overlay-body modal-content">

     <div class="modal-header justify-content-end">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>

     <div class="modal-body">

   	  <div class="tab-content text-left">

      <!-- Tab Web Installer -->
      <?php echo get_field('modal_testing_packages'); ?>

 					</div> <!-- tab-content -->
 				</div> <!-- modal-body -->
    </div> <!-- modal-content -->
  	</div> <!-- modal-dialog -->
  </div> <!-- modal -->
 </div> <!-- installers -->


<!-- Newsletter Subscription -->
<div id="subscribe">
  <h3 class="text-center">ownCloud Newsletter</h3>
	<a href="#" class="close">&times;</a>
  <div class="subscribe content">
    <p>Sign up to get interesting ownCloud Community news and updates delivered directly to your inbox.</p>
    <a href="http://visitor.r20.constantcontact.com/d.jsp?llr=ixens9uab&p=oi&m=1121878184680&sit=mf4qye7jb&f=cc4cd13f-acdf-45d3-b132-75252542c37d" class="btn btn-primary btn-small" target="blank">Sign Up</a>
  </div>
</div>
<!-- /Newsletter Subscription -->

<script type="text/javascript">
	$(function() {
		if (navigator.appVersion.indexOf("Win")!=-1) {
			var e = document.getElementById("client-download-win");
			e.className += ' btn-primary';
		} else if(navigator.appVersion.indexOf("Mac")!=-1) {
			var e = document.getElementById("client-download-mac");
			e.className += " btn-primary";
		} else if (navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1) {
			var e = document.getElementById("client-download-linux");
			e.className += ' btn-primary';
		}
	});
</script>
