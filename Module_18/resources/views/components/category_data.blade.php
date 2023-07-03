<section class="py-5">
  <div class="container px-5 mb-5">
    <div class="text-center mb-5">
      <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Latest Post For Each Category</span>
      </h1>
    </div>
    <div class="row gx-5 justify-content-center">
      <div id="project-list" class="col-lg-11 col-xl-9 col-xxl-8">
        @foreach ($categories as $category)
        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">

          <div class="card-body p-0">

            <div class="d-flex align-items-center">
              <div class="p-5">

                <h2>{{ $category->name }}</h2>

                @if( $category->LatestPost())
                <div>
                  <h3>{{ $category->LatestPost()->name }}</h3>
                  <p>{{ $category->LatestPost()->description }}</p>
                </div>
                @else
                <p>No posts found for this category.</p>
                @endif

              </div>

            </div>
          </div>

        </div>
        @endforeach

      </div>
    </div>
  </div>
</section>