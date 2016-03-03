// core

//= require "plugins/jquery.js"
//= require "plugins/jquery-ui.js"
//= require "plugins/modernizr.js"
//= require "plugins/classie.js"

// components

//= require "components/navigation.js"
//= require "components/core.js"
//= require "components/touch.js"
//= require "components/transition.js"
//= require "components/mediaquery.js"
//= require "components/scrollbar.js"
//= require "components/swap.js"

//= require "components/lightbox.js"
//= require "components/carousel.js"
//= require "components/dropdown.js"
//= require "components/upload.js"
//= requure "components/tooltip.js"
//= require "components/tabs.js"
//= require "components/params.js"

// components init

if ($('.mk-lightbox').length > 0) {
  $('.mk-lightbox').lightbox();
}

if ($('.mk-carousel').length > 0) {
  $('.mk-carousel').carousel();
}

if ($('.mk-dropdown').length > 0) {
  $('.mk-dropdown').dropdown();
}

if ($('.mk-tooltip').length > 0) {

  // <a href="#" data-title="ToolTip Text">Tooltip Target</a>

  $('.mk-tooltip').tooltip({
    direction: "top",
    delay: 500
  });
}

if ($('.mk-tab').length > 0) {

  $('.mk-tab').tabs();

  // <nav>
  //   <a href="#tab-one" class="tab" data-tabs-group="tab-group">One</a>
  //   <a href="#tab-two" class="tab" data-tabs-group="tab-group">Two</a>
  //   <a href="#tab-three" class="tab" data-tabs-group="tab-group">Three</a>
  // </nav>
  // <div id="tab-one">
  //     ...
  // </div>
  // <div id="tab-two">
  //     ...
  // </div>
  // <div id="tab-three">
  //     ...
  // </div>

}