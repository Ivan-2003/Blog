@extends('template_blog.content')
	
@section('isi')
            <div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="#"><img src="{{ asset('frontend/img/lifestyle.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title title-lg"><a href="#">After this, he became aware of them, bringing to life the danger in him</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="#"><img src="{{ asset('frontend/img/programer.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="#">However, they may encounter, how all this mistaken idea.</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="#"><img src="{{ asset('frontend/img/coffee.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">Fashion</a>
								<a href="#">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="#">Honey attack takes developers. When need be no labor, are persecuting.</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
            </div>
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						@foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug ) }}"><img src="{{ $post_terbaru->gambar }}" alt="" style="height: 200px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="{{ route('blog.isi', $post_terbaru->slug ) }}">{{ $post_terbaru->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="{{ route('blog.isi', $post_terbaru->slug ) }}">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="{{ route('blog.isi', $post_terbaru->slug ) }}">{{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach			
					</div>
				</div>
@endsection




