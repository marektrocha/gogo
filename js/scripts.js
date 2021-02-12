window.box_slider_init = function() {

    var box_options = {
      $AutoPlay: 1,
      $AutoPlaySteps: 1,								/* auto steps */
      $SlideDuration: 228,
      $SlideWidth: 352,
      $SlideSpacing: 3,
      $ArrowNavigatorOptions: {
        $Class: $eventArrowNavigator$,
        $Steps: 1										/* manual steps */
      },
    };

    var box_slider = new $eventSlider$("box", box_options);

    /*#region responsive code begin

    var MAX_WIDTH = 1124;

    function ScaleSlider() {
        var containerElement = box_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            box_slider.$ScaleWidth(expectedWidth);
        }
        else {
            window.setTimeout(ScaleSlider, 300);
        }
    }

    ScaleSlider(); */

    $event$.$AddEvent(window, "load", ScaleSlider);
    $event$.$AddEvent(window, "resize", ScaleSlider);
    $event$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
};