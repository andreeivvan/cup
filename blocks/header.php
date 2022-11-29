<style data-shopi>.header {padding-top: 10px;padding-bottom: 10px;}.section-header {margin-bottom: 0px;}
        @media screen and (min-width: 750px) {.section-header {margin-bottom: 0px;}}
        @media screen and (min-width: 990px) {.header {padding-top: 20px;padding-bottom: 20px;}}
    </style>
        <script src="css/details-disclosure.js" defer="defer"></script>
        <script src="css/details-modal.js" defer="defer"></script>
        <script src="css/cart-notification.js" defer="defer"></script><svg
            xmlns="http://www.w3.org/2000/svg" class="hidden">
            <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z"
                    fill="currentColor" />
            </symbol>

            <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
                <path
                    d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                    fill="currentColor">
            </symbol>
        </svg>
<sticky-header class="header-wrapper color-background-1 gradient header-wrapper--border-bottom">
            <header class="header header--middle-left header--mobile-center page-width header--has-menu">
                <header-drawer data-breakpoint="tablet">
                    <details id="Details-menu-drawer-container" class="menu-drawer-container">
                        <summary class="header__icon header__icon--menu header__icon--summary link focus-inset"
                            aria-label="Menu">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                    role="presentation" class="icon icon-hamburger" fill="none" viewBox="0 0 18 16">
                                    <path
                                        d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z"
                                        fill="currentColor">
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                    role="presentation" class="icon icon-close" fill="none" viewBox="0 0 18 17">
                                    <path
                                        d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                                        fill="currentColor">
                                </svg>

                            </span>
                        </summary>
                        <div id="menu-drawer" class="gradient menu-drawer motion-reduce" tabindex="-1">
                            <div class="menu-drawer__inner-container">
                                <div class="menu-drawer__navigation-container">
                                    <nav class="menu-drawer__navigation">
                                        <ul class="menu-drawer__menu has-submenu list-menu" role="list">
                                            <li><a href="index.html"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Главная
                                                </a></li>
                                            <li><a href="collections.html"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Каталог
                                                </a></li>
                                            <li><a href=""
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset menu-drawer__menu-item--active"
                                                    aria-current="page">
                                                    Контакты
                                                </a></li>
                                        </ul>
                                    </nav>
                                    <div class="menu-drawer__utility-links">
                                        <ul class="list list-social list-unstyled" role="list"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </details>
                </header-drawer><a href="" class="header__heading-link link link--text focus-inset"><span
                        class="h2">cup</span></a>
                <nav class="header__inline-menu">
                    <ul class="list-menu list-menu--inline" role="list">
                        <li><a href="index.html" class="header__menu-item list-menu__item link link--text focus-inset">
                                <span>Главная</span>
                            </a></li>
                        <li><a href="collections.html"
                                class="header__menu-item list-menu__item link link--text focus-inset">
                                <span>Каталог</span>
                            </a></li>
                        <li><a href=""
                                class="header__menu-item list-menu__item link link--text focus-inset"
                                aria-current="page">
                                <span class="header__active-menu-item">Контакты</span>
                            </a></li>
                    </ul>
                </nav>
                <div class="header__icons">
                    <details-modal class="header__search">
                        <details>
                            <summary
                                class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
                                aria-haspopup="dialog" aria-label="Search">
                                <span>
                                    <svg class="modal__toggle-open icon icon-search" aria-hidden="true"
                                        focusable="false" role="presentation">
                                        <use href="#icon-search">
                                    </svg>
                                    <svg class="modal__toggle-close icon icon-close" aria-hidden="true"
                                        focusable="false" role="presentation">
                                        <use href="#icon-close">
                                    </svg>
                                </span>
                            </summary>
                            <div class="search-modal modal__content gradient" role="dialog" aria-modal="true"
                                aria-label="Search">
                                <div class="modal-overlay"></div>
                                <div class="search-modal__content search-modal__content-bottom" tabindex="-1">
                                    <predictive-search class="search-modal__form" data-loading-text="Loading...">
                                        <form action="/search" method="get" role="search"
                                            class="search search-modal__form">
                                            <div class="field">
                                                <input class="search__input field__input" id="Search-In-Modal"
                                                    type="search" name="q" value="" placeholder="Search" role="combobox"
                                                    aria-expanded="false" aria-owns="predictive-search-results-list"
                                                    aria-controls="predictive-search-results-list"
                                                    aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off"
                                                    autocomplete="off" autocapitalize="off" spellcheck="false">
                                                <label class="field__label" for="Search-In-Modal">Search</label>
                                                <input type="hidden" name="options[prefix]" value="last">
                                                <button class="search__button field__button" aria-label="Search">
                                                    <svg class="icon icon-search" aria-hidden="true" focusable="false"
                                                        role="presentation">
                                                        <use href="#icon-search">
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="predictive-search predictive-search--header" tabindex="-1"
                                                data-predictive-search>
                                                <div class="predictive-search__loading-state">
                                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                                        class="spinner" viewBox="0 0 66 66"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle class="path" fill="none" stroke-width="6" cx="33"
                                                            cy="33" r="30"></circle>
                                                    </svg>
                                                </div>
                                            </div>

                                            <span class="predictive-search-status visually-hidden" role="status"
                                                aria-hidden="true"></span>
                                        </form>
                                    </predictive-search><button type="button"
                                        class="search-modal__close-button modal__close-button link link--text focus-inset"
                                        aria-label="Close">
                                        <svg class="icon icon-close" aria-hidden="true" focusable="false"
                                            role="presentation">
                                            <use href="#icon-close">
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </details>
                    </details-modal><a href="/cart" class="header__icon header__icon--cart link focus-inset"
                        id="cart-icon-bubble"><svg class="icon icon-cart-empty" aria-hidden="true" focusable="false"
                            role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">
                            <path
                                d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z"
                                fill="currentColor" fill-rule="evenodd" />
                        </svg>
                        <span class="visually-hidden">Cart</span></a>
                </div>
            </header>
        </sticky-header>