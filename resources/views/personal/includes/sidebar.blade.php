<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Main
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Blog
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon far fa-thumbs-up"></i>
                    <p>
                        Liked
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon far fa-comment"></i>
                    <p>
                        My comments
                    </p>
                </a>
            </li>
        </ul>
    </div>
</aside>
