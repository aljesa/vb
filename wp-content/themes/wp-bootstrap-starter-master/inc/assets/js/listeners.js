var $ = jQuery;

$(document).ready(function () {
    window.Listener = {
        contentModule: "", init: function () {
            this.contentModule = $("[data-module]").data("module");
            if (this.contentModule !== undefined && typeof this["setup" + this.contentModule] == "function") {
                this["setup" + this.contentModule]();
            }
            this.preloader();
            this.stickyHeader();

        },
        preloader: function (){
          $(".site-preloader-wrap").fadeOut();
        },

        stickyHeader: function (){
            $(window).on("scroll", function () {
                if ($(window).scrollTop() > 50) {
                    $(".main-navigation").addClass("sticky");
                } else {
                    $(".main-navigation").removeClass("sticky");
                }
            });
        },
        initSlick: function(){
            var homeSlider = $('#main-slider');
            if(homeSlider.length > 0){
                homeSlider.on('init', function(e, slick) {
                    var $firstAnimatingElements = jQuery('div.single-slide:first-child').find('[data-animation]');
                    doAnimations($firstAnimatingElements);
                });
                homeSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
                    var $animatingElements = jQuery('div.single-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
                    doAnimations($animatingElements);
                });
                homeSlider.slick({
                    autoplay: true,
                    autoplaySpeed: 10000,
                    dots: true,
                    fade: true,
                    prevArrow: '<div class="slick-prev"><i class="fa fa-chevron-left"></i></div>',
                    nextArrow: '<div class="slick-next"><i class="fa fa-chevron-right"></i></div>'
                });

                function doAnimations(elements) {
                    var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                    elements.each(function() {
                        var $this = jQuery(this);
                        var $animationDelay = $this.data('delay');
                        var $animationType = 'animated ' + $this.data('animation');
                        $this.css({
                            'animation-delay': $animationDelay,
                            '-webkit-animation-delay': $animationDelay
                        });
                        $this.addClass($animationType).one(animationEndEvents, function() {
                            $this.removeClass($animationType);
                        });
                    });
                }

            }
        },
        initIsotope: function () {
            if ($('.portfolio-list').length > 0) {
                var galleryList = $('.gallery-list').isotope({
                    itemSelector: '.portfolio-item',
                    layoutMode: 'fitRows',
                    getSortData: {
                        name: '.name',
                        symbol: '.symbol',
                        number: '.number parseInt',
                        category: '[data-category]',
                        weight: function (itemElem) {
                            var weight = $(itemElem).find('.weight').text();
                            return parseFloat(weight.replace(/[\(\)]/g, ''));
                        }
                    }
                });
            }
            if ($('#posts').length > 0) {
                var $container = $('#posts').isotope({
                    itemSelector: '.portfolio-item',
                    isFitWidth: true
                });
                $(window).resize(function () {
                    $container.isotope({
                        columnWidth: '.col-sm-3'
                    });
                });
                $container.isotope({filter: '*'});
                $('.portfolio-filters').on('click', '.filter-item', function () {
                    var filterValue = $(this).attr('data-filter');
                    $container.isotope({filter: filterValue});
                    $('.portfolio-filters .filter-item').removeClass('active');
                    $(this).addClass('active');
                });
            }
        },
        initMasonry: function () {
            var galleryList = $('.grid-list').masonry({
                itemSelector: '.grid-item'
            });
            if (galleryList.length > 0) {
                var galleryListHome = galleryList.imagesLoaded(function () {
                    galleryListHome.masonry({
                        itemSelector: '.review',
                        horizontalOrder: true,
                        percentPosition: true,
                    });
                });
            }
        },
        initLightbox: function () {
            lightbox.option({
                resizeDuration: 200,
                wrapAround: true,
                fitImagesInViewport: true,
                maxWidth: '350px',
            });
        },




        setupHome: function (){
          this.initSlick();
        },

        setupPortfolio: function (){
            this.initIsotope();
            this.initMasonry();
            this.initLightbox();
        },

    };
    Listener.init();
});