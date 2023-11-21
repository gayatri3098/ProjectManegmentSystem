<head>
    <style>
        .brand {
            color: #FFF;
            font-weight: bolder;
            font-size: 20px;
        }

        .brand:hover {
            color: dodgerblue;
        }

        .navbar {
            background: rgba(36, 73, 95, 0.8) !important;

            padding: 0px;
        }

        .card-header {
            background-color: rgba(36, 73, 95, 0.8) !important;
            color: #FFF;
            font-weight: bolder;
            font-size: 20px;
        }

        .navbar-expand-md .navbar-nav .nav-link {
            font-size: 20px !important;
            color: #FFF;
        }

        .navbar-expand-md .navbar-nav .nav-link:hover {
            color: dodgerblue;
        }

        .circular {
            border-radius: 50%;
        }
    </style>

</head>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <span class="brand">PMS</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if(Route::has('register')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
                <?php endif; ?>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo action('ProjectController@index'); ?>"><i class="fa fa-building"
                            aria-hidden="true"></i> Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo action('TaskController@index' , Auth::user()->id ); ?>"><i
                            class="fa fa-tasks" aria-hidden="true"></i> Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo action('subtaskController@index' , Auth::user()->id ); ?>"><i
                            class="fa fa-briefcase" aria-hidden="true"></i> Subtasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/members"><i class="fa fa-users" aria-hidden="true"></i> Members</a>
                </li>
                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="/images/one.jpg" class="img-fluid circular" alt="Responsive image" height="32"
                            width="32"> <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>



                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"
                            href="<?php echo action('MemberController@show',Auth::user()->user_name); ?>"><?php echo e(__('Profile')); ?></a>

                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>


                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>

                    </div>
                </li>

                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\adones\Downloads\Laravel Projects\Unfinish\Project-System-Laravel\resources\views/shared/navbar.blade.php ENDPATH**/ ?>