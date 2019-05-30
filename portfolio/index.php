<?php include ("langue/switch.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="I'm a web developer and designer,">
  <meta name="keywords" content="Portfolio,Web developer,Nouhaila,Iounousse">
  <meta name="author" content="Nouhaila Iounousse">
    <title>Portfolio Nouhaila web developer</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/ionicons.min.css" rel="stylesheet"><!-- link icon-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./img/nns2.png"/>

</head>

<body>
    <nav class=" navbar fixed-top  navbar-expand-lg navbar-light bg-light navbar-fixed-top" style="">
        <a class="navbar-brand" href="#"><img src="img/nns2.png" style="width: 40%;margin-right: 0px;" alt=""></a>
        <button class="navbar-toggler" type="button" style="padding: 0px" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" onclick="$('index.php').animatescroll();"><?= _Home?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about" onclick="$('#about').animatescroll();"><?= _About?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pro" onclick="$('#pro').animatescroll();"><?= _Project?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contact" onclick="$('#Contact').animatescroll();">Contact</a>
                </li>


            </ul>
        </div>
        <form method='get' action='' id='form_lang' >
                        <select id ="botto" class="btn btn-outline-secondary dropdown-toggle"  name='lang' onchange='changeLang();'>
                        <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?>  ><?= _English ?></option>
                        <option value='fr' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'fr'){ echo "selected"; } ?>  ><?= _Frensh ?></option>
                        </select>
                        </form>
    </nav>

    <div class="jumbotron mb-0" style="height: 100vh;">
        <div class="black">
            <div>
                <h1 class="display-3 prin" style="text-align: center; padding-top: 20%;
                "><?=_Jesuis?> Nouhaila IOUNOUSSE!
                </h1>
            </div>




            <p class="mb-3" style="color:white;text-align: center; margin-top: 4rem; font-size: 24px;"><span class="typed">
                </span> </p>
        </div>
    </div>

    <section id="about">
        <div class="container" style="margin-top: 5%;">
            <div class="title-box text-center" style="margin-bottom: 5%;">
                <h3 class="title-a ">
                    <?=_me?>
                </h3>
                <div class="line-mf"></div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="img/lol.png" class="img-fluid rounded b-shadow-a" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s"><?=_Name?> </span> <span>Nouhaila IOUNOUSSE</span></p>
                                            <p><span class="title-s"><?=_Profile?> </span> <span>full stack developer</span>
                                            </p>
                                            <p><span class="title-s">Email: </span> <span>nouhaila.nns@gmail.com</span>
                                            </p>
                                            <p><span class="title-s"><?=_Phone?> </span> <span>(+212)657820239</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf" id="about">
                                    <h1 class="title-s"><?=_Skill?></h1>
                                    <span>HTML</span> <span class="pull-right">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>CSS3</span> <span class="pull-right">60%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>JAVASCRIPT</span> <span class="pull-right">40%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 40% !important" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>photoshop</span> <span class="pull-right">50%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50% !important" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Adobe xD </span> <span class="pull-right">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70% !important" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>
                                    <p class="lead"><?=_para?>
                        
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--/ Section Portfolio Star /-->
    <section id="pro" class=" sect-pt4 route">
        <div class="container" style="margin-top: 10%;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a mt-5 ">
                        <?=_Project?>
                        </h3>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box">

                        <div class="work-img">
                            <a href="https://github.com/nouhailaiounousse/cv" target="_blank"><img src="img/cv.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="work-content">

                            <h2 class="w-title w-100 text-center">Project CV</h2>




                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">

                        <div class="work-img">
                            <a href="https://github.com/nouhailaiounousse/slackk" target="_blank"><img src="img/slack.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="work-content">


                            <h2 class="w-title w-100 text-center">Project Slack</h2>




                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">

                        <div class="work-img">
                            <a href="https://github.com/nouhailaiounousse/cssatelier" target="_blank"><img src="img/atelier.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="work-content">


                            <h2 class="w-title w-100 text-center">Atelier CSS</h2>




                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">

                        <div class="work-img">
                            <a href="https://github.com/nouhailaiounousse/gallery" target="_blank"><img src="img/flex1.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="work-content">


                            <h2 class="w-title w-100 text-center">project Panel Gallery</h2>




                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">

                        <div class="work-img">
                            <a href="https://github.com/nouhailaiounousse/gallery" target="_blank"><img src="img/calcul.png" alt="" class="img-fluid"></a>
                            <!-- <a href="https://github.com/nouhailaiounousse/gallery" target="_blank"><img src="img/calcul2.png" alt="" class="img-fluid"></a> -->
                        </div>
                        <div class="work-content">


                            <h2 class="w-title w-100 text-center">Calcul JS</h2>

                         </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">

                        <div class="work-img">
                            <a href="https://github.com/nouhailaiounousse/nounousse" target="_blank"><img src="img/nounousse.png" alt="" class="img-fluid"></a>
                        </div>
                        <div class="work-content">


                            <h2 class="w-title w-100 text-center">Project Blur</h2>




                        </div>
                        </a>
                    </div>
                </div>
                <?php include "admin/includes/set.php"; ?>
            </div>
        </div>
    </section>
    <!--/ Section Portfolio End /-->
    <!--/ Section Contact-Footer Star /-->
    <section id="Contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-color:black;">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                           <?= _Send?>
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="inc/mail.php" method="post" role="form" class="contactForm">
                                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                                            <div id="errormessage"></div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="<?=_yr?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="<?=_ye?>" data-rule="email" data-msg="Please enter a valid email" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subj" id="subject" placeholder="<?=_Subject?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="msg" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <input name="submit" type="submit" class="button button-a button-big button-rouded" value="<?=_se?>">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5">
                                    <div class="title-box-2 pt-4 pt-md-0"> -->
                                       
                                    </div>
                                    <div class="more-info">
                                        
                                        <ul class="list-ico title-left">
                                            <li><span class="ion-ios-location mr-2"></span> Morroco , Youssoufia HAY MOHMADI street LALA AMINA N°4 </li>
                                            <li><span class="ion-ios-telephone mr-2"></span> +212 657820239</li>
                                            <li><span class="ion-email mr-2"></span> nouhaila.iounousse@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul style="list-style: none;" class="mt-3 d-flex flex-row">
                                            <li class="mx-3"><a href="https://www.facebook.com/nouhaila.nns"><span
                                                        class="ico-circle"><i class="ion-social-facebook "
                                                            style="color:white; width: 48px;"></i></span></a></li>
                                            <li class="mx-3"><a href="https://www.instagram.com/p/BwsIos7hR_m/"><span
                                                        class="ico-circle"><i class="ion-social-instagram"
                                                            style="color:white;"></i></span></a></li>
                                            <li class="mx-3"><a href="https://twitter.com/nouhailaiounou1"><span
                                                        class="ico-circle"><i class="ion-social-twitter"
                                                            style="color:white;"></i></span></a></li>
                                            <li class="mx-3"><a href="https://www.linkedin.com/in/nouhaila-iounousse-39910a184/"><span
                                                        class="ico-circle"><i class="ion-social-linkedin"
                                                            style="color:white;"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="credits">

                                    Designed by <a href="NNS">NNS</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </footer>
    </section>
    <!-- / Section Contact-footer End / -->







    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script><!--cdn typed-->


<!-- link bootsrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="js/xD..js"></script>
    <script src="js/animatescroll.js"></script>


</body>

</html>