<div class="main">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url(); ?>">Home</a></li>
			<li class="active">Membership</li>
		</ol>
	</div>
	<div class="container">
		<div class="col-lg-9 col-md-9">
			<h3>Apply For/Upgrade Your Membership</h3>
			<p style="text-align: justify;font-size: 14px">As you progress through your career, acquiring new skills, qualifications and experience, you will become eligible for higher grades of IMarEST membership.</p>
			<p  style="text-align: justify;font-size: 14px">Upgrading membership recognises the additional skills and experience you have acquired and provides employers evidence of your commitment to your career in the marine industry.</p>
			<p  style="text-align: justify;font-size: 14px">It also makes you eligible to apply for registration and gain further recognition of your professional status. At the point at which you apply to upgrade your membership, you may also wish to apply for registration simultaneously.</p>
		</div>
		<div class="col-lg-3 col-md-3">
			<div style="padding:5px;font-size: 14px;box-shadow: 2px 2px grey;box-shadow: 0 0 3px rgba(0,0,0,0.3) inset">
				<center>
					<p><i class="fa fa-question-circle"></i> Choose Membership Grade ?</p>
					<a href="http://www.imarest.org/membership/membership-registration/upgrade-your-membership/membership-wizard" target="_blank"><button class="btn btn-warning btn-sm"><i class="fa fa-magic"> Wizard..</i></button></a>
				</center>
			</div>
			<div style="padding:5px;font-size: 14px;margin-top:3px;box-shadow: 0 0 3px rgba(0,0,0,0.3) inset">
				<center>
					<p><i class="fa fa-check-square-o"></i>Employer has a streamlined...</p>
					<a href="http://www.imarest.org/join-us/streamlined-routes" target="_blank"><button class="btn btn-warning btn-sm" target="_blank"><i class="fa fa-road"> Route..?</i></button></a>
				</center>
			</div>
			<div style="padding:5px;font-size: 14px;margin-top:3px;box-shadow: 0 0 3px rgba(0,0,0,0.3) inset">
				<center>
					<p><i class="fa fa-check-square-o"></i>Already know?</p>
					<a href="http://www.imarest.org/join-us/streamlined-routes" target="_blank"><button class="btn btn-success btn-sm" target="_blank"><i class="fa fa-sign-in"> Route..?</i></button></a>
				</center>
			</div>
		</div>
	</div>
	<div class="container">
		<h2>Membership Grades</h2>
		<ul id="portfolio-filter">
			<li class="active" style="font-size:14px"><a href="#" data-filter="*">All</a></li>
			<li style="font-size:14px"><a href="#" data-filter=".student">High Level Career?</a></li>
			<li style="font-size:14px"><a href="#" data-filter=".affiliate">Established Career?</a></li>
			<li style="font-size:14px"><a href="#" data-filter=".associate">Education?</a></li>
			<li style="font-size:14px"><a href="#" data-filter=".member">Early Career?</a></li>
			<li style="font-size:14px"><a href="#" data-filter=".fellow">Just Want Access?</a></li>
			<li style="font-size:14px"><a href="#" data-filter=".marine-membership">Organisation or Company?</a></li>
		</ul>
		<div class="row">
			<div id="portfolio-item-container" class="max-col-3 popup-gallery" data-layoutmode="fitRows">
				<div class="portfolio-item hover-anim student">
					<figure>
						<a href="<?php echo site_url("membership/student");?>"  title="Student">
						<img src="<?php echo site_url();?>assets/images/student.png" alt="student"></a>
					</figure>
					<div class="portfolio-meta">
						<h3 class="portfolio-title"><a href="<?php echo site_url("membership/student");?>">Student</a></h3>
					</div>
				</div>
				<div class="portfolio-item hover-anim affiliate">
					<figure>
						<a href="<?php echo site_url("membership/affiliate");?>"  title="Affiliate">
						<img src="<?php echo site_url();?>assets/images/affiliate.png" alt="Affiliate"></a>
					</figure>
					<div class="portfolio-meta">
						<h3 class="portfolio-title"><a href="<?php echo site_url("membership/affiliate"); ?>">Affiliate</a></h3>
					</div>
				</div>
				<div class="portfolio-item hover-anim associate">
					<figure>
						<a href="<?php echo site_url("membership/associate");?>"  title="Associate">
						<img src="<?php echo site_url();?>assets/images/associate.png" alt="Associate"></a>
					</figure>
					<div class="portfolio-meta">
						<h3 class="portfolio-title"><a href="<?php echo site_url("membership/associate"); ?>">Associate</a></h3>
					</div>
				</div>
				<div class="portfolio-item hover-anim member">
					<figure>
						<a href="<?php echo site_url("membership/member");?>"  title="Member">
						<img src="<?php echo site_url();?>assets/images/member.png" alt="member"></a>
					</figure>
					<div class="portfolio-meta">
						<h3 class="portfolio-title"><a href="<?php echo site_url("membership/member"); ?>">Member</a></h3>
					</div>
				</div>
				<div class="portfolio-item hover-anim fellow">
					<figure>
						<a href="<?php echo site_url("membership/fellow");?>"  title="Fellow">
						<img src="<?php echo site_url();?>assets/images/fellow.png" alt="fellow"></a>
					</figure>
					<div class="portfolio-meta">
						<h3 class="portfolio-title"><a href="<?php echo site_url("membership/fellow"); ?>">Fellow</a></h3>
					</div>
				</div>
				<div class="portfolio-item hover-anim fonts marine-membership">
					<figure>
						<a href="<?php echo site_url("membership/marine-membership");?>"  title="Marine Membership">
						<img src="<?php echo site_url();?>assets/images/marine.png" alt="Marine Membership"></a>
					</figure>
					<div class="portfolio-meta">
						<h3 class="portfolio-title"><a href="<?php echo site_url("membership/marine-membership");?>">Marine Membership</a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>