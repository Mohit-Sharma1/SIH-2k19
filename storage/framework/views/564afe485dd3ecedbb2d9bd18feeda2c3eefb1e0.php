<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a class="<?php if(Request::segment(1) == 'announcements'): ?> active <?php endif; ?>" href="<?php echo e(url('/announcements')); ?>"><i class="si si-bell"></i><span class="sidebar-mini-hide">Announcements</span></a>
        </li>
        <li>
            <a class="<?php if(Request::segment(1) == 'dashboard'): ?> active <?php endif; ?>" href="<?php echo e(url('/dashboard')); ?>"><i class="si si-pie-chart"></i><span class="sidebar-mini-hide">Dashboard</span></a>
        </li>
        <?php if(auth()->check() && auth()->user()->hasRole('corporate')): ?>
        <li>
            <a class="<?php if(Request::segment(1) == 'ideas'): ?> active <?php endif; ?>" href="<?php echo e(url('/ideas')); ?>"><i class="si si-bulb"></i><span class="sidebar-mini-hide">Ideas</span></a>
        </li>
        <?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole('startup')): ?>
        <li>
            <a class="<?php if(Request::segment(1) == 'challenges'): ?> active <?php endif; ?>" href="<?php echo e(url('/challenges')); ?>"><i class="si si-compass"></i><span class="sidebar-mini-hide">Challenges</span></a>
        </li>
        <?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole('corporate')): ?>
        <li>
            <a class="<?php if(Request::segment(1) == 'startups'): ?> active <?php endif; ?>" href="<?php echo e(url('/startups')); ?>"><i class="si si-rocket"></i><span class="sidebar-mini-hide">Startups</span></a>
        </li>
        <?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole('startup')): ?>
        <li>
            <a class="<?php if(Request::segment(1) == 'corporates'): ?> active <?php endif; ?>" href="<?php echo e(url('/corporates')); ?>"><i class="si si-briefcase"></i><span class="sidebar-mini-hide">Corporates</span></a>
        </li>
        <?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <li>
            <a class="<?php if(Request::segment(1) == 'verifications'): ?> active <?php endif; ?>" href="<?php echo e(url('/verifications')); ?>"><i class="si si-check"></i><span class="sidebar-mini-hide">Verifications</span></a>
        </li>
        <?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <li>
            <a class="<?php if(Request::segment(1) == 'tags'): ?> active <?php endif; ?>" href="<?php echo e(url('/tags')); ?>"><i class="si si-tag"></i><span class="sidebar-mini-hide">Tags</span></a>
        </li>
        <?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>

        <?php else: ?>
        <li class="<?php if(Request::segment(1) == 'my-account'): ?> open <?php endif; ?>">
            <a class="nav-submenu <?php if(Request::segment(1) == 'my-account'): ?> active <?php endif; ?>" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">My Account</span></a>
            <ul>
                <?php if(auth()->check() && auth()->user()->hasRole('startup')): ?>
                <li>
                    <a class="<?php if(Request::segment(2) == 'ideas'): ?> active <?php endif; ?>" href="<?php echo e(url('/my-account/ideas')); ?>">Ideas</a>
                </li>
                <?php endif; ?>
                <?php if(auth()->check() && auth()->user()->hasRole('corporate')): ?>
                <li>
                    <a class="<?php if(Request::segment(2) == 'challenges'): ?> active <?php endif; ?>" href="<?php echo e(url('/my-account/challenges')); ?>">Challenges</a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <?php endif; ?>
        <li>
            <a class="<?php if(Request::segment(1) == 'support'): ?> active <?php endif; ?>" href="<?php echo e(url('/support')); ?>"><i class="si si-earphones"></i><span class="sidebar-mini-hide">Support</span></a>
        </li>
    </ul>
</div>