
var o2AppState = {
    menuOpen: false,
    callbackOpen: false,
    scrollHidden: false
};

var langMenu=(function(){
    var navLangItems=document.querySelectorAll(".nav__item-lang");

    Array.prototype.forEach.call(navLangItems, function(item) {
        item.addEventListener("click",function(e){
            //e.preventDefault(),
            this.classList.contains("nav__item-lang_opened") 
            ? this.classList.remove("nav__item-lang_opened")
            : this.classList.add("nav__item-lang_opened")
        });
    });

    var root = $('.lang-list');
    var liI = $("li.active ");
    $("li.active ",$(root)).remove();
    $(root).prepend( $(liI) );
    
    })();

//fix nav during scroll down
var navFixed = (function(){ 
    var header = document.querySelector('.header-container');
    var fixed = header.offsetTop;
    function isScrolled() {
        if(window.pageYOffset > fixed) {
            header.classList.add('header__fixed');
        } else {
            header.classList.remove('header__fixed');
        }
    };
    window.addEventListener('scroll' ,debounce(isScrolled,100));
})();

//tabs start
(function() {

    var activeTabClass = 'contacts__tab_active';
    var hiddenTabContentClas = 'contacts__tab-content__hidden';

    var NODES = {
        cTabs:document.querySelector('.contacts__tabs'),  
        cTab: document.querySelectorAll('.contacts__tab'),
        cTabContent: document.querySelectorAll('.contacts__tab-content')
    };

    function removeActiveClassFromTabs() {
        Array.prototype.forEach.call(NODES.cTab, function(node) {
            node.classList.remove(activeTabClass);
        });
    };

    function hideTabsContent() {
        Array.prototype.forEach.call(NODES.cTabContent, function(node) {
            node.classList.add(hiddenTabContentClas);
        });
    };

    if(NODES.cTabs) {
        NODES.cTabs.addEventListener('click', function(e) {
            if(Array.prototype.indexOf.call(e.target.classList)!==1) {
                removeActiveClassFromTabs();
                hideTabsContent();
                e.target.classList.add(activeTabClass);
                document.getElementById(e.target.dataset.tab).classList.remove(hiddenTabContentClas);
            };
        });
    }
    
})();
//tabs end


//main drop down menu
var dropDownMenu = (function() {

    var showMenuBtn = document.querySelector('.nav__item_menu');
    var hideMenuBtn = document.querySelector('.menu__close-btn');
    var menu = document.querySelector('.menu');
    var allPageConent = document.querySelector('.slideable-page-content');

    function showMenu() {                
        if(menu.classList.contains('menu_closed')) {
            menu.classList.remove('menu_closed');
            allPageConent.classList.add('slide-page-content');
        };
    };

    // this one hides menu by addng class and shows scrollbar
    function hideMenu(){
        menu.classList.add('menu_closed');
        allPageConent.classList.remove('slide-page-content');
        //document.removeEventListener('click', outsideClickListener);
        showScrollBar();
    };

    // this listener checks if click was outside menu or on close menu btn
    // function outsideClickListener(event) {
    //     if(!menu.contains(event.target)  
    //     && !event.target.classList.contains('nav__item_menu')
    //     && !event.target.parentNode.classList.contains('nav__item_menu')
    //     && !event.target.parentNode.parentNode.classList.contains('nav__item_menu')) {
    //         hideMenu();
    //     }
    // }

    // show menu on click and add event listener to hide outside menu
    showMenuBtn.addEventListener('click', function(e) {
        e.preventDefault();
        showMenu();
        //document.addEventListener('click', outsideClickListener);
        hideScrollBar();
        o2AppState.menuOpen = true;
        o2AppState.scrollHidden = true;
    });

    hideMenuBtn.addEventListener('click', function() {
        hideMenu();
        o2AppState.menuOpen = false;
        o2AppState.scrollHidden = false;
    });
})();

//preloader logic start
// var preloader = (function() {

//     var NODES = {
//       preloader: document.querySelector('.preloader'),
//       loadOuterCircle: document.querySelector('.preloader__loading-circlce'),
//       loadInnerCircle: document.querySelector('.preloader__inner-circle'),
//       percents: document.querySelector('.preloader__loading-percents'),
//       contentMask: document.querySelector('.preloader__logo-content-mask'),
//       logo: document.querySelector('.preloader__logo')
//     };
  
