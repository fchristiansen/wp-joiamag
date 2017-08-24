<section class="section more-recent-reviews">
          <div class="container">
         <p class="text-uppercase">Lo más leído / Esta semana</h1>

            <div class="row mb-5">
            <?php
            $args = array(

                'limit' => 4,
                'range' => 'weekly',
                'freshness' => 1,
                'order_by' => 'views',
                'post_type' => 'post',
                'thumbnail_width' => 600,
                'thumbnail_height' => 400,
                'stats_category' => 1,
                'post_html' =>'
                    <div class="col-md-3">
                    <li>
                      <article class="card card-section-features">
                        <div class="card-inner">
                          <div class="card-figure">
                            <figure>
                              <a href="{url}">
                                    {thumb}
                              </a>
                            </figure>
                            <div class="card-body">
                              <div class="card-meta">
                                <a href="{url}">
                                  <i class="icon-section-features"></i>{category}
                                </a>
                              </div>
                              <div class="card-title">
                                <a href="{url}">
                                  <h1 class="h6">{title}</h1>

                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </article>
                  </li>
                  </div>'

            );

            wpp_get_mostpopular( $args );
            ?>
          </div>

            <p class="text-uppercase">Lo más leído / Este mes</h1>

            <div class="row">
                <?php
                $args = array(

                    'limit' => 4,
                    'range' => 'monthly',
                    'freshness' => 1,
                    'order_by' => 'views',
                    'post_type' => 'post',
                    'thumbnail_width' => 600,
                    'thumbnail_height' => 400,
                    'stats_category' => 1,
                    'post_html' =>'
                        <div class="col-md-3">
                        <li>
                          <article class="card card-section-features">
                            <div class="card-inner">
                              <div class="card-figure">
                                <figure>
                                  <a href="{url}">
                                        {thumb}
                                  </a>
                                </figure>
                                <div class="card-body">
                                  <div class="card-meta">
                                    <a href="{url}">
                                      <i class="icon-section-features"></i>{category}
                                    </a>
                                  </div>
                                  <div class="card-title">
                                    <a href="{url}">
                                      <h1 class="h6">{title}</h1>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                        </li>
                      </div>'
                );
                  wpp_get_mostpopular( $args );
                ?>

            </div>
          </div>
        </section>
