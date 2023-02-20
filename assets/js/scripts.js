/******/ (() => { // webpackBootstrap
  /******/ 	var __webpack_modules__ = ({

    /***/ "./src/index.js":
    /*!**********************!*\
      !*** ./src/index.js ***!
      \**********************/
    /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
      /* harmony import */ var _styles_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/main.scss */ "./src/styles/main.scss");
      /* harmony import */ var _js_drop_down_menu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/drop-down-menu */ "./src/js/drop-down-menu.js");
      /* harmony import */ var _js_drop_down_menu__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_drop_down_menu__WEBPACK_IMPORTED_MODULE_1__);
      /* harmony import */ var _js_header__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/header */ "./src/js/header.js");
      /* harmony import */ var _js_managers_slider__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/managers-slider */ "./src/js/managers-slider.js");
      /* harmony import */ var _js_how_work_slider__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/how-work-slider */ "./src/js/how-work-slider.js");
      /* harmony import */ var _js_reviews_slider__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./js/reviews-slider */ "./src/js/reviews-slider.js");
      /* harmony import */ var _js_faq__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./js/faq */ "./src/js/faq.js");
      /* harmony import */ var _js_faq__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_js_faq__WEBPACK_IMPORTED_MODULE_6__);
      /* harmony import */ var _js_links__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./js/links */ "./src/js/links.js");
      /* harmony import */ var _js_contacts__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./js/contacts */ "./src/js/contacts.js");
      /* harmony import */ var _js_contacts__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_js_contacts__WEBPACK_IMPORTED_MODULE_8__);










      /***/ }),

    /***/ "./src/js/contacts.js":
    /*!****************************!*\
      !*** ./src/js/contacts.js ***!
      \****************************/
    /***/ (() => {

      addEventListener('DOMContentLoaded', () => {
        const items = document.querySelectorAll('.contacts__icon');
        const length = items.length;
        const delta = 2 * Math.PI * (1 / length);
        const radius = 100;
        const animationStep = 100 / (length * 2);
        const animationStepDeg = 360 / length;
        let animationCurPercent = 0;
        let cssAngle = 180;
        let styles = '<style>';
        for (let i = 0; i < length; i++) {
          const angle = i * delta;
          const x = radius * Math.cos(angle);
          const y = radius * Math.sin(angle);
          items[i].style.left = 100 + x + 'px';
          items[i].style.top = 100 + y + 'px';
          styles += `.contacts__icon:nth-child(${i + 1}){transform: translate(-50%, -50%) rotate(${cssAngle}deg)}`;
          cssAngle += 360 / length;
          if (cssAngle > 360) {
            cssAngle -= 360;
          }
        }
        styles += '@keyframes contacts-spin{';
        for (let i = 0; i <= length; i++) {
          if (i === 0) {
            styles += `${animationCurPercent}%{transform:rotate(180deg)}`;
            animationCurPercent += animationStep;
            styles += `${animationCurPercent}%{transform:rotate(180deg)}`;
            animationCurPercent += animationStep;
          } else {
            styles += `${animationCurPercent}%{transform:rotate(${180 + animationStepDeg * i}deg)}`;
            animationCurPercent += animationStep;
            styles += `${animationCurPercent}%{transform:rotate(${180 + animationStepDeg * i}deg)}`;
            animationCurPercent += animationStep;
          }
        }
        styles += '100%{transform:rotate(540deg)}';
        styles += '}';
        styles += '</style>';
        document.querySelector('.contacts').insertAdjacentHTML('afterend', styles);
        document.querySelector('.contacts').style.display = null;
      });

      /***/ }),

    /***/ "./src/js/drop-down-menu.js":
    /*!**********************************!*\
      !*** ./src/js/drop-down-menu.js ***!
      \**********************************/
    /***/ (() => {

      addEventListener('DOMContentLoaded', () => {
        const dropDownBtns = document.querySelectorAll('[data-drop-menu]');
        if (window.matchMedia("(hover: hover)").matches) {
          return;
        }
        dropDownBtns.forEach($el => {
          $el.addEventListener('click', dropDownHandler);
        });
      });
      const dropDownHandler = e => {
        if (e.target.closest('button').classList.contains('show')) {
          closeDropDown(e.target.closest('button'));
        } else {
          openDropDown(e.target.closest('button'));
        }
      };
      const openDropDown = el => {
        const subMenu = el.nextElementSibling;
        el.classList.add('show');
        el.setAttribute('aria-expanded', true);
        subMenu?.classList.add('show');
      };
      const closeDropDown = el => {
        const subMenu = el.nextElementSibling;
        el.classList.remove('show');
        el.setAttribute('aria-expanded', false);
        subMenu?.classList.remove('show');
      };

      /***/ }),

    /***/ "./src/js/faq.js":
    /*!***********************!*\
      !*** ./src/js/faq.js ***!
      \***********************/
    /***/ (() => {

      document.addEventListener('DOMContentLoaded', () => {
        const accordions = document.querySelectorAll('.faq__item');
        accordions.forEach(item => {
          item.addEventListener('click', e => {
            const self = e.currentTarget;
            const btn = self.querySelector('.faq__btn');
            const content = self.querySelector('.faq__content');
            e.preventDefault();
            self.classList.toggle('open');
            if (self.classList.contains('open')) {
              btn.setAttribute('aria-expanded', true);
              content.setAttribute('aria-hidden', false);
              content.style.maxHeight = content.scrollHeight + 'px';
            } else {
              btn.setAttribute('aria-expanded', false);
              content.setAttribute('aria-hidden', true);
              content.style.maxHeight = null;
            }
          });
        });
      });

      /***/ }),

    /***/ "./src/js/header.js":
    /*!**************************!*\
      !*** ./src/js/header.js ***!
      \**************************/
    /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
      /* harmony import */ var _throttle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./throttle */ "./src/js/throttle.js");

      addEventListener('DOMContentLoaded', () => {
        const headerMenu = document.querySelector('#main-menu');
        const headerBurger = document.querySelector('#header-burger');
        const header = document.querySelector('header');
        const headerOffset = header.getAttribute('data-offset') ?? 300;
        const fixHeader = () => {
          const scrollDistance = window.scrollY;
          if (scrollDistance >= headerOffset) {
            if (!header.classList.contains('fixed')) {
              header.nextElementSibling.style.marginTop = header.offsetHeight + 'px';
            }
            header.classList.add('fixed');
          } else {
            header.nextElementSibling.style.marginTop = null;
            header.classList.remove('fixed');
          }
        };
        if (headerMenu) {
          if (!window.matchMedia("(hover: hover)").matches) {
            const hasChildrenBtns = headerMenu.querySelectorAll('.menu-item-has-children a');
            hasChildrenBtns.forEach(btn => {
              btn.addEventListener('click', e => {
                const subMenu = btn.nextElementSibling;
                e.preventDefault();
                if (btn.classList.contains('show')) {
                  btn.classList.remove('show');
                  btn.setAttribute('aria-expanded', false);
                  subMenu?.classList.remove('show');
                } else {
                  btn.classList.add('show');
                  btn.setAttribute('aria-expanded', true);
                  subMenu?.classList.add('show');
                }
              });
            });
          }
        }
        if (headerBurger) {
          headerBurger.addEventListener('click', e => {
            e.preventDefault();
            headerBurger.classList.toggle('open');
            document.querySelector('header')?.classList.toggle('fixed');
            document.body.classList.toggle('dis-scroll');
          });
        }
        if (header) {
          window.addEventListener('scroll', (0,_throttle__WEBPACK_IMPORTED_MODULE_0__.throttle)(fixHeader, 150));
        }
      });

      /***/ }),

    /***/ "./src/js/how-work-slider.js":
    /*!***********************************!*\
      !*** ./src/js/how-work-slider.js ***!
      \***********************************/
    /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
      /* harmony import */ var tiny_slider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tiny-slider */ "./node_modules/tiny-slider/dist/tiny-slider.js");

      addEventListener('DOMContentLoaded', () => {
        const sliderContainer = document.querySelector('#how-work-slider');
        if (!sliderContainer) {
          return;
        }
        const slider = (0,tiny_slider__WEBPACK_IMPORTED_MODULE_0__.tns)({
          container: '#how-work-slider',
          items: 1,
          slideBy: 'page',
          nav: false,
          loop: false,
          swipeAngle: false,
          controls: false
        });
        const lineBtns = sliderContainer.querySelectorAll('[data-slide]');
        const prevBtns = sliderContainer.querySelectorAll('.how-work-slider__arrow--prev');
        const nextBtns = sliderContainer.querySelectorAll('.how-work-slider__arrow--next');
        lineBtns?.forEach(btn => {
          btn.addEventListener('click', e => {
            const slide = parseInt(btn.getAttribute('data-slide'));
            e.preventDefault();
            slider.goTo(slide);
          });
        });
        prevBtns?.forEach(btn => {
          btn.addEventListener('click', e => {
            e.preventDefault();
            slider.goTo('prev');
          });
        });
        nextBtns?.forEach(btn => {
          btn.addEventListener('click', e => {
            e.preventDefault();
            slider.goTo('next');
          });
        });
      });

      /***/ }),

    /***/ "./src/js/links.js":
    /*!*************************!*\
      !*** ./src/js/links.js ***!
      \*************************/
    /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
      /* harmony import */ var _modal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modal */ "./src/js/modal.js");

      addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('a');
        const isValidHttpUrl = urlString => {
          try {
            return Boolean(new URL(urlString));
          } catch (e) {
            return false;
          }
        };
        links.forEach(link => {
          link.addEventListener('click', e => {
            const href = link.getAttribute('href');
            console.log(href);
            console.log(isValidHttpUrl(href));
            if (!isValidHttpUrl(href)) {
              e.preventDefault();
              try {
                scroll({
                  top: document.querySelector(href).offsetTop - document.querySelector('header').offsetTop,
                  behavior: "smooth"
                });
              } catch (_) {
                new _modal__WEBPACK_IMPORTED_MODULE_0__["default"]().open('form-popup');
              }
            }
          });
        });
      });

      /***/ }),

    /***/ "./src/js/managers-slider.js":
    /*!***********************************!*\
      !*** ./src/js/managers-slider.js ***!
      \***********************************/
    /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
      /* harmony import */ var tiny_slider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tiny-slider */ "./node_modules/tiny-slider/dist/tiny-slider.js");

      addEventListener('DOMContentLoaded', () => {
        (0,tiny_slider__WEBPACK_IMPORTED_MODULE_0__.tns)({
          container: '#managers-slider',
          items: 1,
          slideBy: 'page',
          navPosition: 'bottom',
          mouseDrag: true,
          loop: false,
          swipeAngle: false,
          controls: false
        });
      });

      /***/ }),

    /***/ "./src/js/modal.js":
    /*!*************************!*\
      !*** ./src/js/modal.js ***!
      \*************************/
    /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */ __webpack_require__.d(__webpack_exports__, {
        /* harmony export */   "default": () => (/* binding */ Modal)
        /* harmony export */ });
      class Modal {
        constructor(options) {
          let defaultOptions = {
            isOpen: () => {},
            isClose: () => {}
          };
          this.options = Object.assign(defaultOptions, options);
          this.modal = document.querySelector('.modal');
          this.speed = 300;
          this.animation = 'fade';
          this._reOpen = false;
          this._nextContainer = false;
          this.modalContainer = false;
          this.isOpen = false;
          this.previousActiveElement = false;
          this._focusElements = ['a[href]', 'input', 'select', 'textarea', 'button', 'iframe', '[contenteditable]', '[tabindex]:not([tabindex^="-"])'];
          this._fixBlocks = document.querySelectorAll('.fix-block');
          this.events();
        }
        events() {
          if (this.modal) {
            document.addEventListener('click', function (e) {
              const clickedElement = e.target.closest(`[data-modal-path]`);
              if (clickedElement) {
                let target = clickedElement.dataset.modalPath;
                let animation = clickedElement.dataset.modalAnimation;
                let speed = clickedElement.dataset.modalSpeed;
                this.animation = animation ? animation : 'fade';
                this.speed = speed ? parseInt(speed) : 300;
                this._nextContainer = document.querySelector(`[data-modal-target="${target}"]`);
                this.open();
                return;
              }
              if (e.target.closest('.js-modal-close')) {
                this.close();
                return;
              }
            }.bind(this));
            window.addEventListener('keydown', function (e) {
              if (e.keyCode == 27 && this.isOpen) {
                this.close();
              }
              if (e.which == 9 && this.isOpen) {
                this.focusCatch(e);
                return;
              }
            }.bind(this));
            document.addEventListener('click', function (e) {
              if (e.target.classList.contains('modal') && e.target.classList.contains("is-open")) {
                this.close();
              }
            }.bind(this));
          }
        }
        open(selector) {
          this.previousActiveElement = document.activeElement;
          if (this.isOpen) {
            this.reOpen = true;
            this.close();
            return;
          }
          this.modalContainer = this._nextContainer;
          if (selector) {
            this.modalContainer = document.querySelector(`[data-modal-target="${selector}"]`);
          }
          this.modalContainer.scrollTo(0, 0);
          this.modal.style.setProperty('--transition-time', `${this.speed / 1000}s`);
          this.modal.classList.add('is-open');
          document.body.style.scrollBehavior = 'auto';
          document.documentElement.style.scrollBehavior = 'auto';
          this.disableScroll();
          this.modalContainer.classList.add('modal-open');
          this.modalContainer.classList.add(this.animation);
          setTimeout(() => {
            this.options.isOpen(this);
            this.modalContainer.classList.add('animate-open');
            this.isOpen = true;
            this.focusTrap();
          }, this.speed);
        }
        close() {
          if (this.modalContainer) {
            this.modalContainer.classList.remove('animate-open');
            this.modalContainer.classList.remove(this.animation);
            this.modal.classList.remove('is-open');
            this.modalContainer.classList.remove('modal-open');
            this.enableScroll();
            document.body.style.scrollBehavior = 'auto';
            document.documentElement.style.scrollBehavior = 'auto';
            this.options.isClose(this);
            this.isOpen = false;
            this.focusTrap();
            if (this.reOpen) {
              this.reOpen = false;
              this.open();
            }
          }
        }
        focusCatch(e) {
          const nodes = this.modalContainer.querySelectorAll(this._focusElements);
          const nodesArray = Array.prototype.slice.call(nodes);
          const focusedItemIndex = nodesArray.indexOf(document.activeElement);
          if (e.shiftKey && focusedItemIndex === 0) {
            nodesArray[nodesArray.length - 1].focus();
            e.preventDefault();
          }
          if (!e.shiftKey && focusedItemIndex === nodesArray.length - 1) {
            nodesArray[0].focus();
            e.preventDefault();
          }
        }
        focusTrap() {
          const nodes = this.modalContainer.querySelectorAll(this._focusElements);
          if (this.isOpen) {
            if (nodes.length) nodes[0].focus();
          } else {
            this.previousActiveElement.focus();
          }
        }
        disableScroll() {
          let pagePosition = window.scrollY;
          this.lockPadding();
          document.body.classList.add('dis-scroll');
          document.body.dataset.position = pagePosition;
          document.body.style.top = -pagePosition + 'px';
        }
        enableScroll() {
          let pagePosition = parseInt(document.body.dataset.position, 10);
          this.unlockPadding();
          document.body.style.top = 'auto';
          document.body.classList.remove('dis-scroll');
          window.scrollTo({
            top: pagePosition,
            left: 0
          });
          document.body.removeAttribute('data-position');
        }
        lockPadding() {
          let paddingOffset = window.innerWidth - document.body.offsetWidth + 'px';
          this._fixBlocks.forEach(el => {
            el.style.paddingRight = paddingOffset;
          });
          document.body.style.paddingRight = paddingOffset;
        }
        unlockPadding() {
          this._fixBlocks.forEach(el => {
            el.style.paddingRight = '0px';
          });
          document.body.style.paddingRight = '0px';
        }
      }

      /***/ }),

    /***/ "./src/js/reviews-slider.js":
    /*!**********************************!*\
      !*** ./src/js/reviews-slider.js ***!
      \**********************************/
    /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
      /* harmony import */ var tiny_slider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tiny-slider */ "./node_modules/tiny-slider/dist/tiny-slider.js");

      addEventListener('DOMContentLoaded', () => {
        const sliderContainer = document.querySelector('#reviews__slider');
        if (!sliderContainer) {
          return;
        }
        (0,tiny_slider__WEBPACK_IMPORTED_MODULE_0__.tns)({
          container: '#reviews__slider',
          items: 1,
          slideBy: 'page',
          gutter: 15,
          mouseDrag: true,
          navPosition: 'bottom',
          prevButton: '.reviews__arrow--prev',
          nextButton: '.reviews__arrow--next',
          loop: false,
          swipeAngle: false,
          responsive: {
            1200: {
              items: 3
            },
            768: {
              items: 2
            },
            576: {
              gutter: 25
            }
          }
        });
        (0,tiny_slider__WEBPACK_IMPORTED_MODULE_0__.tns)({
          container: '#blog-slider',
          items: 1,
          slideBy: 'page',
          gutter: 15,
          mouseDrag: true,
          navPosition: 'bottom',
          prevButton: '.blog__arrow--prev',
          nextButton: '.blog__arrow--next',
          loop: false,
          swipeAngle: false,
          responsive: {
            1200: {
              items: 3
            },
            768: {
              items: 2
            },
            576: {
              gutter: 25
            }
          }
        });
      });

      /***/ }),

    /***/ "./src/js/throttle.js":
    /*!****************************!*\
      !*** ./src/js/throttle.js ***!
      \****************************/
    /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
      /* harmony export */ __webpack_require__.d(__webpack_exports__, {
        /* harmony export */   "throttle": () => (/* binding */ throttle)
        /* harmony export */ });
      const throttle = (func, delay = 250) => {
        let isThrottled = false;
        let savedArgs = null;
        let savedThis = null;
        return function wrap(...args) {
          if (isThrottled) {
            savedArgs = args, savedThis = this;
            return;
          }
          func.apply(this, args);
          isThrottled = true;
          setTimeout(() => {
            isThrottled = false;
            if (savedThis) {
              wrap.apply(savedThis, savedArgs);
              savedThis = null;
              savedArgs = null;
            }
          }, delay);
        };
      };

      /***/ }),

    /***/ "./src/styles/main.scss":
    /*!******************************!*\
      !*** ./src/styles/main.scss ***!
      \******************************/
    /***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


      /***/ })

    /******/ 	});
  /************************************************************************/
  /******/ 	// The module cache
  /******/ 	var __webpack_module_cache__ = {};
  /******/
  /******/ 	// The require function
  /******/ 	function __webpack_require__(moduleId) {
    /******/ 		// Check if module is in cache
    /******/ 		var cachedModule = __webpack_module_cache__[moduleId];
    /******/ 		if (cachedModule !== undefined) {
      /******/ 			return cachedModule.exports;
      /******/ 		}
    /******/ 		// Create a new module (and put it into the cache)
    /******/ 		var module = __webpack_module_cache__[moduleId] = {
      /******/ 			// no module.id needed
      /******/ 			// no module.loaded needed
      /******/ 			exports: {}
      /******/ 		};
    /******/
    /******/ 		// Execute the module function
    /******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
    /******/
    /******/ 		// Return the exports of the module
    /******/ 		return module.exports;
    /******/ 	}
  /******/
  /******/ 	// expose the modules object (__webpack_modules__)
  /******/ 	__webpack_require__.m = __webpack_modules__;
  /******/
  /************************************************************************/
  /******/ 	/* webpack/runtime/chunk loaded */
  /******/ 	(() => {
    /******/ 		var deferred = [];
    /******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
      /******/ 			if(chunkIds) {
        /******/ 				priority = priority || 0;
        /******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
        /******/ 				deferred[i] = [chunkIds, fn, priority];
        /******/ 				return;
        /******/ 			}
      /******/ 			var notFulfilled = Infinity;
      /******/ 			for (var i = 0; i < deferred.length; i++) {
        /******/ 				var [chunkIds, fn, priority] = deferred[i];
        /******/ 				var fulfilled = true;
        /******/ 				for (var j = 0; j < chunkIds.length; j++) {
          /******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
            /******/ 						chunkIds.splice(j--, 1);
            /******/ 					} else {
            /******/ 						fulfilled = false;
            /******/ 						if(priority < notFulfilled) notFulfilled = priority;
            /******/ 					}
          /******/ 				}
        /******/ 				if(fulfilled) {
          /******/ 					deferred.splice(i--, 1)
          /******/ 					var r = fn();
          /******/ 					if (r !== undefined) result = r;
          /******/ 				}
        /******/ 			}
      /******/ 			return result;
      /******/ 		};
    /******/ 	})();
  /******/
  /******/ 	/* webpack/runtime/compat get default export */
  /******/ 	(() => {
    /******/ 		// getDefaultExport function for compatibility with non-harmony modules
    /******/ 		__webpack_require__.n = (module) => {
      /******/ 			var getter = module && module.__esModule ?
          /******/ 				() => (module['default']) :
          /******/ 				() => (module);
      /******/ 			__webpack_require__.d(getter, { a: getter });
      /******/ 			return getter;
      /******/ 		};
    /******/ 	})();
  /******/
  /******/ 	/* webpack/runtime/define property getters */
  /******/ 	(() => {
    /******/ 		// define getter functions for harmony exports
    /******/ 		__webpack_require__.d = (exports, definition) => {
      /******/ 			for(var key in definition) {
        /******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
          /******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
          /******/ 				}
        /******/ 			}
      /******/ 		};
    /******/ 	})();
  /******/
  /******/ 	/* webpack/runtime/hasOwnProperty shorthand */
  /******/ 	(() => {
    /******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
    /******/ 	})();
  /******/
  /******/ 	/* webpack/runtime/make namespace object */
  /******/ 	(() => {
    /******/ 		// define __esModule on exports
    /******/ 		__webpack_require__.r = (exports) => {
      /******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
        /******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
        /******/ 			}
      /******/ 			Object.defineProperty(exports, '__esModule', { value: true });
      /******/ 		};
    /******/ 	})();
  /******/
  /******/ 	/* webpack/runtime/jsonp chunk loading */
  /******/ 	(() => {
    /******/ 		// no baseURI
    /******/
    /******/ 		// object to store loaded and loading chunks
    /******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
    /******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
    /******/ 		var installedChunks = {
      /******/ 			"scripts": 0
      /******/ 		};
    /******/
    /******/ 		// no chunk on demand loading
    /******/
    /******/ 		// no prefetching
    /******/
    /******/ 		// no preloaded
    /******/
    /******/ 		// no HMR
    /******/
    /******/ 		// no HMR manifest
    /******/
    /******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
    /******/
    /******/ 		// install a JSONP callback for chunk loading
    /******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
      /******/ 			var [chunkIds, moreModules, runtime] = data;
      /******/ 			// add "moreModules" to the modules object,
      /******/ 			// then flag all "chunkIds" as loaded and fire callback
      /******/ 			var moduleId, chunkId, i = 0;
      /******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
        /******/ 				for(moduleId in moreModules) {
          /******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
            /******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
            /******/ 					}
          /******/ 				}
        /******/ 				if(runtime) var result = runtime(__webpack_require__);
        /******/ 			}
      /******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
      /******/ 			for(;i < chunkIds.length; i++) {
        /******/ 				chunkId = chunkIds[i];
        /******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
          /******/ 					installedChunks[chunkId][0]();
          /******/ 				}
        /******/ 				installedChunks[chunkId] = 0;
        /******/ 			}
      /******/ 			return __webpack_require__.O(result);
      /******/ 		}
    /******/
    /******/ 		var chunkLoadingGlobal = self["webpackChunkwebpack"] = self["webpackChunkwebpack"] || [];
    /******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
    /******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
    /******/ 	})();
  /******/
  /************************************************************************/
  /******/
  /******/ 	// startup
  /******/ 	// Load entry module and return exports
  /******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
  /******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["vendors-node_modules_tiny-slider_dist_tiny-slider_js"], () => (__webpack_require__("./src/index.js")))
  /******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
  /******/
  /******/ })()
;