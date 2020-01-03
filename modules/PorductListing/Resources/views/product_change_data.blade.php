<div id="thumbnails">
   <div class="thumbelina-but vert top">&#708;</div>
   <ul class="product_images_display">
     @foreach($product_size as $img_key => $img_value)
      <li>

         <a href="{{ asset('public/front/product/'.$img_value->image)}}" title="{{ $img_value->image }}">

            <img class="cloudzoom-gallery" src="{{ asset('public/front/product/'.$img_value->image) }}" alt="{{ $img_value->image }}"

            data-cloudzoom="

            useZoom:'.cloudzoom',

            image:'{{ asset('public/front/product/'.$img_value->image )}}'

            ">

         </a>

      </li>
      @endforeach
   </ul>
   <div class="thumbelina-but vert bottom">&#709;</div>
</div>
<div id="product-image">
   <a href="{{ asset('public/front/product/'.$product_size[0]->image )}}">
      <img class="cloudzoom" src="{{ asset('public/front/product/'.$product_size[0]->image )}}"
      alt="{{ $product_size[0]->image }}"
      data-cloudzoom="
      zoomPosition:'inside',
      zoomOffsetX:0,
      zoomFlyOut:false,
      variableMagnification:false,
      disableZoom:'auto',
      touchStartDelay:100,
      propagateGalleryEvent:true
      ">
   </a>

</div>
