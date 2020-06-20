<nav class="c-nav">
    <a class="webaim-skipto" href="#webaim-primary-nav">Jump to Primary Navigation</a>
    <a class="webaim-skipto" href="#webaim-secondary-nav">Jump to Secondary Navigation</a>
    <a class="webaim-skipto" href="#webaim-tertiary-nav">Jump to Tertiary Navigation</a>
    <div class="c-nav_menu">
        <div class="c-nav_menu_background">
            <div class="c-nav_menu_background_inner"></div>
            <div class="c-nav_menu_loop">
                <div class="c-nav_menu_loop_outer">
                    <a href="#lookbook-section" data-route="menu" class="c-nav_menu_loop_link js-scrollto">Primula Lookbook</a>
                    <a href="/" data-route="menu" class="c-nav_menu_loop_link -nothome">Primula Lookbook</a>

                    <div class="c-nav_menu_loop_inner">Primula Lookbook — Primula Lookbook — Primula Lookbook — </div>
                    <div class="c-nav_menu_loop_inner">Primula Lookbook — Primula Lookbook — Primula Lookbook — </div>
                </div>
            </div>
        </div>
        <div class="c-nav_menu_inner">
            <div class="c-nav_list_collection">
                <div>
                    <div class="c-nav_list_collection-item" aria-labelledby="primary-nav-label">
                        <!-- use aria-labeledby only when you have a label inside, like the one bellow -->
                        <div id="primary-nav-label" hidden>Primary</div>
                        
                        <?php if ( function_exists( clean_custom_menus() ) ) clean_custom_menus(); ?>
                        
                    </div>
                    <div class="c-nav_list_collection-item" aria-labelledby="secondary-nav-label">
                        <div id="secondary-nav-label" hidden>Secondary</div>
                        <ul class="c-nav_menu_list -secondary">
                            <li class="c-nav_menu_item delay-6">
                                <a href="#about-section" class="js-scrollto" id="webaim-secondary-nav">
                                    About
                                </a>
                            </li>
                            <li class="c-nav_menu_item delay-7">
                                <a href="#lookbook-section" data-route="menu" class="js-scrollto">
                                    Lookbook
                                </a>
                            </li>
                            <li class="c-nav_menu_item delay-8">
                                <a href="https://www.facebook.com/messages/t/100048007606224" target="_blank" class="no-barba">
                                    Contact
                                </a>
                            </li>
                            <li class="c-nav_menu_item delay-9">
                                <a href="https://www.facebook.com/PrimulaZagreb/" target="_blank" class="no-barba">
                                    Facebook
                                </a>
                            </li>
                            <li class="c-nav_menu_item delay-10">
                                <a href="https://www.instagram.com/PrimulaZagreb/" target="_blank" class="no-barba">
                                    Instagram
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="c-nav_list_collection-item" aria-labelledby="webaim-select-language-nav">
                        <div id="webaim-select-language-nav" hidden>Select Language</div>
                        <ul class="c-nav_menu_list -langs">
                            <a href="/en" data-route="menu" class="o-link -lang no-barba" id="webaim-select-language-nav">
                                en
                            </a>
                            <a href="/hr" data-route="menu" class="o-link -lang no-barba">
                                hr
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-header__panel">
        <button class="c-nav_button js-nav-button">
            <div class="c-nav_button_inner">
                <span class="c-nav_button_icon -shape">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M2 8 L22 8 L22 10 L2 10 Z"></path>
                        <path d="M2 15 L22 15 L22 17 L2 17 Z"></path>
                    </svg>
                </span>
                <span class="c-nav_button_icon -close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path class="c-svg_path -cw45" d="M2 11 L22 11 L22 13 L2 13 Z"></path>
                        <path class="c-svg_path -ccw45" d="M2 11 L22 11 L22 13 L2 13 Z"></path>
                    </svg>
                </span>
            </div>
        </button>
    </div>
</nav>
