<!-- Sidebar Header -->
<div class="sidebar-header">
    <!--<h3>Biomark Admin</h3>-->
    <a href="/">
        <img src="https://biomarking.com/assets/images/bimark1-transp.png" alt="" class="logo">
    </a>
    <strong>BM</strong>
</div>


<!-- Sidebar Links -->
<ul id="sidebar-menu" class="list-unstyled components">
    <li>
        <a href="{{ route('admin.dashboard') }}"><i class="glyphicon glyphicon-dashboard"></i>Dashboard</a>
    </li>
    <li><a href="{{ route('admin.clients') }}"><i class="glyphicon glyphicon-asterisk"></i>Clients</a></li>
    <li><a href="{{ route('admin.tests') }}"><i class="glyphicon glyphicon-paperclip"></i>Tests</a></li>
    <li><a href="{{ route('admin.resources') }}"><i class="glyphicon glyphicon-star"></i>Resources</a></li>
    <li><a href="{{ route('admin.profile') }}"><i class="glyphicon glyphicon-user"></i>Profile</a></li>
    <li><a href="{{ route('admin.settings') }}"><i class="glyphicon glyphicon-cog"></i>Settings</a></li>
</ul>