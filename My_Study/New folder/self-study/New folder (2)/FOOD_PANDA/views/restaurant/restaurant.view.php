<?php
   $resDetail = (detailRes($_GET['id']));
?>
<div class="d-none">
        <div class="bg-primary p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">Osahan Bar</h4>
        </div>
    </div>
    <div class="offer-section py-4">
        <div class="container position-relative">
            <img alt="#" src="assets/images/trending1.png" class="restaurant-pic">
            <div class="pt-3 text-white">
                <h2 class="font-weight-bold"><?php echo $resDetail[1] ?></h2>
                <p class="text-white m-0"><?php echo $resDetail[2] ?></p>
                <div class="rating-wrap d-flex align-items-center mt-2">
                    <ul class="rating-stars list-unstyled">
                        <li>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star text-warning"></i>
                            <i class="feather-star"></i>
                        </li>
                    </ul>
                    <p class="label-rating text-white ml-2 small"> (245 Reviews)</p>
                </div>
            </div>
            <div class="pb-4">
                <div class="row">
                    <div class="col-6 col-md-2">
                        <p class="text-white-50 font-weight-bold m-0 small">Open time</p>
                        <p class="text-white m-0"><?php echo $resDetail[3] ?> AM</p>
                    </div>
                    <div class="col-6 col-md-2">
                        <p class="text-white-50 font-weight-bold m-0 small">Close time</p>
                        <p class="text-white m-0"><?php echo $resDetail[6] ?> PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="p-3 bg-primary bg-primary mt-n3 rounded position-relative">
            <div class="d-flex align-items-center">
                <div class="feather_icon">
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                            class="p-2 bg-light rounded-circle font-weight-bold  feather-upload"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark mx-2"><i
                            class="p-2 bg-light rounded-circle font-weight-bold  feather-star"></i></a>
                    <a href="#ratings-and-reviews" class="text-decoration-none text-dark"><i
                            class="p-2 bg-light rounded-circle font-weight-bold feather-map-pin"></i></a>
                </div>
                <a href="contact-us.html" class="btn btn-sm btn-outline-light ml-auto">Contact</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class>
            <p class="font-weight-bold pt-4 m-0">FEATURED ITEMS</p>

            <div class="trending-slider rounded">
            <?php for ($i=0; $i < 6 ; $i++): ?>
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
                <a href="/restaurant?id=<?php print_r($data[$i][0]) ?>">
                  <img alt="#" src="<?php print_r ($pic[$i]) ?>" />
                </a>
              </div>
              <div class="p-3 position-relative">
                <div class="list-card-body">
                  <h6 class="mb-1">
                    <a href="/restaurant" class="text-black"> <?php print_r($data[$i][1]) ?>
                    </a>
                  </h6>
                  <p class="text-gray mb-1 small"><?php print_r($data[$i][2]) ?></p>
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
          <?php endfor; ?>
            </div>
        </div>
    </div>

    

    <div class="container position-relative">
        <div class="row">
            <div class="col-md-8 pt-3">
                <div class="shadow-sm rounded bg-white mb-3 overflow-hidden">
                    <div class="d-flex item-aligns-center">
                        <p class="font-weight-bold h6 p-3 border-bottom mb-0 w-100">Menu</p>

                    </div>
                    <?php 
                        $cate = getCate($_GET['id']);
                        foreach ($cate as $value):
                    ?>
                    <div class="row m-0">
                        <h6 class="p-3 m-0 bg-light w-100"><?= $value[1] ?></h6>
                        <div class="col-md-12 px-0 border-top">
                            <div class>
                            <?php 
                                $foods = getFoods($value[0]);
                                foreach($foods as $food):
                            ?>
                                <div class="p-3 border-bottom gold-members">
                                    <span class="float-right"><a class="btn btn-outline-secondary btn-sm" id="add">ADD</a></span>
                                    <div class="media">
                                        <div class="mr-3 font-weight-bold text-danger non_veg">.</div>
                                        <div class="media-body">
                                            <h6 class="mb-1"><?php echo $food[1] ?> </h6>
                                            <p class="text-muted mb-0">$<?php echo $food[3]; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="mb-3">
                    <div id="ratings-and-reviews"
                        class="bg-white shadow-sm d-flex align-items-center rounded p-3 mb-3 clearfix restaurant-detailed-star-rating">
                        <h6 class="mb-0">Rate this Place</h6>
                        <div class="star-rating ml-auto">
                            <div class="d-inline-block h6 m-0"><i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star text-warning"></i>
                                <i class="feather-star"></i>
                            </div>
                            <b class="text-black ml-2">334</b>
                        </div>
                    </div>
                    <div class="bg-white rounded p-3 mb-3 clearfix graph-star-rating rounded shadow-sm">
                        <h6 class="mb-0 mb-1">Ratings and Reviews</h6>
                        <p class="text-muted mb-4 mt-1 small">Rated 3.5 out of 5</p>
                        <div class="graph-star-rating-body">
                            <div class="rating-list">
                                <div class="rating-list-left font-weight-bold small">5 Star</div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar bg-info" aria-valuenow="56"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                    </div>
                                </div>
                                <div class="rating-list-right font-weight-bold small">56 %</div>
                            </div>
                            <div class="rating-list">
                                <div class="rating-list-left font-weight-bold small">4 Star</div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar bg-info" aria-valuenow="23"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                    </div>
                                </div>
                                <div class="rating-list-right font-weight-bold small">23 %</div>
                            </div>
                            <div class="rating-list">
                                <div class="rating-list-left font-weight-bold small">3 Star</div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar bg-info" aria-valuenow="11"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 11%;"></div>
                                    </div>
                                </div>
                                <div class="rating-list-right font-weight-bold small">11 %</div>
                            </div>
                            <div class="rating-list">
                                <div class="rating-list-left font-weight-bold small">2 Star</div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar bg-info" aria-valuenow="6"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 6%;"></div>
                                    </div>
                                </div>
                                <div class="rating-list-right font-weight-bold small">6 %</div>
                            </div>
                            <div class="rating-list">
                                <div class="rating-list-left font-weight-bold small">1 Star</div>
                                <div class="rating-list-center">
                                    <div class="progress">
                                        <div role="progressbar" class="progress-bar bg-info" aria-valuenow="4"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 4%;"></div>
                                    </div>
                                </div>
                                <div class="rating-list-right font-weight-bold small">4 %</div>
                            </div>
                        </div>
                        <div class="graph-star-rating-footer text-center mt-3"><button type="button"
                                class="btn btn-primary btn-block btn-sm">Rate and Review</button></div>
                    </div>
                    <div class="bg-white p-3 mb-3 restaurant-detailed-ratings-and-reviews shadow-sm rounded">

                        
                        <a class="text-primary float-right" href="#">Top Rated</a>
                        <h6 class="mb-1">All Ratings and Reviews</h6>
                        <?php 
                        $cmts = (showCmtOfRes($_GET['id']));
                        foreach ($cmts as $key => $cmt):
                        ?>
                        <div class="reviews-members py-3">
                            <div class="media">
                                <a href="#"><img alt="#" src=" <?php echo "assets/images/user/".$cmt['user_img']; ?>" class="mr-3" style="width: 35px; height: 35px; border-radius: 50%;"></a>
                                <div class="media-body">
                                    <div class="reviews-members-header">
                                        <div class="star-rating float-right">
                                            <div class="d-inline-block" style="font-size: 14px;"><i
                                                    class="feather-star text-warning"></i>
                                                <i class="feather-star text-warning"></i>
                                                <i class="feather-star text-warning"></i>
                                                <i class="feather-star text-warning"></i>
                                                <i class="feather-star"></i>
                                            </div>
                                        </div>
                                        <h6 class="mb-0"><a class="text-dark" href="#"><?php echo $cmt['username']; ?></a></h6>
                                        <p class="text-muted small"><?php echo $cmt['date']; ?></p>
                                    </div>
                                    <div class="reviews-members-body">
                                        <p><?php echo $cmt['contents']; ?></p>
                                    </div>
                                    <div class="reviews-members-footer"><a
                                            class="total-like btn btn-sm btn-outline-primary" href="#"><i
                                                class="feather-thumbs-up"></i> 856M</a> <a
                                            class="total-like btn btn-sm btn-outline-primary" href="#"><i
                                                class="feather-thumbs-down"></i> 158K</a>
                                        <span class="total-like-user-main ml-2" dir="rtl">
                                            <a href="#" aria-describedby="tooltip-top0"><img alt="#"
                                                    src="assets/images/reviewer3.png" class="total-like-user rounded-pill"></a>
                                            <a href="#" aria-describedby="tooltip-top1"><img alt="#"
                                                    src="assets/images/reviewer4.png" class="total-like-user rounded-pill"></a>
                                            <a href="#"><img alt="#" src="assets/images/reviewer5.png"
                                                    class="total-like-user rounded-pill"></a>
                                            <a href="#" aria-describedby="tooltip-top3"><img alt="#"
                                                    src="assets/images/reviewer6.png" class="total-like-user rounded-pill"></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <a class="text-center w-100 d-block mt-3 font-weight-bold" href="#">See All Reviews</a>
                    </div>
                    <div class="bg-white p-3 rating-review-select-page rounded shadow-sm">
                        <h6 class="mb-3">Leave Comment</h6>
                        <div class="d-flex align-items-center mb-3">
                            <p class="m-0 small">Rate the Place</p>
                            <div class="star-rating ml-auto">
                                <div class="d-inline-block"><i class="feather-star text-warning"></i>
                                    <i class="feather-star text-warning"></i>
                                    <i class="feather-star text-warning"></i>
                                    <i class="feather-star text-warning"></i>
                                    <i class="feather-star"></i>
                                </div>
                            </div>
                        </div>
                        <form action="controllers/restaurant/comment.restaurants.php?id=<?php echo $_GET['id'];?>" method="post">
                            <div class="form-group"><label class="form-label small">Your Comment</label><textarea
                                    class="form-control" name="comment"></textarea></div>
                            <div class="form-group mb-0"><input type="submit" class="btn btn-primary btn-block"> Submit
                                    Comment </input></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pt-3">
                <div class="osahan-cart-item rounded rounded shadow-sm overflow-hidden bg-white sticky_sidebar">
                    <div class="d-flex border-bottom osahan-cart-item-profile bg-white p-3">
                        <img alt="osahan" src="assets/images/starter1.jpg" class="mr-3 rounded-circle img-fluid">
                        <div class="d-flex flex-column">
                            <h6 class="mb-1 font-weight-bold"><?php echo $resDetail[1] ?></h6>
                            <p class="mb-0 small text-muted"><i class="feather-map-pin"></i> <?php echo $resDetail[2] ?></p>
                        </div>
                    </div>
                    <div class="bg-white border-bottom py-2" id="group-add">
                        
                    </div>
                    <div class="bg-white p-3 py-3 border-bottom clearfix">
                        <div class="input-group-sm mb-2 input-group">
                            <input placeholder="Enter promo code" type="text" class="form-control">
                            <div class="input-group-append"><button type="button" class="btn btn-primary"><i
                                        class="feather-percent"></i> APPLY</button></div>
                        </div>
                        <div class="mb-0 input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="feather-message-square"></i></span></div>
                            <textarea placeholder="Any suggestions? We will pass it on..." aria-label="With textarea"
                                class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="bg-white p-3 clearfix border-bottom">
                        <p class="mb-1">Item Total <span class="float-right text-dark">$3140</span></p>
                        <p class="mb-1">Delivery Fee<span class="text-info ml-1"><i
                                    class="feather-info"></i></span><span class="float-right text-dark">$10</span></p>
                        <p class="mb-1 text-success">Total Discount<span class="float-right text-success">$1884</span>
                        </p>
                        <hr>
                        <h6 class="font-weight-bold mb-0">TO PAY <span class="float-right">$1329</span></h6>
                    </div>
                    <div class="p-3">
                        <a class="btn btn-success btn-block btn-lg" href="controllers/orders/order.controller.php">PAY $1329<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
        <div class="row">
            <div class="col">
                <a href="home.html" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-home text-dark"></i></p>
                    Home
                </a>
            </div>
            <div class="col selected">
                <a href="trending.html" class="text-danger small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                    Trending
                </a>
            </div>
            <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                <div class="bg-danger rounded-circle mt-n0 shadow">
                    <a href="/checkout" class="text-white small font-weight-bold text-decoration-none">
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
    </div>

    <?php echo '<script src="vendor/js/addfood.js"></script>'; ?>