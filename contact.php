<!doctype html>
<html lang="ru">

<?php require_once "./blocks/head.php";//подключаем head.php?>

<body class="gradient">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
        Skip to content
    </a>
    <!-- <div id="shopi-section-announcement-bar" class="shopi-section">
        <div class="announcement-bar color-background-1 gradient" role="region" aria-label="Announcement">
            <div class="page-width">
                <p class="announcement-bar__message center h5">
                    Welcome to our store
                </p>
            </div>
        </div>
    </div> -->
    <div id="shopi-section-header" class="shopi-section section-header">
        <link rel="stylesheet" href="css/component-list-menu.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/component-search.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/component-menu-drawer.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/component-cart-notification.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/component-cart-items.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/component-price.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/component-loading-overlay.css" media="print"
            onload="this.media='all'"><noscript>
            <link href="css/component-list-menu.css" rel="stylesheet" type="text/css"
                media="all" />
        </noscript>
        <noscript>
            <link href="css/component-search.css" rel="stylesheet" type="text/css"
                media="all" />
        </noscript>
        <noscript>
            <link href="css/component-menu-drawer.css" rel="stylesheet" type="text/css"
                media="all" />
        </noscript>
        <noscript>
            <link href="css/component-cart-notification.css?v=183358051719344305851669310784" rel="stylesheet"
                type="text/css" media="all" />
        </noscript>
        <noscript>
            <link href="css/component-cart-items.css" rel="stylesheet" type="text/css"
                media="all" />
        </noscript>
        
        <?php require_once "./blocks/header.php";//подключаем header.php?>

        <cart-notification>
            <div class="cart-notification-wrapper page-width">
                <div id="cart-notification" class="cart-notification focus-inset color-background-1 gradient"
                    aria-modal="true" aria-label="Item added to your cart" role="dialog" tabindex="-1">
                    <div class="cart-notification__header">
                        <h2 class="cart-notification__heading caption-large text-body"><svg
                                class="icon icon-checkmark color-foreground-text" aria-hidden="true" focusable="false"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 9" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z"
                                    fill="currentColor" />
                            </svg>
                            Item added to your cart</h2>
                        <button type="button"
                            class="cart-notification__close modal__close-button link link--text focus-inset"
                            aria-label="Close">
                            <svg class="icon icon-close" aria-hidden="true" focusable="false">
                                <use href="#icon-close">
                            </svg>
                        </button>
                    </div>
                    <div id="cart-notification-product" class="cart-notification-product"></div>
                    <div class="cart-notification__links">
                        <a href="/cart" id="cart-notification-button"
                            class="button button--secondary button--full-width"></a>
                        <form action="/cart" method="post" id="cart-notification-form">
                            <button class="button button--primary button--full-width" name="checkout">Check out</button>
                        </form>
                        <button type="button" class="link button-label">Continue shopping</button>
                    </div>
                </div>
            </div>
        </cart-notification>
        <style data-shopi>
            .cart-notification {
                display: none;
            }
        </style>


        <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "cup",
    
    "sameAs": [
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/cup.myshopi.com\/pages\/contact"
  }