//     var offset = NODES.loadOuterCircle.getTotalLength();
//     var startingRadius = parseInt(NODES.loadInnerCircle.getAttribute('r'));
//     NODES.loadOuterCircle.style.strokeDasharray = offset;
//     NODES.loadOuterCircle.style.strokeDashoffset = offset;
    
//     var finalRadius = window.innerWidth > window.innerHeight ? window.innerWidth : window.innerHeight;

//     var currentDashOffset = parseInt(NODES.loadOuterCircle.style.strokeDashoffset);

//     //how fast loading circle moves
//     var outerStep = 6;
//     //how fast inner circle grows
//     var innerStep = 20;
//     var maskOpacity = parseFloat(NODES.contentMask.style.opacity);
//     //how fast opacity on green mask reduced
//     var maskRevealStep = 0.01;
//     var logoOpacity = 1;
//     //how fast opacity on logo reduced
//     var hideLogoStep = 0.012;
  
//     function _hidePreloader() {
//       NODES.preloader.style.display = 'none';
//     };

//     function _showPreloader() {
//         NODES.preloader.style.display = 'block';
//     }

//     function _hideGreenContentMaks() {
//         NODES.contentMask.display = 'none;'
//     }
  
//     // Hide outer circle and percents
//     function _hideOuterCircle() {
//       NODES.loadOuterCircle.style.display = 'none';
//       NODES.percents.style.display = 'none';
//     };
  
//     function _calculatePerncets() {
//       var perc = 100 - ((currentDashOffset / offset) * 100).toFixed();
//       NODES.percents.innerHTML = perc + '%';
//     };
  
//     function _animatePreloaderOuterCircle(e) {
//         console.log(e)
//       currentDashOffset-=outerStep
//       if( currentDashOffset >= 0) {
//         NODES.loadOuterCircle.style.strokeDashoffset=currentDashOffset;
//         requestAnimationFrame(_animatePreloaderOuterCircle);
//         _calculatePerncets();
//       } else {
//         // hide outer circle and percents and start frowing inner
//         _hideOuterCircle();
//         _animatePreloaderInnerCircle();
//       }
//     };
  
//     function _animatePreloaderInnerCircle() {
//       if(startingRadius <= finalRadius + 300) {
//         startingRadius+=innerStep;
//         maskOpacity-=maskRevealStep;
//         logoOpacity-=hideLogoStep;
//         requestAnimationFrame(_animatePreloaderInnerCircle);
//         //increase circle radius
//         NODES.loadInnerCircle.setAttribute('r',startingRadius);
//         //remove opacity from mask
//         NODES.contentMask.style.opacity = maskOpacity;
//         //remove opacity from logo
//         NODES.logo.style.opacity = logoOpacity;
//       } else {
//         // remove preloader here
//         _hidePreloader();
//         showScrollBar();
//       }
//     };
  
//     function init() {
//         hideScrollBar();
//         _showPreloader();
//         sessionStorage.setItem('preloaderActivated', true);
//         _animatePreloaderOuterCircle();
//     };
  
//     return {
//       init: init,
//       hidePreloader: _hidePreloader
//     };
  
//   })();

// // if(!sessionStorage.getItem('preloaderActivated')) {
// //     preloader.init();
// // }
// //preloader.init();
//preloader logick end

 
// var preloader2 = (function() {
//     var canvas = document.querySelector('.myCanvas');
//     var greenOverlay = document.querySelector('.canvas__green-overlay');
//     var ctx = canvas.getContext('2d');
  
//     canvas.width = window.innerWidth;
//     canvas.height = window.innerHeight;
  
//     var ch = canvas.height,
//     cw = canvas.width,
//     finalRadius = window.innerWidth > window.innerHeight ? window.innerWidth : window.innerHeight,
//     innerCircleRadius = 100,
//     outerCircleRadius = 120,
//     progressStart = 0,
//     progressStop = 2.1,
//     progressCircleStep = 0.02, //Progress circle step
//     percent,
//     textXCoord = cw/2,
//     innerCircleGrowvelocity = 10, // Inner circle grow velocity
//     textYCoord = ch/2 + 140,
//     greenOverlayOpacity = 0.8,
//     greenOverlayOpacityStep = 0.01;
//     loadColor = '#568752';
  
//     function _drawInnerCircle() {
//       ctx.beginPath();
//       ctx.arc(cw/2, ch/2, innerCircleRadius, 0*Math.PI, 2*Math.PI);
//       ctx.globalCompositeOperation="destination-out";
//       ctx.fill();
//     };
  
