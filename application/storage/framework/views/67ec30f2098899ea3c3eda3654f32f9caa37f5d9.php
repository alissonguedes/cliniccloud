<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('main'); ?>

<div class="container scroller" style="height: calc(100vh - 64px)" data-hide-x="true">

	<div class="section">
		<!--card stats start-->
		<div id="card-stats" class="pt-0">
			<div class="row">
				<div class="col s12 m6 l6 xl3">
					<a href="<?php echo e(go('clinica.pacientes.index')); ?>?obito=0">
						<div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeRight">
							<div class="padding-4">
								<div class="row">
									<div class="col s7 m7">
										<i class="material-icons-outlined background-round mt-5">people</i>
										<p>Pacientes</p>
									</div>
									<div class="col s5 m5 right-align">
										<h5 class="mb-0 white-text"><?php echo e($total['pacientes']['vivos']); ?></h5>
										<p class="no-margin">Vivos</p>
										
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col s12 m6 l6 xl3">
					<a href="<?php echo e(go('clinica.pacientes.index')); ?>?status=1&obito=0">
						<div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeLeft">
							<div class="padding-4">
								<div class="row">
									<div class="col s7 m7">
										<i class="material-icons-outlined background-round mt-5">groups</i>
										<p>Pacientes</p>
									</div>
									<div class="col s5 m5 right-align">
										<h5 class="mb-0 white-text"><?php echo e($total['pacientes']['ativos']); ?></h5>
										<p class="no-margin">Ativos</p>
										
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col s12 m6 l6 xl3">
					<a href="<?php echo e(go('clinica.pacientes.index')); ?>?status=0&obito=0">
						<div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
							<div class="padding-4">
								<div class="row">
									<div class="col s7 m7">
										<i class="material-icons-outlined background-round mt-5">person_off</i>
										<p>Pacientes</p>
									</div>
									<div class="col s5 m5 right-align">
										<h5 class="mb-0 white-text"><?php echo e($total['pacientes']['inativos']); ?></h5>
										<p class="no-margin">Inativos</p>
										
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col s12 m6 l6 xl3">
					<a href="<?php echo e(go('clinica.pacientes.index')); ?>?status=0&obito=1">
						<div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
							<div class="padding-4">
								<div class="row">
									<div class="col s7 m7">
										<i class="material-icons-outlined background-round mt-5">church</i>
										<p>Pacientes</p>
									</div>
									<div class="col s5 m5 right-align">
										<h5 class="mb-0 white-text"><?php echo e($total['pacientes']['falecidos']); ?></h5>
										<p class="no-margin">Falecidos</p>
										
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!--card stats end-->

		
	</div>

	<!-- START RIGHT SIDEBAR NAV -->
	<aside id="right-sidebar-nav">
		<div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation right-aligned" style="transform: translateX(105%);">
			<div class="row">
				<div class="slide-out-right-title">
					<div class="col s12 border-bottom-1 pb-0 pt-1">
						<div class="row">
							<div class="col s2 pr-0 center">
								<i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
							</div>
							<div class="col s10 pl-0">
								<ul class="tabs">
									<li class="tab col s4 p-0">
										<a href="#messages" class="active">
											<span>Messages</span>
										</a>
									</li>
									<li class="tab col s4 p-0">
										<a href="#settings">
											<span>Settings</span>
										</a>
									</li>
									<li class="tab col s4 p-0">
										<a href="#activity">
											<span>Activity</span>
										</a>
									</li>
									<li class="indicator" style="left: 0px; right: 188px;"></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-out-right-body row pl-3 ps ps--active-y">
					<div id="messages" class="col s12 pb-0 active">
						<div class="collection border-none mb-0">
							<input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages">
							<ul class="collection right-sidebar-chat p-0 mb-0">
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Elizabeth Elliott</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
									</div>
									<span class="secondary-content medium-small">5.00 AM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Mary Adams</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
									</div>
									<span class="secondary-content medium-small">4.14 AM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Caleb Richards</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
									</div>
									<span class="secondary-content medium-small">4.14 AM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Caleb Richards</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
									</div>
									<span class="secondary-content medium-small">9.00 PM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">June Lane</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
									</div>
									<span class="secondary-content medium-small">4.14 AM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Edward Fletcher</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
									</div>
									<span class="secondary-content medium-small">5.15 PM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Crystal Bates</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
									</div>
									<span class="secondary-content medium-small">8.00 AM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Nathan Watts</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
									</div>
									<span class="secondary-content medium-small">9.53 PM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Willard Wood</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
									</div>
									<span class="secondary-content medium-small">4.20 AM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Ronnie Ellis</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
									</div>
									<span class="secondary-content medium-small">5.20 AM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Daniel Russell</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
									</div>
									<span class="secondary-content medium-small">12.00 AM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-10.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Sarah Graves</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
									</div>
									<span class="secondary-content medium-small">11.14 PM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Andrew Hoffman</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
									</div>
									<span class="secondary-content medium-small">7.30 PM</span>
								</li>
								<li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
									<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-12.png" alt="avatar">
										<i></i>
									</span>
									<div class="user-content">
										<h6 class="line-height-0">Camila Lynch</h6>
										<p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
									</div>
									<span class="secondary-content medium-small">2.00 PM</span>
								</li>
							</ul>
						</div>
					</div>
					<div id="settings" class="col s12" style="display: none;">
						<p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
						<ul class="collection border-none">
							<li class="collection-item border-none">
								<div class="m-0">
									<span>Notifications</span>
									<div class="switch right">
										<label>
											<input checked="" type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
							<li class="collection-item border-none">
								<div class="m-0">
									<span>Show recent activity</span>
									<div class="switch right">
										<label>
											<input type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
							<li class="collection-item border-none">
								<div class="m-0">
									<span>Show recent activity</span>
									<div class="switch right">
										<label>
											<input type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
							<li class="collection-item border-none">
								<div class="m-0">
									<span>Show Task statistics</span>
									<div class="switch right">
										<label>
											<input type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
							<li class="collection-item border-none">
								<div class="m-0">
									<span>Show your emails</span>
									<div class="switch right">
										<label>
											<input type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
							<li class="collection-item border-none">
								<div class="m-0">
									<span>Email Notifications</span>
									<div class="switch right">
										<label>
											<input checked="" type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
						</ul>
						<p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
						<ul class="collection border-none">
							<li class="collection-item border-none">
								<div class="m-0">
									<span>System Logs</span>
									<div class="switch right">
										<label>
											<input type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
							<li class="collection-item border-none">
								<div class="m-0">
									<span>Error Reporting</span>
									<div class="switch right">
										<label>
											<input type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
							<li class="collection-item border-none">
								<div class="m-0">
									<span>Applications Logs</span>
									<div class="switch right">
										<label>
											<input checked="" type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
							<li class="collection-item border-none">
								<div class="m-0">
									<span>Backup Servers</span>
									<div class="switch right">
										<label>
											<input type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
							<li class="collection-item border-none">
								<div class="m-0">
									<span>Audit Logs</span>
									<div class="switch right">
										<label>
											<input type="checkbox">
											<span class="lever"></span>
										</label>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div id="activity" class="col s12" style="display: none;">
						<div class="activity">
							<p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
							<ul class="widget-timeline mb-0">
								<li class="timeline-items timeline-icon-green active">
									<div class="timeline-time">Today</div>
									<h6 class="timeline-title">Homepage mockup design</h6>
									<p class="timeline-text">Melissa liked your activity.</p>
									<div class="timeline-content orange-text">Important</div>
								</li>
								<li class="timeline-items timeline-icon-cyan active">
									<div class="timeline-time">10 min</div>
									<h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
									<p class="timeline-text">Here are some news feed interactions concepts.</p>
									<div class="timeline-content green-text">Resolved</div>
								</li>
								<li class="timeline-items timeline-icon-red active">
									<div class="timeline-time">30 mins</div>
									<h6 class="timeline-title">12 new users registered</h6>
									<p class="timeline-text">Here are some news feed interactions concepts.</p>
									<div class="timeline-content">
										<img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Registration.doc
									</div>
								</li>
								<li class="timeline-items timeline-icon-indigo active">
									<div class="timeline-time">2 Hrs</div>
									<h6 class="timeline-title">Tina is attending your activity</h6>
									<p class="timeline-text">Here are some news feed interactions concepts.</p>
									<div class="timeline-content">
										<img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Activity.doc
									</div>
								</li>
								<li class="timeline-items timeline-icon-orange">
									<div class="timeline-time">5 hrs</div>
									<h6 class="timeline-title">Josh is now following you</h6>
									<p class="timeline-text">Here are some news feed interactions concepts.</p>
									<div class="timeline-content red-text">Pending</div>
								</li>
							</ul>
							<p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
							<ul class="widget-timeline mb-0">
								<li class="timeline-items timeline-icon-green active">
									<div class="timeline-time">Just now</div>
									<h6 class="timeline-title">New order received urgent</h6>
									<p class="timeline-text">Melissa liked your activity.</p>
									<div class="timeline-content orange-text">Important</div>
								</li>
								<li class="timeline-items timeline-icon-cyan active">
									<div class="timeline-time">05 min</div>
									<h6 class="timeline-title">System shutdown.</h6>
									<p class="timeline-text">Here are some news feed interactions concepts.</p>
									<div class="timeline-content blue-text">Urgent</div>
								</li>
								<li class="timeline-items timeline-icon-red">
									<div class="timeline-time">20 mins</div>
									<h6 class="timeline-title">Database overloaded 89%</h6>
									<p class="timeline-text">Here are some news feed interactions concepts.</p>
									<div class="timeline-content">
										<img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Database-log.doc
									</div>
								</li>
							</ul>
							<p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
							<ul class="widget-timeline mb-0">
								<li class="timeline-items timeline-icon-green active">
									<div class="timeline-time">10 min</div>
									<h6 class="timeline-title">System error</h6>
									<p class="timeline-text">Melissa liked your activity.</p>
									<div class="timeline-content red-text">Error</div>
								</li>
								<li class="timeline-items timeline-icon-cyan">
									<div class="timeline-time">1 min</div>
									<h6 class="timeline-title">Production server down.</h6>
									<p class="timeline-text">Here are some news feed interactions concepts.</p>
									<div class="timeline-content blue-text">Urgent</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
						<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
					</div>
					<div class="ps__rail-y" style="top: 0px; height: 636px; right: 0px;">
						<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 320px;"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Slide Out Chat -->
		<ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat right-aligned">
			<li class="center-align pt-2 pb-2 sidenav-close chat-head">
				<a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
			</li>
			<li class="chat-body">
				<ul class="collection ps ps--active-y">
					<li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
						<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
						</span>
						<div class="user-content speech-bubble">
							<p class="medium-small">hello!</p>
						</div>
					</li>
					<li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
						<div class="user-content speech-bubble-right">
							<p class="medium-small">How can we help? We're here for you!</p>
						</div>
					</li>
					<li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
						<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
						</span>
						<div class="user-content speech-bubble">
							<p class="medium-small">I am looking for the best admin template.?</p>
						</div>
					</li>
					<li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
						<div class="user-content speech-bubble-right">
							<p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
						</div>
					</li>

					<li class="collection-item display-grid width-100 center-align">
						<p>8:20 a.m.</p>
					</li>

					<li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
						<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
						</span>
						<div class="user-content speech-bubble">
							<p class="medium-small">Ohh! very nice</p>
						</div>
					</li>
					<li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
						<div class="user-content speech-bubble-right">
							<p class="medium-small">Thank you.</p>
						</div>
					</li>
					<li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
						<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
						</span>
						<div class="user-content speech-bubble">
							<p class="medium-small">How can I purchase it?</p>
						</div>
					</li>

					<li class="collection-item display-grid width-100 center-align">
						<p>9:00 a.m.</p>
					</li>

					<li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
						<div class="user-content speech-bubble-right">
							<p class="medium-small">From ThemeForest.</p>
						</div>
					</li>
					<li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
						<div class="user-content speech-bubble-right">
							<p class="medium-small">Only $24</p>
						</div>
					</li>
					<li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
						<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
						</span>
						<div class="user-content speech-bubble">
							<p class="medium-small">Ohh! Thank you.</p>
						</div>
					</li>
					<li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
						<span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
						</span>
						<div class="user-content speech-bubble">
							<p class="medium-small">I will purchase it for sure.</p>
						</div>
					</li>
					<li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
						<div class="user-content speech-bubble-right">
							<p class="medium-small">Great, Feel free to get in touch on</p>
						</div>
					</li>
					<li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
						<div class="user-content speech-bubble-right">
							<p class="medium-small">https://pixinvent.ticksy.com/</p>
						</div>
					</li>
					<div class="ps__rail-x" style="left: 0px; bottom: -723px;">
						<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
					</div>
					<div class="ps__rail-y" style="top: 723px; height: 505px; right: 0px;">
						<div class="ps__thumb-y" tabindex="0" style="top: 298px; height: 207px;"></div>
					</div>
				</ul>
			</li>
			<li class="center-align chat-footer">
				<form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
					<div class="input-field">
						<input id="icon_prefix" type="text" class="search">
						<label for="icon_prefix">Type here..</label>
						<a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
					</div>
				</form>
			</li>
		</ul>
	</aside>
	<!-- END RIGHT SIDEBAR NAV -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('clinica.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alissonp/www/transvida/application/resources/views/clinica/dashboard.blade.php ENDPATH**/ ?>