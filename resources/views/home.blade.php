@extends('layouts.app')
@section('content')
@include('partials.header')

<main class="main">
  <div class="page-title position-relative">
    <div class="container d-flex justify-content-between align-items-center">
      <h1 class="mb-0">Posts</h1>
      <form action="" class="d-flex align-items-center gap-2">
        <h3 class="widget-title mb-0">Search</h3>
        <input type="text" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-dark" title="Search">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <div class="col-lg-8">

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">

          <div class="container">
            <div class="row gy-4">

              <div class="col-lg-6">
                <article class="position-relative h-100">

                  <div class="post-img position-relative overflow-hidden">
                    <img src="{{ asset('storage/blog-img.jpg') }}" class="img-fluid" alt="">
                    <span class="post-date">December 12</span>
                  </div>

                  <div class="post-content d-flex flex-column">

                    <h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>

                    <div class="meta d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
                      </div>
                      <span class="px-3 text-black-50">/</span>
                      <div class="d-flex align-items-center">
                        <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                      </div>
                    </div>

                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                    </p>

                    <hr>

                    <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                  </div>

                </article>
              </div><!-- End post list item -->

              <div class="col-lg-6">
                <article class="position-relative h-100">

                  <div class="post-img position-relative overflow-hidden">
                    <img src="{{ asset('storage/blog-img.jpg') }}" class="img-fluid" alt="">
                    <span class="post-date">March 19</span>
                  </div>

                  <div class="post-content d-flex flex-column">

                    <h3 class="post-title">Nisi magni odit consequatur autem nulla dolorem</h3>

                    <div class="meta d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                      </div>
                      <span class="px-3 text-black-50">/</span>
                      <div class="d-flex align-items-center">
                        <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                      </div>
                    </div>

                    <p>
                      Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                    </p>

                    <hr>

                    <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                  </div>

                </article>
              </div><!-- End post list item -->

              <div class="col-lg-6">
                <article class="position-relative h-100">

                  <div class="post-img position-relative overflow-hidden">
                    <img src="{{ asset('storage/blog-img.jpg') }}" class="img-fluid" alt="">
                    <span class="post-date">June 24</span>
                  </div>

                  <div class="post-content d-flex flex-column">

                    <h3 class="post-title">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</h3>

                    <div class="meta d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span>
                      </div>
                      <span class="px-3 text-black-50">/</span>
                      <div class="d-flex align-items-center">
                        <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                      </div>
                    </div>

                    <p>
                      Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                    </p>

                    <hr>

                    <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                  </div>

                </article>
              </div><!-- End post list item -->

              <div class="col-lg-6">
                <article class="position-relative h-100">

                  <div class="post-img position-relative overflow-hidden">
                    <img src="{{ asset('storage/blog-img.jpg') }}" class="img-fluid" alt="">
                    <span class="post-date">August 05</span>
                  </div>

                  <div class="post-content d-flex flex-column">

                    <h3 class="post-title">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</h3>

                    <div class="meta d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span>
                      </div>
                      <span class="px-3 text-black-50">/</span>
                      <div class="d-flex align-items-center">
                        <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                      </div>
                    </div>

                    <p>
                      Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
                    </p>

                    <hr>

                    <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                  </div>

                </article>
              </div><!-- End post list item -->

            </div>
          </div>

        </section><!-- /Blog Posts Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">

          <div class="container">
            <div class="d-flex justify-content-center">
              <ul>
                <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li>...</li>
                <li><a href="#">10</a></li>
                <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
              </ul>
            </div>
          </div>

        </section><!-- /Blog Pagination Section -->

      </div>

      <div class="col-lg-4 sidebar">

        <div class="widgets-container">
          <!-- Recent Posts Widget -->
          <div class="recent-posts-widget widget-item">

            <h3 class="widget-title">Recent Posts</h3>

            <div class="post-item">
              <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End recent post item-->

            <div class="post-item">
              <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End recent post item-->

            <div class="post-item">
              <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End recent post item-->

            <div class="post-item">
              <img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End recent post item-->

            <div class="post-item">
              <img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
              <div>
                <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>
            </div><!-- End recent post item-->

          </div><!--/Recent Posts Widget -->

        </div>

      </div>

    </div>
  </div>

</main>
@endsection