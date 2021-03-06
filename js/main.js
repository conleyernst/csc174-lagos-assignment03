$(document).ready(function() {
  $("#slides").slidesjs({
    pagination: {
      active: false,
        // [boolean] Create pagination items.
        // You cannot use your own pagination. Sorry.
      effect: "slide"
        // [string] Can be either "slide" or "fade".
    },
    effect: {
      fade: {
        speed: 1000,
          // [number] Speed in milliseconds of the fade animation.
        crossfade: true
          // [boolean] Cross-fade the transition.
      }
    },
    play: {
      active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "fade",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    },
    navigation: {
      active: false,
    },
    width: 300,
    height: 300,
  });
});
