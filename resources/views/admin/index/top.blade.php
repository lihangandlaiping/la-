<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="http://www.zi-han.net/theme/hplus/search_results.html">
                <div class="form-group">
                   <!-- <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">-->
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="hidden-xs"> <a href="http://www.cqyanyu.com" target="_blank" data-index="0"><i class="glyphicon glyphicon-home"></i> 网站首页</a> </li>
            <li class="hidden-xs"> <a href="javascript:void(0);" onclick="sendGetAjax('<?php echo url('deleteCache');?>');"  data-index="0"><i class="glyphicon glyphicon-refresh"></i> 更新缓存</a> </li>
            <li class="dropdown hidden-xs"> <a aria-expanded="false"> <i class="glyphicon glyphicon-book"></i> 帮助手册 </a> </li>
            <li class="dropdown">
                <a class="right-sidebar-toggle dropdown" data-toggle="dropdown" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> {$admin_user['username']} </a>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a href="javascript:void(0);" onclick="updatePass();">修改密码</a> </li>
                    <li class="divider"></li>

                    <li class="J_tabCloseOther"><a href="{:url('loginOut')}">退出登录</a> </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<div class="row content-tabs">
    <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i> </button>
    <nav class="page-tabs J_menuTabs">
        <div class="page-tabs-content"> <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a> </div>
    </nav>
    <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i> </button>
    <div class="btn-group roll-nav roll-right">
        <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span> </button>
        <ul role="menu" class="dropdown-menu dropdown-menu-right">
            <li class="J_tabShowActive"><a>定位当前选项卡</a> </li>
            <li class="divider"></li>
            <li class="J_tabCloseAll"><a>关闭全部选项卡</a> </li>
            <li class="J_tabCloseOther"><a>关闭其他选项卡</a> </li>
        </ul>
    </div>
    <a href="{:url('loginOut')}" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a> </div>
