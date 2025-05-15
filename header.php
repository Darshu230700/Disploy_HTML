
<?php
// Dynamically generate the title based on the current page
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$page_name = basename(parse_url($actual_link, PHP_URL_PATH)); // Extract the page name from the URL

// Define page titles based on page names
switch ($page_name) {
    case 'Disploy-front':
        $actualTitle = 'Home';
        break;
    case 'about':
        $actualTitle = 'Disploy-About';
        break;
    case 'contact':
        $actualTitle = 'Disploy-Contact';
        break;
    case 'pricing':
        $actualTitle = 'Disploy-pricing';
        break;
    case 'privacy-policy':
        $actualTitle = 'Disploy-Privacy Policy';
        break;
    case 'terms_conditions':
        $actualTitle = 'Disploy-Terms Conditions';
        break;
    case 'retail':
        $actualTitle = 'Disploy-Retail Signage';
        break;
    case 'digital-menu-board':
        $actualTitle = 'Disploy-Digital Menu Board';
        break;
    case 'hotel':
        $actualTitle = 'Disploy-Hotel Signage';
        break;
    case 'hospital':
        $actualTitle = 'Disploy-Hospital Signage';
        break;
    case 'event':
        $actualTitle = 'Disploy-Event Signage';
        break;
    case 'enterprise':
        $actualTitle = 'Disploy-Enterprise Signage';
        break;
    case 'gym-fitness':
        $actualTitle = 'Disploy-Gym and Fitness Centere';
        break;
    case 'banking':
        $actualTitle = 'Disploy-Banking';
        break;
    case 'education':
        $actualTitle = 'Disploy-Education';
        break;
    case 'faqs':
        $actualTitle = 'Disploy-FAQs';
        break;
    case 'download-apps':
        $actualTitle = 'Disploy-Apps Download';
        break;
    case 'blogs':
        $actualTitle = 'Disploy-Blogs';
        break;
    case 'blog-single':
        $actualTitle = 'Disploy-Blog Single';
        break;
    case 'privacy-policy':
        $actualTitle = 'Disploy-Privacy Policy';
        break;
    case 'privacy-policy-korean':
        $actualTitle = 'Disploy-개인정보 보호정책';
        break;
    case 'terms_conditions':
        $actualTitle = 'Disploy-Terms & Conditions';
        break;
    default:
        // Default title if the page is not recognized
        $actualTitle = 'Disploy';
        break;
}

?>

<?php
$api_url = "https://back.disploy.com/api/Common/GetTrialPeriodDetails";
$response = file_get_contents($api_url);

// Decode the JSON response into an associative array
$data = json_decode($response, true);

// Print the decoded data using print_r

// echo "<pre>";
// echo "Trial Days: " . $data['data']['trialDays'];
// print_r($data);
// echo "</pre>";

?>



<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
  <title><?php echo $actualTitle; ?></title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,200&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container"><span></span><span></span><span></span><span></span>
      </div>
    </div>
  </div>
  <div class="page">
    <!-- Top Header-->
    <?php if ($data['data']['isActive'] === true) {  ?>
    <div class="section section-banner text-center d-none d-xl-block bg-color-darkgrey">
        <p>Start your <?php echo $data['data']['trialDays'] ?> days trial today! <a class="button-btn" href="https://web.disploy.com/register">SIGN UP NOW!</a>
        </p>
    </div>
    <?php } ?>

    <!-- Page Header-->
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
          data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
          data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main flex align-items-center justify-content-between">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="https://disploy.com"><img
                      src="images/logo-default-229x43.png" alt="" width="229" height="43" /></a></div>
              </div>
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="https://disploy.com">Home</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about">About</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="pricing">Pricing</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link sub-menu-icon">Industries</a>
                      <ul class="sub-menu">
                        <li><a class="" href="retail">Retail</a></li>
                        <li><a class="" href="digital-menu-board">Digital Menu Board</a></li>
                        <li><a class="" href="hospital">Hospital</a></li>
                        <li><a class="" href="hotel">Hotel</a></li>
                        <li><a class="" href="event">Event</a></li>
                        <li><a class="" href="enterprise">Enterprise/Office</a></li>
                        <li><a class="" href="banking">Banking</a></li>
                        <li><a class="" href="education">Education</a></li>
                        <li><a class="" href="gym-fitness">Gym and Fitness Centere</a></li>
                      </ul>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link sub-menu-icon">Pages</a>
                        <ul class="sub-menu">
                            <li><a class="" href="faqs">FAQ's</a></li>
                            <li><a class="" href="blogs">Blogs</a></li>
                            <li><a class="" href="contact">Contact</a></li>
                        </ul>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="download-apps">Download</a></li>
                    <li class="rd-nav-item py-4">
                      <a class="button-btn" href="https://web.disploy.com">Login</a>
                    </li>                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Page Header END-->