//     function _drawProgressCircle(e) {
//       //draw text
//       //draw white rect over old text start
//       ctx.fillStyle='#ffffff';
//       ctx.fillRect(textXCoord-20, textYCoord - 15, 45, 20);
//       //draw white rect over old text end
  
//       //draw new text start
//       percent = ((progressStart/progressStop) * 100).toFixed();
//       ctx.fillStyle = loadColor;
//       ctx.font = "20px OpenSans";
//       ctx.textAlign = 'center';
//       ctx.fillText(percent+'%', textXCoord, textYCoord);
//       //draw text end
  
//       // draw outer circle start
//       ctx.lineWidth = 2;
//       ctx.strokeStyle = '#ffffff'; 
//       ctx.beginPath();
//       ctx.arc(cw/2, ch/2, outerCircleRadius, 0*Math.PI, 2*Math.PI);
//       ctx.stroke();
//       ctx.strokeStyle = loadColor; 
//       ctx.beginPath();
//       ctx.arc(cw/2, ch/2, outerCircleRadius, 0*Math.PI, progressStart*Math.PI);
//       ctx.globalCompositeOperation="source-over";
//       ctx.stroke();
//       progressStart+=progressCircleStep;
//       // If fulle outer circle begin inner circle grow
//       if(progressStart <= progressStop) {
//         requestAnimationFrame(_drawProgressCircle);
//       } else {
//         _animateInnerCircleGrow();
//       }
//       // draw outer circle end
//     };
  
//     function _animateInnerCircleGrow() {
//       _drawInnerCircle();
//       greenOverlayOpacity-=greenOverlayOpacityStep;
//       greenOverlay.style.opacity = greenOverlayOpacity;
//       innerCircleRadius+=innerCircleGrowvelocity;
//       if(innerCircleRadius < finalRadius) {
//         requestAnimationFrame(_animateInnerCircleGrow);
//       } else {
//         canvas.style.display = 'none';
//         greenOverlay.style.display = 'none';
//       }
//     };
  
//     function init() {
//         greenOverlay.style.display = 'block';
//         canvas.style.display = 'block';
//         sessionStorage.setItem('preloaderActivated', true);
//         ctx.fillStyle = "#ffffff";
//         ctx.fillRect(0, 0, cw, ch);
//         _drawInnerCircle();
//         _drawProgressCircle();
//     };
  
//     return {
//       init: init
//     };
  
//   })();
// if(!sessionStorage.getItem('preloaderActivated')) {
//     preloader2.init();
// }
//preloader2.init();

// animation on scroll
var animateHTMLCtrl = (function() {
    var aniamteClass = 'animate-me',
    elems = document.querySelectorAll('.animate-me'),
    windowHeight = window.innerHeight,
    animatedElements;


    // Here debounce returns your passed functions and assigns them to new vars so that you can do removeEventListener
    var _debouncedScroll = debounce(_checkPosition, 100);
    var _debouncedInit = debounce(init, 100);

    // if to more elements to animate remove event listener from scroll
    function _checkForAnimatedElements() {
        elems = document.querySelectorAll('.animate-me');
        if(elems.length === 0 ) {
            window.removeEventListener('scroll', _debouncedScroll);
            window.removeEventListener('resize', _debouncedInit);
        }
    };

    function _addEventHandlers() {
      window.addEventListener('scroll', _debouncedScroll);
      window.addEventListener('resize', _debouncedInit);
    };
  
    function _checkPosition() {        
      for (var i = 0; i < elems.length; i++) {
        var posFromTop = elems[i].getBoundingClientRect().top;
        if (posFromTop - windowHeight <= -200) {
          elems[i].classList.remove(aniamteClass);
        }
      }
      _checkForAnimatedElements();
    };
    
    function init() {
        _addEventHandlers();
        _checkPosition();
    };

    setTimeout(_checkPosition, 500)

    return {
      init: init
    };
  
  })();

animateHTMLCtrl.init();
// animation on scroll end


// show callback form start
var showCallbackForm = (function() {
    var callbackBtn = document.querySelectorAll('.js-callback-form');
    var callbackForm = document.querySelector('.callback-form');
    var callbackClose = document.querySelector('.callback-form__close-btn');

    function showCallbackForm() {
        callbackForm.classList.add('callback-form__visible');
    };

    function hideCallbackForm() {
        callbackForm.classList.remove('callback-form__visible');
    };

    Array.prototype.forEach.call(callbackBtn, function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            hideScrollBar();
            showCallbackForm();
            o2AppState.callbackOpen = true;
        });
    });

    callbackClose.addEventListener('click', function() {
        if(!o2AppState.menuOpen && !o2AppState.scrollHidden) {
            showScrollBar();
            o2AppState.scrollHidden = false;
        }
        hideCallbackForm();
        o2AppState.callbackOpen = false;
    });
    
})();
// show callback form end

