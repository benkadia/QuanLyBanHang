<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            @if($menus->count())
                @foreach ($menus as $menu)
                @php
                    if($menu->parent_id!=0)
                        continue;
                        $subs = $menus->where('parent_id',$menu->id);
                @endphp
                    @if (!$subs->count())
            <li class="menu">
                <a href="{{$menu->route?route($menu->route):'#'}}" data-active="true" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        {!!$menu->icon!!}
                        <span> {{$menu->name}}</span>
                    </div>
                </a>
            </li>
            @else
            <li class="menu">
                <a href="#app{{$menu->id}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        {!!$menu->icon!!}
                        <span>{{$menu->name}}</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="app{{$menu->id}}" data-parent="#accordionExample">
                    @foreach ($subs as $sub)
                    <li>
                        <a href="{{$sub->route?route($sub->route):''}}"> {{$sub->name}} </a>
                    </li>
                    @endforeach
                </ul>
            </li>
                @endif
                @endforeach
            @else
            <li class="menu">
                <a href="#" data-active="true" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>Bạn chưa được<br>cấp quyền</span>
                    </div>
                </a>
            </li>
            @endif
        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>
<!--  END SIDEBAR  -->
