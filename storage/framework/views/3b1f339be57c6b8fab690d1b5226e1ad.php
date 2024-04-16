<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('build/images/empornac.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('build/images/empornac.png')); ?>" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('build/images/empornac.png')); ?>" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('build/images/empornac.png')); ?>" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span><?php echo app('translator')->get('translation.menu'); ?></span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span><?php echo app('translator')->get('translation.dashboards'); ?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-projects" class="nav-link"><?php echo app('translator')->get('Reporte Consumible'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('documentacions.dashboard')); ?>" class="nav-link"><?php echo app('translator')->get('Documentacion'); ?></a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('equipo_its.dashboard')); ?>" class="nav-link"><?php echo app('translator')->get('Equipo IT'); ?></a>
                            </li><li class="nav-item">
                                <a href="dashboard-projects" class="nav-link"><?php echo app('translator')->get('Reporte Inventariado'); ?></a>
                            </li><li class="nav-item">
                                <a href="dashboard-projects" class="nav-link"><?php echo app('translator')->get('Reporte Fungible'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('logs.dashboard')); ?>" class="nav-link"><?php echo app('translator')->get('Log'); ?></a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('tareas.dashboard')); ?>" class="nav-link"><span><?php echo app('translator')->get('Tarea'); ?></span> <span class="badge badge-pill bg-success"><?php echo app('translator')->get('translation.new'); ?></span></a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span><?php echo app('translator')->get('Aplicaciones'); ?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-calendar" class="nav-link"><?php echo app('translator')->get('translation.calendar'); ?></a>
                            </li>



                            <li class="nav-item">
                                <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects"><?php echo app('translator')->get('Logs'); ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProjects">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('logs.index')); ?>" class="nav-link"><?php echo app('translator')->get('Lista de Logs'); ?></a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?php echo e(route('logs.create')); ?>" class="nav-link"><?php echo app('translator')->get('Crear LOGS'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTasks"><?php echo app('translator')->get('Tarea'); ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTasks">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tasks-kanban" class="nav-link"><?php echo app('translator')->get('translation.kanbanboard'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('tareas.index')); ?>" class="nav-link"><?php echo app('translator')->get('Lista de Tarea'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('tareas.create')); ?>" class="nav-link"><?php echo app('translator')->get('Crear Tarea'); ?></a>

                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCRM"><?php echo app('translator')->get('Equipo IT'); ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCRM">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('equipo_its.index')); ?>" class="nav-link"><?php echo app('translator')->get('Lista de Equipo It'); ?></a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets"><?php echo app('translator')->get('translation.supprt-tickets'); ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTickets">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tickets-list" class="nav-link"><?php echo app('translator')->get('translation.list-view'); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tickets-details" class="nav-link"><?php echo app('translator')->get('translation.ticket-details'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="apps-file-manager" class="nav-link"> <span><?php echo app('translator')->get('Archivos'); ?></span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarDocumentacion" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCRM"><?php echo app('translator')->get('Documentacion'); ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarDocumentacion">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="<?php echo e(route('documentacions.index')); ?>" class="nav-link"><?php echo app('translator')->get('Lista Documentacion'); ?></a>
                                        </li><li class="nav-item">
                                            <a href="<?php echo e(route('documentacions.create')); ?>" class="nav-link"><?php echo app('translator')->get('Crear Documentacion'); ?></a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarjobs" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarjobs"> <span><?php echo app('translator')->get('translation.jobs'); ?></span> <span class="badge badge-pill bg-success"><?php echo app('translator')->get('translation.new'); ?></span></a>
                                <div class="collapse menu-dropdown" id="sidebarjobs">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-job-statistics" class="nav-link"> <?php echo app('translator')->get('translation.statistics'); ?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarJoblists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarJoblists">
                                                <?php echo app('translator')->get('translation.job-lists'); ?>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarJoblists">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-lists" class="nav-link"> <?php echo app('translator')->get('translation.list'); ?>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-grid-lists" class="nav-link"> <?php echo app('translator')->get('translation.grid'); ?> </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-details" class="nav-link"> <?php echo app('translator')->get('translation.overview'); ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCandidatelists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCandidatelists">
                                                <?php echo app('translator')->get('translation.candidate-lists'); ?>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCandidatelists">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-candidate-lists" class="nav-link"> <?php echo app('translator')->get('translation.list-view'); ?>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-candidate-grid" class="nav-link"> <?php echo app('translator')->get('translation.grid-view'); ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-application" class="nav-link"> <?php echo app('translator')->get('translation.application'); ?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-new" class="nav-link"> <?php echo app('translator')->get('translation.new-job'); ?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-companies-lists" class="nav-link"> <?php echo app('translator')->get('translation.companies-list'); ?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-categories" class="nav-link"> <?php echo app('translator')->get('translation.job-categories'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>




                <li class="menu-title"><i class="ri-more-fill"></i> <span><?php echo app('translator')->get('Paginas'); ?></span></li>



                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span><?php echo app('translator')->get('Pagina'); ?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">



                            <li class="nav-item">
                                <a href="pages-faqs" class="nav-link"><?php echo app('translator')->get('Ayuda'); ?></a>
                            </li>



                        </ul>
                    </div>
                </li>




            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH C:\laragon\www\glpi-insumos\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>