// Basic input constructor start
function Input(form, selector) {
    this.state = {
        valid: false,
        touched: false
    };
    this.type = 'basic';
    this.container = form.querySelector(selector);
    this.input = this.container.querySelector('input');
    this.requiredMessage = this.container.querySelector('.validation-error_required');
    this.validateInput = JSON.parse(this.input.dataset.required.toLowerCase()) || false;
    this.input.addEventListener('blur', (function() {
        this.state.touched = true;
        if(this.validateInput) {
            this.validateRequired();
        }

    }).bind(this));

    this.input.addEventListener('keyup', (function() {

        if(this.validateInput) {
            this.validateRequired();
        }

    }).bind(this));

};

Input.prototype.validateRequired = function() {
    if(this.input.value === '') {
        this.state.valid = false;
        this.showRequiredMessage();
    } else {
        this.hideRequiredMessage();
        if(this.type === 'basic') {
            this.state.valid = true;
        }
        return true;
    }
};

Input.prototype.showRequiredMessage = function() {
    this.addErrorClass();
    this.requiredMessage.style.display = 'block';
};
Input.prototype.hideRequiredMessage = function() {
    this.removeErrorClass();
    this.requiredMessage.style.display = 'none';
};
Input.prototype.addErrorClass = function() {
    this.input.classList.add('input__validation-error');
};
Input.prototype.removeErrorClass = function() {
    this.input.classList.remove('input__validation-error');
};

Input.prototype.validate = function() {
    if(this.validateInput) {
        this.validateRequired();
    } else {
        this.state.valid = true;
    }
};
// Basic input constructor end

// PhoneInput constructor start
function PhoneInput(form, selector) {
    Input.call(this,form, selector);
    this.type = 'phone';
    this.invalidPhoneMessage = this.container.querySelector('.validation-error_phone-format');
    this.mask = new IMask(this.input, {
        mask: '+38(000)000-00-00'
    });

    this.mask.on('accept', (function() {
        this.state.valid = false;
        //this.showInvalidPhoneMessage();
    }).bind(this));

    this.mask.on('complete', (function() {
        if(this.validateRequired()) {
            this.state.valid = true;
            this.hideInvalidPhoneMessage();
        }
    }).bind(this));
};

PhoneInput.prototype = Object.create(Input.prototype);
PhoneInput.prototype.constructor = PhoneInput;
PhoneInput.prototype.showInvalidPhoneMessage = function() {
    this.addErrorClass();
    this.invalidPhoneMessage.style.display = 'block';
};
PhoneInput.prototype.hideInvalidPhoneMessage = function() {
    this.removeErrorClass();
    this.invalidPhoneMessage.style.display = 'none';
};
PhoneInput.prototype.validatePhoneNumber = function() {
    if(this.mask.mask.length !== this.mask.value.length) {
        this.state.valid = false;
        this.showInvalidPhoneMessage();
    } else {
        this.state.valid = true;
        this.hideInvalidPhoneMessage();
    }
};
PhoneInput.prototype.validate = function() {
    if(this.validateInput) {
        if(this.validateRequired()) {
            this.validatePhoneNumber();
        }
    } else {
        this.state.valid = true;
    }
};
// PhoneInput constructor end

// EmailInput constructor start
function EmailInput(form, selector) {
    Input.call(this, form, selector);
    this.type = 'email';
    this.invalidEmailMessage = this.container.querySelector('.validation-error_email-format');
};
EmailInput.prototype = Object.create(Input.prototype);
EmailInput.prototype.constructor = EmailInput;
EmailInput.prototype.showInvalidEmailMessage = function() {
    this.invalidEmailMessage.style.display = 'block';
};
EmailInput.prototype.hideInvalidEmailMessage = function() {
    this.invalidEmailMessage.style.display = 'none';
};
EmailInput.prototype.validateEmail = function() {
    if(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/.test(this.input.value)) {
        this.state.valid = true;
        this.removeErrorClass();
        this.hideInvalidEmailMessage();
    } else {
        this.state.valid = false;
        this.addErrorClass();
        this.showInvalidEmailMessage();
    }
};
EmailInput.prototype.validate = function() {
    if(this.validateInput) {
        if(this.validateRequired()) {
            this.validateEmail();
        }
    } else {
        this.state.valid = true;
    }
};
// EmailInput constructor end
// MessageInput constructor start
function MessageInput(form, selector) {
    this.validateInput = false;
    this.state = {
        valid: true
    };
    this.type = 'message';
    this.container = form.querySelector(selector);
    this.input = this.container.querySelector('textarea');
}
MessageInput.prototype = Object.create(Input.prototype);
MessageInput.prototype.constructor = MessageInput;
// MessageInput constructor start