</script>
    </div>
    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
        <section id="shopi-section-template--16303083815177__main" class="shopi-section section">
            <link rel="stylesheet" href="css/section-main-page.css" media="print"
                onload="this.media='all'">
            <link rel="stylesheet" href="css/component-rte.css" media="print"
                onload="this.media='all'">

            <noscript>
                <link href="css/section-main-page.css" rel="stylesheet" type="text/css"
                    media="all" />
            </noscript>
            <noscript>
                <link href="css/component-rte.css" rel="stylesheet" type="text/css"
                    media="all" />
            </noscript>
            <style data-shopi>
                .section-template--16303083815177__main-padding {
                    padding-top: 27px;
                    padding-bottom: 27px;
                }

                @media screen and (min-width: 750px) {
                    .section-template--16303083815177__main-padding {
                        padding-top: 36px;
                        padding-bottom: 36px;
                    }
                }
            </style>
            <div class="page-width page-width--narrow section-template--16303083815177__main-padding">
                <h1 class="main-page-title page-title h0">
                    Контакты
                </h1>
                <div class="rte">

                </div>
            </div>


        </section>
        <section id="shopi-section-template--16303083815177__form" class="shopi-section section">
            <link href="css/section-contact-form.css" rel="stylesheet" type="text/css"
                media="all" />
            <style data-shopi>
                .section-template--16303083815177__form-padding {
                    padding-top: 27px;
                    padding-bottom: 27px;
                }

                @media screen and (min-width: 750px) {
                    .section-template--16303083815177__form-padding {
                        padding-top: 36px;
                        padding-bottom: 36px;
                    }
                }

            
            </style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>$(document).ready(function(){
        $("#done").click(function(){
            $('#massageShow').hide();
            var name=$("#name").val();var email=$("#email").val();var subject=$("#subject").val();var massage=$("#massage").val();var fail="";
            if(name.length<3) fail="Имя не меньше 3 символов";//проверка
            else if(email.split('@').length-1==0||email.split('.').length-1==0) fail="Вы ввели некорректный EMAIL";
            else if(subject.length<5) fail="Тема сообщения не менее 5 символов";//проверка
            else if(massage.length<20) fail="Сообщение не менее 20 символов";//проверка
            if(fail!=""){
                $('#massageShow').html(fail+"<div class='clear'><br></div>");
                $('#massageShow').show();
                return false;
            }
            $.ajax({
                url: './ajax/feedback.php',
                type: 'POST',
                cache: false,
                data: {'name':name, 'email':email, 'subject':subject, 'massage':massage},
                dataType: 'html',
                success:function(data){
                    $('#massageShow').html(data+"<div class='clear'><br></div>");
                    $('#massageShow').show();
                }});});});</script>

            <div class="color-background-1 gradient">
                <div class="contact page-width page-width--narrow section-template--16303083815177__form-padding">
                    <h2 class="visually-hidden">Контакты form</h2>
                    <input type="hidden" name="form_type" value="contact" /><input type="hidden"
                            name="utf8" value="✓" />
                        <div class="contact__fields">
                            <div class="field">
                                <input class="field__input" autocomplete="name" type="text" id="name"
                                    name="contact[Name]" value="" placeholder="Name">
                                <label class="field__label" for="ContactForm-name">Ваше имя</label>
                            </div>
                            <div class="field field--with-error">
                                <input autocomplete="email" type="email" id="email" class="field__input"
                                    name="contact[email]" spellcheck="false" autocapitalize="off" value=""
                                    aria-required="true" placeholder="Email">
                                <label class="field__label" for="ContactForm-email">Email <span
                                        aria-hidden="true">*</span></label>
                            </div>
                        </div>
                        <div class="field">
                            <input type="tel" id="subject" class="field__input" autocomplete="tel"
                                name="contact[Subject]" value="" placeholder="Subject">
                            <label class="field__label" for="ContactForm-phone">Тема обращения</label>
                        </div>
                        <div class="field">
                            <textarea rows="10" id="massage" class="text-area field__input"
                                name="contact[Comment]" placeholder="Comment"></textarea>
                            <label class="form__label field__label" for="ContactForm-body">Комментарий</label>
                        </div>
                        <div class="contact__button">
                            <button type="button" class="button" name="done" id="done">
                                Отправить
                            </button>
                            <p id="massageShow"></p>
                        </div>
                    
                </div>
            </div>


        </section>
    </main>

    <div id="shopi-section-footer" class="shopi-section">
        <link href="css/section-footer.css" rel="stylesheet" type="text/css"
            media="all" />
        <link rel="stylesheet" href="css/component-newsletter.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/component-list-menu.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/component-list-payment.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/component-list-social.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/component-rte.css" media="print"
            onload="this.media='all'">
        <link rel="stylesheet" href="css/disclosure.css" media="print"
            onload="this.media='all'">

        <noscript>
            <link href="css/component-newsletter.css" rel="stylesheet" type="text/css"
                media="all" />
        </noscript>
        <noscript>
            <link href="css/component-list-menu.css" rel="stylesheet" type="text/css"
                media="all" />
        </noscript>
        <noscript>
            <link href="css/component-list-payment.css" rel="stylesheet" type="text/css"
                media="all" />
        </noscript>
        <noscript>
            <link href="css/component-list-social.css" rel="stylesheet" type="text/css"
                media="all" />
        </noscript>
        <noscript>
            <link href="css/component-rte.css" rel="stylesheet" type="text/css"
                media="all" />
        </noscript>
        <noscript>
            <link href="css/disclosure.css" rel="stylesheet" type="text/css"
                media="all" />
        </noscript>
        <style data-shopi>
            .footer {
                margin-top: 36px;
            }

            .section-footer-padding {
                padding-top: 27px;
                padding-bottom: 27px;
            }

            @media screen and (min-width: 750px) {
                .footer {
                    margin-top: 48px;
                }

                .section-footer-padding {
                    padding-top: 36px;
                    padding-bottom: 36px;
                }
            }
        </style>
        <?php require_once "./blocks/footer.php";//подключаем footer.php?>




    </div>

    <ul hidden>
        <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
        <li id="a11y-new-window-message">Opens in a new window.</li>
    </ul>

    <script>
        window.shopUrl = 'https://cup.myshopi.com';
        window.routes = {
            cart_add_url: '/cart/add',
            cart_change_url: '/cart/change',
            cart_update_url: '/cart/update',
            cart_url: '/cart',
            predictive_search_url: '/search/suggest'
        };

        window.cartStrings = {
            error: `There was an error while updating your cart. Please try again.`,
            quantityError: `You can only add [quantity] of this item to your cart.`
        }

        window.variantStrings = {
            addToCart: `Add to cart`,
            soldOut: `Sold out`,
            unavailable: `Unavailable`,
        }

        window.accessibilityStrings = {
            imageAvailable: `Image [index] is now available in gallery view`,
            shareSuccess: `Link copied to clipboard`,
            pauseSlideshow: `Pause slideshow`,
            playSlideshow: `Play slideshow`,
        }
    </script>
    <script src="css/predictive-search.js" defer="defer"></script>
</body>

</html>