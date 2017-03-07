<!--左侧导航开始-->

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="nav-close"><i class="fa fa-times-circle"></i> </div>
    <div class="">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="profile-element logo"> YANYUBMS+ </div>
                <div class="logo-element">Y+ </div>
            </li>
            @foreach($menulist as $row)
                <li > <a class="<?php echo $row['url']?'J_menuItem':'';?>" href="<?php echo $row['url']?url($row['url']):'#';?>"> <i class="{$row['log']}"></i> <span class="nav-label">{{$row['title']}}</span></a>
                    <ul class="nav nav-second-level">
                        @foreach($row['child'] as $value)
                            <li > <a class="<?php echo $value['url']?'J_menuItem':'';?>" href="<?php echo $value['url']?url($value['url']):'#';?>"> <i class="{$row['log']}"></i> <span class="nav-label">{{$value['title']}}</span></a> </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach

        </ul>
    </div>
</nav>
<!--左侧导航结束-->