// Modal windows constructor start
function Modal(selector, timed) {
    this.container = document.querySelector(selector);
    this.closeBtn = this.container.querySelector('.modal__close-btn');
    this.timed = timed || false;
    var timer;

    // Bind closing function to object
    var boundClickDocument = clickOnDocument.bind(this);

    function clickOnDocument(e) {

        if(!this.container.contains(e.target) || e.target.parentNode===this.closeBtn) {
            this.hideModal();
            if(this.timed) {
                clearInterval(timer);
            }
            document.removeEventListener('click', boundClickDocument);
        }

    };

    this.showModal = function() {
        hideScrollBar();
        this.container.classList.add('modal__visible');
        if(this.timed) {
            timer = setTimeout((function() {
                this.hideModal();
            }).bind(this), 3000);
        }

        document.addEventListener('click', boundClickDocument);

    };

    this.hideModal = function() {
        if(!o2AppState.callbackOpen) {
            showScrollBar();
        }
        this.container.classList.remove('modal__visible');
    };
};
// Modal windows constructor end
// True as second argument means it will auto close after 3 seconds
var successModal = new Modal('.modal-success', false);


// Contacts form start
var contactsForm = (function() {

    function handleSubmit(formId) {

        var form = document.getElementById(formId);

        if(form) {
            // If forms has one of these it will instanciate instances of inputs
            var nameInput = form.querySelector('.js-input-name-container') ? new Input(form,'.js-input-name-container') : null;
            var phoneInput = form.querySelector('.js-input-phone-container') ? new PhoneInput(form, '.js-input-phone-container') : null;
            var emailInput = form.querySelector('.js-input-email-container') ? new EmailInput(form, '.js-input-email-container') : null;
            var messageInput = form.querySelector('.js-input-message-container') ? new MessageInput(form, '.js-input-message-container'): null;

            function createValidatorArray() {
                var arr = [];
                if(nameInput) {
                    arr.push(nameInput);
                }
                if(phoneInput) {
                    arr.push(phoneInput);
                }
                if(emailInput) {
                    arr.push(emailInput);
                }
                if(messageInput) {
                    if(messageInput.input.value.length > 0) {
                        arr.push(messageInput);
                    }
                }
                return arr;
            };

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                var inputsArr = createValidatorArray();
                var data='';
                var secretInputs = {
                    type: form.querySelector('[name="typ"]'),
                    webad: form.querySelector('[name="webad"]'),
                    metka: form.querySelector('[name="metka"]'),
                    inn: form.querySelector('[name="inn"]'),
                    count: form.querySelector('[name="count"]')
                };
                inputsArr.forEach(function(inputInstance, index) {
                    if(index === 0) {
                        data += '' + inputInstance.input.name + '=' + encodeURIComponent(inputInstance.input.value);
                    } else {
                        data += '&' + inputInstance.input.name + '=' + encodeURIComponent(inputInstance.input.value);
                    }
                    inputInstance.validate();
                });

                for(var key in secretInputs) {
                    data+= '&' + key + '=' + encodeURIComponent(secretInputs[key].value);
                };

                var validForm = inputsArr.every(function(inputInstance) {
                    return inputInstance.state.valid;
                });

                if(validForm) {
                    var nOV = "/wp-content/themes/o2/forms/application.php";
                    var urObV = "http://"+window.location.hostname+nOV;

                    PostFormData(urObV, data, function(res) {
                        console.log(res);
                        //Call modal window which was instanciated before
                        successModal.showModal();
                        //Clear all filled inputs
                        inputsArr.forEach(function(inputInstance) {
                            inputInstance.input.value = '';
                        });
                    });
                }

            });

        };

    };
    handleSubmit('callback-form');
    handleSubmit('contacts-form__callback-form');
    handleSubmit('contacts-form__email-form');
    handleSubmit('location-page__contacts-page');

})();

// Contacts form end