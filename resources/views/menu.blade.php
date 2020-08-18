<li class="nav-item {{ request()->routeIs('Home')?'active':'' }}">
    <a class="nav-link" href="{{ route('Home') }}">Главная</a>
</li>
<li class="nav-item {{ request()->routeIs('news.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('news.index') }}">Новости</a>
</li>
<li class="nav-item {{ request()->routeIs('news.category.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('news.category.index') }}">Категории</a>
</li>
<li class="nav-item {{ request()->routeIs('admin.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('admin.index') }}">Админка</a>
</li>
<li class="nav-item {{ request()->routeIs('vue')?'active':'' }}">
    <a class="nav-link" href="{{ route('vue') }}">VUE Demo</a>
</li>

