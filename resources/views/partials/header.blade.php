<nav>
    <ul id="menu">        
        @if(isset($menus) && count($menus) == 6)
        <li><a href="/">{{$menus[0]->menu}}</a></li>
        <li><a href="/clubs/1">{{$menus[1]->menu}}</a></li>
        <li><a href="/clubs">{{$menus[2]->menu}}</a></li>
        <li><a href="/gallery">{{$menus[3]->menu}}</a></li>
        <li><a href="/contact">{{$menus[4]->menu}}</a></li>
        <li><a href="/help">{{$menus[5]->menu}}</a></li>
        @endif
    </ul>
</nav>