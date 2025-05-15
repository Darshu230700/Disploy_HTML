<?php
$api_url = "https://back.disploy.com/api/Common/GetAllPlans";
$response = file_get_contents($api_url);
// Decode the JSON response into an associative array
$data = json_decode($response, true);
// echo "<pre>";
// print_r($data);
// echo "</pre>";
?>



<section class="section section-sm section-fluid bg-img1">
    <div class="container">
        <h3>Our Pricing Plan</h3>

        <!-- <div class="bill-type">
      <div class="monthly">Billed monthly</div>
      <div class="bill-toggle">
        <input type="checkbox" id="bill-toggle"  >
        <label for="bill-toggle"></label>
      </div>
      <div class="annually">Billed anually</div>
    </div> -->

        <div class="row row-50 row-sm">
            <!-- Pricing Block -->
            <?php foreach ($data['data'] as $plan) : ?>
            <div class="pricing-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box h-100">
                    <div class="icon-box">
                        <div class="icon-outer">
                            <?php if ($plan['planName'] == 'Basic') {  ?>
                            <i class="fa fa-paper-plane"></i>
                            <?php } ?>

                            <?php if ($plan['planName'] == 'Standard') {  ?>
                            <i class="fa fa-plane"></i>
                            <?php } ?>

                            <?php if ($plan['planName'] == 'Premium') {  ?>
                            <i class="fa fa-diamond"></i>
                            <?php } ?>

                            <?php if ($plan['planName'] == 'Enterprise') {  ?>
                            <i class="fa fa-rocket"></i>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="price-box">
                        <div class="title">
                          <?php echo $plan['planName'] ?>
                            <?php if ($plan['planName'] == 'Enterprise') : ?>
                            <div class="mb-3 mt-2">
                                <h4 class="price">Call us at: </h4>
                                <p class="d-block">+1 224 244 9969</p>
                            </div>

                            <div class="btn-box">
                                <a href="#" data-toggle="modal" data-target="#talktosale" class="theme-btn">Talk To Sale</a>
                            </div>

                            <?php endif; ?>
                            <!-- Enterprise model end -->
                        </div>

                        <?php if ($plan['planName'] !== 'Enterprise') : ?>
                        <h4 class="price">$<?php echo $plan['planPrice'] ?></h4>
                        <?php endif; ?>
                    </div>
                    <?php if ($plan['planName'] !== 'Enterprise') : ?>
                    <ul class="features">
                        <?php foreach ($plan['planDetails'] as $planItems) : ?>
                        <li class="true"><?php echo $planItems['featureType'] ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="#" data-toggle="modal" data-target="#basic-plan"
                        class="mb-3 d-block">See all features</a>
                    <div class="btn-box">
                        <a href="http://web.disploy.com/PaymentIntegration/<?php echo $plan['listOfPlansID']; ?>"
                            class="theme-btn">BUY plan</a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php foreach ($data['data'] as $key => $plan) : ?>
<!-- large modal -->
<div class="modal fade modal-center" id="basic-plan" tabindex="-1" role="dialog"
    aria-labelledby="basicModal" aria-hidden="true">
    <div class="d-flex justify-content-center align-items-center h-100 w-100">
      <div class="modal-dialog min-width800 centered" >
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">Plan comparison</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="accordion" id="faq">
                      <?php foreach ($plan['planDetails'] as $index => $planItems) : ?>
                      <div class="card">
                          <div class="card-header" id="basic-plan-faqhead<?= $key . $index ?>">
                              <div class="btn btn-header-link w-100">
                                  <a href="#" class="w-100 collapsed d-flex justify-content-between" data-toggle="collapse"
                                      data-target="#basic-plan-faq<?= $key . $index ?>" aria-expanded="true"
                                      aria-controls="basic-plan-faq<?= $key . $index ?>">
                                      <span class="w-40per"><?= $planItems['featureType'] ?></span>
                                        <span class="">Basic</span>
                                        <span class="">Standard</span>
                                        <span class="">Premium</span>
                                        <span class="">Enterprise</span>
                                  </a>
                                  
                              </div>
                          </div>

                          <div id="basic-plan-faq<?= $key . $index ?>" class="collapse"
                              aria-labelledby="basic-plan-faqhead<?= $key . $index ?>" data-parent="#faq">
                              <div class="card-body" style="max-height: 300px; overflow: auto;">
                                  <table class="table table-bordered table-layout">
                                     <tbody>
                                        <?php foreach ($planItems['lstOfFeatures'] as $index => $lstOfFeatures) : ?>
                                   <tr>
                                   <td><?= $lstOfFeatures['name'] ?></td>
                                  <td>
                              <?php
                                foreach ($data['data'] as $key => $plan1) {
                                  if ($plan1['planName'] == "Basic") {
                                    foreach ($plan1['planDetails'] as $index => $planItems1) {
                                      if ($planItems1['featureType'] == $planItems['featureType']) {
                                        foreach ($planItems1['lstOfFeatures'] as $index => $lstOfFeatures1) {
                                          if ($lstOfFeatures1['name'] == $lstOfFeatures['name']) {
                                            if ($lstOfFeatures1['value'] == 'Yes') {
                                              echo '<i class="fa fa-check text-green-500" aria-hidden="true"></i>';
                                            } elseif ($lstOfFeatures1['value'] == 'No') {
                                              echo '<i class="fa fa-close text-green-500" aria-hidden="true"></i>';
                                            } else {
                                              echo $lstOfFeatures1['value'];
                                            }
                                          }
                                        }
                                      }
                                    }
                                  }
                                }
                                ?>
                               </td>
                                   <td>
                                  <?php
                                foreach ($data['data'] as $key => $plan1) {
                                  if ($plan1['planName'] == "Standard") {
                                    foreach ($plan1['planDetails'] as $index => $planItems1) {
                                      if ($planItems1['featureType'] == $planItems['featureType']) {
                                        foreach ($planItems1['lstOfFeatures'] as $index => $lstOfFeatures1) {
                                          if ($lstOfFeatures1['name'] == $lstOfFeatures['name']) {
                                            if ($lstOfFeatures1['value'] == 'Yes') {
                                              echo '<i class="fa fa-check text-green-500" aria-hidden="true"></i>';
                                            } elseif ($lstOfFeatures1['value'] == 'No') {
                                              echo '<i class="fa fa-close text-green-500" aria-hidden="true"></i>';
                                            } else {
                                              echo $lstOfFeatures1['value'];
                                            }
                                          }
                                        }
                                      }
                                    }
                                  }
                                }
                                ?>
                              </td>
                                 <td>
                               <?php
                                foreach ($data['data'] as $key => $plan1) {
                                  if ($plan1['planName'] == "Premium") {
                                    foreach ($plan1['planDetails'] as $index => $planItems1) {
                                      if ($planItems1['featureType'] == $planItems['featureType']) {
                                        foreach ($planItems1['lstOfFeatures'] as $index => $lstOfFeatures1) {
                                          if ($lstOfFeatures1['name'] == $lstOfFeatures['name']) {
                                            if ($lstOfFeatures1['value'] == 'Yes') {
                                              echo '<i class="fa fa-check text-green-500" aria-hidden="true"></i>';
                                            } elseif ($lstOfFeatures1['value'] == 'No') {
                                              echo '<i class="fa fa-close text-green-500" aria-hidden="true"></i>';
                                            } else {
                                              echo $lstOfFeatures1['value'];
                                            }
                                          }
                                        }
                                      }
                                    }
                                  }
                                }
                                ?>
                               </td>
                                 <td>
                                <?php
                                foreach ($data['data'] as $key => $plan1) {
                                  if ($plan1['planName'] == "Enterprise") {                          
                                    foreach ($plan1['planDetails'] as $index => $planItems1) {
                                      if ($planItems1['featureType'] == $planItems['featureType']) {
                                        foreach ($planItems1['lstOfFeatures'] as $index => $lstOfFeatures1) {
                                          if ($lstOfFeatures1['name'] == $lstOfFeatures['name']) {
                                            if ($lstOfFeatures1['value'] == 'Yes') {
                                              echo '<i class="fa fa-check text-green-500" aria-hidden="true"></i>';
                                            } elseif ($lstOfFeatures1['value'] == 'No') {
                                              echo '<i class="fa fa-close text-green-500" aria-hidden="true"></i>';
                                            } else {
                                              echo $lstOfFeatures1['value'];
                                            }
                                          }
                                        }
                                      }
                                    }
                                  }
                                }
                                ?>
                                              </td>
                                          </tr>
                                          <?php endforeach; ?>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                      <?php endforeach; ?>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default button-primary px-5 py-2" data-dismiss="modal">
                      Close
                  </button>
              </div>
          </div>
      </div>
    </div>
    
</div>
<?php endforeach; ?>

<!-- large modal -->
<div class="modal fade modal-center" id="talktosale" tabindex="-1" role="dialog"
    aria-labelledby="basicModal" aria-hidden="true">
    <div class="d-flex justify-content-center align-items-center h-100 w-100">
      <div class="modal-dialog min-width600 centered" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Talk to Sales</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                  <div class="row g-3">
                    <div class="col-md-6">                      
                      <input type="text" class="form-control mb-3" id="your-name" name="your-name" placeholder="Enter Your First Name" required>
                    </div>
                    <div class="col-md-6">                      
                      <input type="text" class="form-control mb-3" id="last-name" name="last-name" placeholder="Enter Your Last Name" required>
                    </div>
                    <div class="col-md-6">                      
                      <input type="email" class="form-control mb-3" id="your-email" name="your-email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="col-md-6">                      
                      <input type="text" class="form-control mb-3" id="phone" name="phone" placeholder="Enter Your Phone Number" required>
                    </div>
                    <div class="col-md-6">                      
                      <input type="text" class="form-control mb-3" id="company" name="company" placeholder="Enter Your Company Name" required>
                    </div>
                    <div class="col-md-6">                      
                      <input type="text" class="form-control mb-3" id="googleLocation" name="googleLocation" placeholder="Enter Your Google Location" >
                    </div>
                    <div class="col-12 d-flex justify-content-end ">
                      <button data-res="<?php echo $sum; ?>" type="submit" class="btn button-secondary px-5">Submit</button>
                    </div>
                  </div>
                </form> 
            </div>
        </div>
      </div>
    </div>
</div>