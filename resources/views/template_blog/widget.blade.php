		<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
						</a>
					</div>
					<!-- /ad widget -->

					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="{{url ('https://www.facebook.com/') }}" class="social-facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="{{url ('https://twitter.com/') }}" class="social-twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="{{url ('https://myaccount.google.com/ ') }}" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach($category_widget as $hasil)
								<li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->

					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="#"><img src="{{ asset('frontend/img/widget-3.jpg')}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="#">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="#">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="#"><img src="{{ asset('frontend/img/widget-2.jpg')}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="#">Technology</a>
									<a href="#">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="#">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="#"><img src="{{ asset('frontend/img/widget-4.jpg')}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="#">Health</a>
								</div>
								<h3 class="post-title"><a href="#">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="#"><img src="{{ asset('frontend/img/widget-5.jpg')}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="#">Health</a>
									<a href="#">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="#">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /post widget -->
				</div>