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
/* harmony import */ var _js_header__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_header__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _js_managers_slider__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/managers-slider */ "./src/js/managers-slider.js");
/* harmony import */ var _js_how_work_slider__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/how-work-slider */ "./src/js/how-work-slider.js");
/* harmony import */ var _js_reviews_slider__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./js/reviews-slider */ "./src/js/reviews-slider.js");







/***/ }),

/***/ "./src/js/drop-down-menu.js":
/*!**********************************!*\
  !*** ./src/js/drop-down-menu.js ***!
  \**********************************/
/***/ (() => {

addEventListener('DOMContentLoaded', () => {
  const dropDownBtns = document.querySelectorAll('[data-drop-menu]');
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
  subMenu.classList.add('show');
};
const closeDropDown = el => {
  const subMenu = el.nextElementSibling;
  el.classList.remove('show');
  el.setAttribute('aria-expanded', false);
  subMenu?.classList.remove('show');
};

/***/ }),

/***/ "./src/js/header.js":
/*!**************************!*\
  !*** ./src/js/header.js ***!
  \**************************/
/***/ (() => {

addEventListener('DOMContentLoaded', () => {
  const headerMenu = document.querySelector('#main-menu');
  const headerBurger = document.querySelector('#header-burger');
  if (headerMenu) {
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
  if (headerBurger) {
    headerBurger.addEventListener('click', e => {
      e.preventDefault();
      headerBurger.classList.toggle('open');
      document.querySelector('header')?.classList.toggle('fixed');
      document.querySelector('main')?.classList.toggle('dis-scroll');
    });
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
});

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
//# sourceMappingURL=scripts.051be7b3783f33d29b21.js.map