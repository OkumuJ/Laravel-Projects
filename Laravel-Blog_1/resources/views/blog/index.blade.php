

@extends('layouts.main')


@section('content')




	<!-- Begin Featured
	================================================== -->

		<h2><span>Home Page</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">

		<!-- begin post -->
		<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class ="post-image-specs"><a href=" "><img src= "{{ asset($post->imagePath) }}" class="thumbnail" style="background-image" alt="img"></a>
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><a href="post.html">We're living some strange times</a></h2>
						<h4 class="card-title"><a href="post.html">{{ $post->title }}</a></h4>
                          <h4 class="card-text">{{ substr(strip_tags($post->body), 0, 150) }}
                            {{ strlen($post->body) >50 ? "......" : " " }}</h4>

                            <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            <div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
								</span>
								<span class="post-name"><a href="author.html"><b>Posted: &nbsp;</b>{{ $post->created_at->diffForHumans() }} &nbsp;<b>By:</b>{{ $post->user->name ?? 'None' }}</a></span><br/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

	</div>

@endsection
