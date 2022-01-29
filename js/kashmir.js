// kashmir.js
// jh@jameshome.com

// polyfills
if (!Element.prototype.matches) {
  Element.prototype.matches =
    Element.prototype.msMatchesSelector ||
    Element.prototype.webkitMatchesSelector;
}
if (!Element.prototype.closest) {
  Element.prototype.closest = function (s) {
    var el = this;
    do {
      if (el.matches(s)) return el;
      el = el.parentElement || el.parentNode;
    } while (el !== null && el.nodeType === 1);
    return null;
  };
}

/**
 * Get a DOM element
 * @param  {String} selector    Selector to match
 * @param  {Node} scope         Element to search within [optional]
 * @return {Node}               Matching element
 */
const get = (selector, scope) => {
  if (!selector) throw new Error("Dom needs a selector");
  return scope
    ? scope.querySelector(selector)
    : document.querySelector(selector);
};

/**
 * Get all matching DOM elements
 * @param  {String} selector    Selector to match
 * @param  {Node} scope         Element to search within [optional]
 * @return {NodeList}           Matching elements
 */
const query = (selector, scope) => {
  if (!selector) throw new Error("Dom needs a selector");
  return scope
    ? scope.querySelectorAll(selector)
    : document.querySelectorAll(selector);
};

/**
 * Create a DOM element
 * @param  {String} el          Element to create
 * @return {Element}            Created element
 */
const create = (el) => {
  return document.createElement(el);
};

/**
 * Add "hidden" class to a DOM element
 * @param  {String} el          Element to hide
 */
const hide = (el) => {
  el.classList.add("hidden");
};

/**
 * Remove "hidden" class from a DOM element
 * @param  {String} el          Element to show
 */
const show = (el) => {
  el.classList.remove("hidden");
};

/**
 * Toggle "visible" class on a DOM element
 * @param  {String} el          Element to toggle
 */
const toggle = (el) => {
  el.classList.toggle("visible");
};

/**
 * Set event listener
 * @param  {Node}     el          Element to attach to
 * @param  {String}   event       Event to listen for
 * @param  {Function} callback    Callback to run
 * @param  {Boolean}  useCapture  useCapture if true [optional]
 */
const on = function (el, event, callback, useCapture) {
  if (!el) throw new Error("Dom needs an el to attach event to");
  if (!event) throw new Error("Dom needs an event to listen for");
  if (!callback || typeof callback !== "function")
    throw new Error("Dom needs a valid callback");
  el.addEventListener(event, callback, useCapture || false);
};

// handle DOM ready
const ready = (callback) => {
  if (document.readyState != "loading") callback();
  else document.addEventListener("DOMContentLoaded", callback);
};

ready(() => {
  // open menu on click
  let menuButton = get("#menu-button");
  if (menuButton) {
    menuButton.addEventListener("click", (event) => {
      let menu = get("#menu");
      menu.classList.toggle("menu");
    });
  }

  // hide menu after click
  query("#menu A").forEach((el) => {
    el.addEventListener("click", (event) => {
      let menu = get("#menu");
      menu.classList.remove("menu");
    });
  });

  // hide menu on window resize
  window.addEventListener("resize", (event) => {
    let menu = get("#menu");
    if (menu) {
      menu.classList.remove("menu");
    }
  });

  // open search panel on click
  query(".nav-search-button").forEach((el) => {
    el.addEventListener("click", (event) => {
      let searchPanel = el.nextElementSibling;
      toggle(searchPanel);
      searchPanel.firstElementChild.focus();
    });
  });

  // clear search and close search panel
  query(".nav-search-close").forEach((el) => {
    el.addEventListener("click", (event) => {
      let searchPanel = el.parentElement;
      searchPanel.reset();
      toggle(searchPanel);
      event.preventDefault();
    });
  });

  // open link popup on click
  query(".link-popup").forEach((el) => {
    let trigger = el.querySelector(".link-popup-trigger");
    let menu = el.querySelector(".link-popup-menu");
    trigger.addEventListener("click", (event) => {
      toggle(menu);
    });
  });

  // don't show HTML5 validation popup for empty search submit
  query(".nav-search-input").forEach((el) => {
    el.addEventListener(
      "invalid",
      (function () {
        return function (event) {
          event.preventDefault();
        };
      })(),
      true
    );
  });
});
