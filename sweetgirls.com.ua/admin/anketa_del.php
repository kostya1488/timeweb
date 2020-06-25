<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ru">
<head>
    <title>��������� "Sweet Girls" - ������
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Language" content="ru">
    <meta http-equiv="keywords"
          content="���������� � ����������, ������������ � ���������, ����� ������ ������, ������������������ ������ ��� �������">
    <meta name="keywords"
          content="���������� � ����������, ������������ � ���������, ����� ������ ������, ������������������ ������ ��� �������">
    <meta http-equiv="description"
          content="���� ������ ��������� ���������� ���������� � ���������� ��� ������� � ��������� �������.">
    <meta name="description"
          content="���� ������ ��������� ���������� ���������� � ���������� ��� ������� � ��������� �������.">
    <meta name="Classification" content="">
    <meta name="robots" content="all">
    <meta name="Revizit-after" content="15 days">
    <meta name="RATING" content="General">
    <meta name="DISTRIBUTION" content="GLOBAL">
    <meta name="RESOURCE-TYPE" content="DOCUMENT">
    <link REL="SHORTCUT ICON" HREF="/favicon.ico">
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <link rel="stylesheet" href="/templates/new/styles/foundation.min.css@v=1.5.css">
    <link rel="stylesheet" href="/templates/new/styles/app.css@v=1.6.1.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135445289-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-135445289-1');
    </script>
    <style type="text/css">
        b.captcha {
            background: #a80a3e;
            padding: 9px;
            text-decoration: line-through;
            font-family: fantasy;
            color: wheat;
        }

        select#metro {
            width: 47em;
        }

        select#busts {
            width: 47em;
        }

        select#education {
            width: 47em;
        }
    </style>
</head>
<body>
<div class="colorlib-loader"></div>

<div id="page" class="js">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-md-push-5 no-gutters text-center">
                        <div id="colorlib-logo">
                            <a href="/index.html" class="colorlib-logo__img">
                                <img src="/templates/new/images/logo.png" alt="Sweet Girls"><br>
                                <span>Sweet Girls</span>
                            </a>
                            <a href="tel:+380(67) 539-13-44" class="colorlib-logo__phone">+380(67) 539-13-44</a>
                            <a href="tel:+380(67) 539-13-44" class="colorlib-logo__phone">+380(67) 508-68-65</a>
                            <a href="tel:+380(67) 539-13-44" class="colorlib-logo__phone">+380(67) 470-37-90</a>
                            <div class="colorlib-logo__worktime">��������� � 10:00-22:00</div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-pull-2 no-gutters text-right menu-1">
                        <ul>
                            <li><a href="/" target="_self" title="�������">�������</a></li>
                            <li><a href="/ru/models/" target="_self" title="������">������</a></li>

                        </ul>
                    </div>
                    <div class="col-md-5 no-gutters text-left menu-1">
                        <ul>
                            <li><a href="/ru/services/" target="_self" title="���� ������">���� ������</a></li>
                            <li><a href="/ru/vacancy/" target="_self" title="��������">��������</a></li>
                            <li><a href="/ru/contacts/" target="_self" title="��������">��������</a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="video-hero"
             style="background-image: url('/data/images/new/main-img.jpg');  background-size:cover; background-position: center center;"
             data-section="home">
        <div class="display-t text-center">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="animate-box">
                            <span class="main-title white-text"><span class="bordo underline-styled">�������</span> ������ � �����</span>
                            <div class="breadcrumbs" itemscope itemtype="http://schema.org/WebPage">
                                <p class="breadcrumbs__inner" itemprop="breadcrumb">
                                    <span class="breadcrumbs__item" itemscope
                                          itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/"
                                                                                              class="breadcrumbs__link"
                                                                                              itemprop="url"><span
                                                itemprop="title">�������</span></a></span>
                                    <span class="breadcrumbs__item breadcrumbs__item_last" itemscope
                                          itemtype="http://data-vocabulary.org/Breadcrumb">
												  <span itemprop="title">
													  ������ "Sweet Girls"												  </span>
											  </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="main-center">
        <p>
        <div class="container">
            <div class="row row-pb-sm">
                <div class="col-md-12">


                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box">
                    <?php
                    require_once ('param.php');
                    if (!isset($_POST['send'])) {
                        $query = "Select id,name From mail";
                        $rez =  @mysqli_query($dbs,$query) or die ("Error Select");
                        $del =  @mysqli_fetch_array($rez);


                        ?>
                        <label>�� ������������� ������ ������� ������</label>
                        <form action="anketa_del.php" method="post">
                            <input name="del" value="yes" type="radio">��
                            <input name="del" value="no" type="radio">���
                            <input name="id" value="<?=$del['id']?>" type="hidden">
                            <input name="send" value="�������" type="submit">
                        </form>
                        <?php
                    }

                    else if ($_POST['del']=="yes") {

                        $query = "delete from mail where id=" . $_POST['id'];

                        @mysqli_query($dbs, $query) or die ("Error Delete");

                        ?>
                        <div class="col-md-12 animate-box">
                            <h3>�������� ������ �������</h3>
                        </div>
                        <?php
                    }
                    else
                    {

                    ?>
                    <div class="col-md-12 animate-box">
                        <h3>�������� �������� ��� �� ��������</h3>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>


    </div>
    <!-- END .main-center -->

    <footer id="colorlib-footer">
        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>sweetgirls.com.ua&copy; 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
</div>
<!-- END #page -->
<script src="/templates/new/js/foundation.js@v=1.3.1"></script>
<script src="/templates/new/js/app.js@v=1.4.7"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter501755 = new Ya.Metrika2({
                    id: 501755,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true,
                    trackHash: true,
                    ut: "noindex"
                });
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks2"); </script> <!-- /Yandex.Metrika counter -->
<!-- Begin Talk-Me {literal} -->
<script type='text/javascript'>     (function (d, w, m) {
        window.supportAPIMethod = m;
        var s = d.createElement('script');
        s.type = 'text/javascript';
        s.id = 'supportScript';
        s.charset = 'utf-8';
        s.async = true;
        var id = 'e0d9b4f81b64f6f4d04eec23d1cf53cd';
        s.src = '//lcab.talk-me.ru/support/support.js?h=' + id;
        var sc = d.getElementsByTagName('script')[0];
        w[m] = w[m] || function () {
            (w[m].q = w[m].q || []).push(arguments);
        };
        if (sc) sc.parentNode.insertBefore(s, sc); else d.documentElement.firstChild.appendChild(s);
    })(document, window, 'TalkMe'); </script> <!-- {/literal} End Talk-Me -->
</body>
</html>
</body>
</html>