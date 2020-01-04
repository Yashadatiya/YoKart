

function zoom_effect() {
  var nTimer = 0;
  // Cache elements
  app.$thumbnails = $('#thumbnails');
  app.$zoomOverlay = $('#zoom-overlay');
  // Initialize thumbnail slider
  app.$thumbnails.Thumbelina({
    orientation: 'vertical',
    $bwdBut: $('.top', app.$thumbnails), 
    $fwdBut: $('.bottom', app.$thumbnails)
  });
  // Bind event handlers
  $('a', app.$thumbnails).click(function(e) {
    e.preventDefault();
    app.$zoomOverlay.css('background-image', 'url("' + this.href + '")');
  });
  $('a', $('#product-image')).click(function(e) {
    e.preventDefault();
    $('body').addClass('fullscreen');
    app.$zoomOverlay.show();
  });
  app.$zoomOverlay.on({
    'click': function() {
      $('body').removeClass('fullscreen');
      clearTimeout(nTimer);
      nTimer = setTimeout(function() {
        app.$zoomOverlay.hide();
      }, 500); // Sync with CSS animation
    },
    'mousemove': pan
  });
  // Update mouse position for fullscreen zoom
  $('body').on('mousemove', '.cloudzoom-zoom-inside', updatePos);
}

function get_product_data(ele)
{
  $("div#divLoading").addClass('show');
  var color = ele.getAttribute('data-color');
  var product_id = $("#pro_id").val();
 
  $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }});
  $.ajax({
        type: 'POST',
        url:APP_URL+'/product-listing/product/change-data',
        data: {color: color,product_id:product_id},
        dataType: 'html',
        success: function(data)
        {
           $("div#divLoading").removeClass('show');   
           var response = JSON.parse(data);
           $('#thumbnails').html(response.success.images);
           $('#product-image').html(response.success.default_image);
            CloudZoom.quickStart();
            zoom_effect();
        }
    });
}

function brandsproduct(ele)
{
  $("div#divLoading").addClass('show');
  var brand = ele.getAttribute('data-id');
  // alert(brand);

  $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }});
  $.ajax({
        type: 'GET',
        url:APP_URL+'/product-listing/sub-category/'+brand,
        dataType: 'html',
        success: function(data)
        {
           $("div#divLoading").removeClass('show');   
          // var response = JSON.parse(data);
           $('.custom-product-data').html(data);
           //$('#product-image').html(response.success.default_image);
        }
    });
}
