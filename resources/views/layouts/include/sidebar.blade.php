<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/back/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Syndron</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard.index') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i></div>
                <div class="menu-title">Dashboard</div>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('category.create') }}"><i class='bx bx-radio-circle'></i>Add Category</a></li>
                <li> <a href="{{ route('category.index') }}"><i class='bx bx-radio-circle'></i>View Category</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Blogs</div>
            </a>
            <ul>
                <li> <a href="{{ route('blog.create') }}"><i class='bx bx-radio-circle'></i>Add Blog</a></li>
                <li> <a href="{{ route('blog.index') }}"><i class='bx bx-radio-circle'></i>View Blog</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
<<<<<<< HEAD
                <div class="menu-title">Ajax Blogs</div>
            </a>
            <ul>
                <li> <a href="{{ route('blog.ajax') }}"><i class='bx bx-radio-circle'></i>Add Ajax Blog</a></li>
                {{-- <li> <a href="{{ route('blog.index') }}"><i class='bx bx-radio-circle'></i>View Blog</a></li> --}}
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Media</div>
            </a>
            <ul>
                <li> <a href="{{ route('media.create') }}"><i class='bx bx-radio-circle'></i>Add Media</a></li>
                <li> <a href="{{ route('media.index') }}"><i class='bx bx-radio-circle'></i>View Media</a></li>
            </ul>
        </li>
=======
                <div class="menu-title">Ajax</div>
            </a>
            <ul>
                <li> <a href="{{ route('blog.ajax') }}"><i class='bx bx-radio-circle'></i>Add Blog</a></li>
                {{-- <li> <a href="{{ route('blog.index') }}"><i class='bx bx-radio-circle'></i>View Blog</a></li> --}}
            </ul>
        </li>
>>>>>>> 24a356055d79600d855fb1edc4428ac474f91f40
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
