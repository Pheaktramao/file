<div class="osahan-home-page">
    <div class="bg-primary p-3 d-none">
      <div class="text-white">
        <div class="title d-flex align-items-center">
          <a class="toggle" href="#">
            <span></span>
          </a>
          <h4 class="font-weight-bold m-0 pl-5">Browse</h4>
          <a class="text-white font-weight-bold ml-auto" data-toggle="modal" data-target="#exampleModal"
            href="#">Filter</a>
        </div>
      </div>
      <div class="input-group mt-3 rounded shadow-sm overflow-hidden">
        <div class="input-group-prepend">
          <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block">
            <i class="feather-search"></i>
          </button>
        </div>
        <input type="text" class="shadow-none border-0 form-control" placeholder="Search for restaurants or dishes" />
      </div>
    </div>

    <div class="container">
      <div class="cat-slider">
        <?php 
        $cate = getAllCate();
        foreach ($cate as $value):
        ?>
        <div class="cat-item px-1 py-3">
          <a class="bg-white rounded d-block p-2 text-center shadow-sm" href="controllers/categories/categories.filter.controller.php?cateid=<?= $value[0]; ?>">
            <img alt="#" src="assets/images/icons/Fries.png" class="img-fluid mb-2" />
            <p class="m-0 small"><?php echo $value[2] ?></p>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="container">

      <div class="py-3 title d-flex align-items-center">
        <?php 
        $cateid = $_SESSION['cateid']; 
        function showCateFilter($cateid){
            global $connection;
            $statemen = $connection->prepare("select * from categories where category_id = $cateid");
            $statemen->execute();
            return $statemen->fetch();
        }

        if(showCateFilter($cateid)[2] != ''){
          $cateName = showCateFilter($cateid)[2];
        }else{
          $cateName = 'Foods';
        }

        ?> 
        <h5 class="m-0"><?php echo $cateName ?></h5>
      </div>

      <div class="most_popular">
        <div class="row">

        <?php foreach ($categories as $value): ?>

          <div class="col-md-3 pb-3">
            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
              <div class="list-card-image">
                <div class="star position-absolute">
                  <span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span>
                </div>
                <div class="favourite-heart text-danger position-absolute">
                  <a href="#"><i class="feather-heart"></i></a>
                </div>
                <div class="member-plan position-absolute">
                  <span class="badge badge-dark">Promoted</span>
                </div>
                <a href="/restaurant">
                  <img alt="#" src="assets/images/popular1.png" class="img-fluid item-img w-100" />
                </a>
              </div>
              <div class="p-3 position-relative">
                <div class="list-card-body">
                  <h6 class="mb-1">
                    <a href="/restaurant" class="text-black"> <?php print_r($value[1]) ?>
                    </a>
                  </h6>
                  <p class="text-gray mb-1 small"><?php print_r($value[2]) ?></p>
                  <p class="text-gray mb-1 rating"></p>
                  <ul class="rating-stars list-unstyled">
                    <li>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star star_active"></i>
                      <i class="feather-star"></i>
                    </li>
                  </ul>
                  <p></p>
                </div>
                <div class="list-card-badge">
                  <span class="badge badge-danger">OFFER</span>
                  <small>65% OSAHAN50</small>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
      </div>
      </div>
  </div>

  <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
    <div class="row">
      <div class="col selected">
        <a href="home.html" class="text-danger small font-weight-bold text-decoration-none">
          <p class="h4 m-0"><i class="feather-home text-danger"></i></p>
          Home
        </a>
      </div>
      <div class="col">
        <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
          <p class="h4 m-0"><i class="feather-map-pin"></i></p>
          Trending
        </a>
      </div>
      <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
        <div class="bg-danger rounded-circle mt-n0 shadow">
          <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
            <i class="feather-shopping-cart"></i>
          </a>
        </div>
      </div>
      <div class="col">
        <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
          <p class="h4 m-0"><i class="feather-heart"></i></p>
          Favorites
        </a>
      </div>
      <div class="col">
        <a href="profile.html" class="text-dark small font-weight-bold text-decoration-none">
          <p class="h4 m-0"><i class="feather-user"></i></p>
          Profile
        </a>
      </div>
    </div>
  </div>