@include('admin.index.header')
<div id="wrapper">
@include('admin.index.nav')
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('admin.index.top')
        <div class="row J_mainContent" name="content-main" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
        <div class="footer">
            <div class="pull-right">&copy; 2014-2015 <a href="http://www.cqyanyu.com" target="_blank">晏语科技</a> </div>
        </div>
    </div>
    <!--右侧部分结束-->


</div>

@include('admin.index.footer')

