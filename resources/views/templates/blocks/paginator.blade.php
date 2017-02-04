
<div class="sortPagiBar">
    <div class="bottom-pagination">
        <nav>
            {{ $paginator['html_render'] }}
        </nav>
    </div>

     {{-- <div class="show-product-item">
        <select id="select_limit_product" name="forma" onchange="location = this.value;">
            <option value="{{$request->fullUrlWithQuery(['limit' => '30', 'page'=>'1'])}}" {{ $limit == 30 ? 'selected': '' }}>Show 30</option>
            <option value="{{$request->fullUrlWithQuery(['limit' => '45', 'page'=>'1'])}}" {{ $limit == 45 ? 'selected': '' }}>Show 45</option>
            <option value="{{$request->fullUrlWithQuery(['limit' => '60', 'page'=>'1'])}}" {{ $limit == 60 ? 'selected': '' }}>Show 60</option>
            <option value="{{$request->fullUrlWithQuery(['limit' => '120', 'page'=>'1'])}}" {{ $limit == 120 ? 'selected': '' }}>Show 120</option>
        </select>
    </div>
 --}}
      <div class="sort-product">

         <div class="sort-product-icon">
             @if($paginator['main_data']['orderby'] == 'name.asc')
                 <a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$page, 'orderby'=>'name.desc'])}}" class="fa fa-sort-alpha-desc" title=""></a>
             @elseif($paginator['main_data']['orderby'] == 'name.desc')
                 <a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$page, 'orderby'=>'name.asc'])}}" class="fa fa-sort-alpha-asc" title=""></a>
             @elseif($paginator['main_data']['orderby'] == 'price.desc')
                 <a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$page, 'orderby'=>'price.asc'])}}" class="fa fa-sort-amount-asc" title=""></a>
             @else
                 <a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$page, 'orderby'=>'price.desc'])}}" class="fa fa-sort-amount-desc" title=""></a>
             @endif
         </div>
     </div>
</div>

