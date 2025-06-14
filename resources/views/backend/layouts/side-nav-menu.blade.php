<!-- Sidenav Menu Start -->
<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="index.html" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="{{ asset('assets/images/logo-white-sm.png') }}" alt="logo"></span>
            <span class="logo-sm"><img src="backend/assets/images/logo-sm-light.png" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="{{ asset('assets/images/logo-sm.png') }}" alt="dark logo"></span>
            <span class="logo-sm"><img src="backend/assets/images/logo-sm.png" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ti ti-circle align-middle"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar>

        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-title">Navigation</li>

            <li class="side-nav-item">
                <a href="index.html" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-view-dashboard"></i></span>
                    <span class="menu-text"> Dashboard </span>
                    <span class="badge bg-success rounded-pill">5</span>
                </a>
            </li>

            <li class="side-nav-title">Customization</li>

            {{-- <li class="side-nav-item">
                <a href="{{ route('pages.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-folder-cog-outline"></i></span>
                    <span class="menu-text">Pages Control</span>
                </a>
            </li> --}}
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                    class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-folder-cog-outline"></i></span>
                    <span class="menu-text"> Pages Control</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('pages.index') }}" class="side-nav-link">
                                <span class="menu-text">Pages</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('page-item.index') }}" class="side-nav-link">
                                <span class="menu-text">Sub Pages</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarBlog" aria-expanded="false" aria-controls="sidebarBlog"
                    class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-form-select"></i></span>
                    <span class="menu-text"> Blog </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBlog">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('category.index') }}" class="side-nav-link">
                                <span class="menu-text">Category</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('subcategory.index') }}" class="side-nav-link">
                                <span class="menu-text">Sub Category</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('article.index') }}" class="side-nav-link">
                                <span class="menu-text">Article</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarBooks" aria-expanded="false" aria-controls="sidebarBooks"
                    class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-book-multiple"></i></span>
                    <span class="menu-text"> Books </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBooks">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('books.index') }}" class="side-nav-link">
                                <span class="menu-text">List Books</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('subcategory.index') }}" class="side-nav-link">
                                <span class="menu-text">Create Books</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false"
                    aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-lock-outline"></i></span>
                    <span class="menu-text"> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="auth-login.html" class="side-nav-link">
                                <span class="menu-text">Login</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="auth-register.html" class="side-nav-link">
                                <span class="menu-text">Register</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="auth-recoverpw.html" class="side-nav-link">
                                <span class="menu-text">Recover Password</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="auth-lock-screen.html" class="side-nav-link">
                                <span class="menu-text">Lock Screen</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            {{-- <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                    class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-file-document-outline"></i></span>
                    <span class="menu-text"> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="pages-starter.html" class="side-nav-link">
                                <span class="menu-text">Starter Page</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="pages-timeline.html" class="side-nav-link">
                                <span class="menu-text">Timeline</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="pages-invoice.html" class="side-nav-link">
                                <span class="menu-text">Invoice</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="pages-pricing.html" class="side-nav-link">
                                <span class="menu-text">Pricing</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="pages-gallery.html" class="side-nav-link">
                                <span class="menu-text">Gallery</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="pages-maintenance.html" class="side-nav-link">
                                <span class="menu-text">Maintenance</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="pages-coming-soon.html" class="side-nav-link">
                                <span class="menu-text">Coming Soon</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false"
                    aria-controls="sidebarPagesError" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-alert-circle-outline"></i></span>
                    <span class="menu-text"> Error Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesError">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="error-404-alt.html" class="side-nav-link">
                                <span class="menu-text">404 Error (alt)</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="error-404.html" class="side-nav-link">
                                <span class="menu-text">404 Not Found</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="error-500.html" class="side-nav-link">
                                <span class="menu-text">500 Internal Server</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="side-nav-title">Components</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false"
                    aria-controls="sidebarBaseUI" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-format-underline"></i></span>
                    <span class="menu-text"> Base UI </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBaseUI">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="ui-accordions.html" class="side-nav-link">
                                <span class="menu-text">Accordions</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-alerts.html" class="side-nav-link">
                                <span class="menu-text">Alerts</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-avatars.html" class="side-nav-link">
                                <span class="menu-text">Avatars</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-badges.html" class="side-nav-link">
                                <span class="menu-text">Badges</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-breadcrumb.html" class="side-nav-link">
                                <span class="menu-text">Breadcrumb</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-buttons.html" class="side-nav-link">
                                <span class="menu-text">Buttons</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-cards.html" class="side-nav-link">
                                <span class="menu-text">Cards</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-carousel.html" class="side-nav-link">
                                <span class="menu-text">Carousel</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-collapse.html" class="side-nav-link">
                                <span class="menu-text">Collapse</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-dropdowns.html" class="side-nav-link">
                                <span class="menu-text">Dropdowns</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-ratios.html" class="side-nav-link">
                                <span class="menu-text">Ratios</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-grid.html" class="side-nav-link">
                                <span class="menu-text">Grid</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-links.html" class="side-nav-link">
                                <span class="menu-text">Links</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-list-group.html" class="side-nav-link">
                                <span class="menu-text">List Group</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-modals.html" class="side-nav-link">
                                <span class="menu-text">Modals</span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="ui-offcanvas.html" class="side-nav-link">
                                <span class="menu-text">Offcanvas</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-placeholders.html" class="side-nav-link">
                                <span class="menu-text">Placeholders</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-pagination.html" class="side-nav-link">
                                <span class="menu-text">Pagination</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-popovers.html" class="side-nav-link">
                                <span class="menu-text">Popovers</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-progress.html" class="side-nav-link">
                                <span class="menu-text">Progress</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-scrollspy.html" class="side-nav-link">
                                <span class="menu-text">Scrollspy</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-spinners.html" class="side-nav-link">
                                <span class="menu-text">Spinners</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-tabs.html" class="side-nav-link">
                                <span class="menu-text">Tabs</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-tooltips.html" class="side-nav-link">
                                <span class="menu-text">Tooltips</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-typography.html" class="side-nav-link">
                                <span class="menu-text">Typography</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="ui-utilities.html" class="side-nav-link">
                                <span class="menu-text">Utilities</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false"
                    aria-controls="sidebarExtendedUI" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-briefcase-outline"></i></span>
                    <span class="menu-text"> Extended UI </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarExtendedUI">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="extended-sweetalerts.html" class="side-nav-link">
                                <span class="menu-text">Sweet Alerts</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="extended-range-sliders.html" class="side-nav-link">
                                <span class="menu-text">Range Sliders</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="extended-ratings.html" class="side-nav-link">
                                <span class="menu-text">Ratings</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="extended-scrollbar.html" class="side-nav-link">
                                <span class="menu-text">Scrollbar</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="extended-tost.html" class="side-nav-link">
                                <span class="menu-text">Toasts</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="extended-tour.html" class="side-nav-link">
                                <span class="menu-text">Tour</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="extended-treeview.html" class="side-nav-link">
                                <span class="menu-text">Treeview</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarWidgets" aria-expanded="false"
                    aria-controls="sidebarWidgets" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-puzzle-outline"></i></span>
                    <span class="menu-text"> Widgets </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarWidgets">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="widgets-tiles.html" class="side-nav-link">
                                <span class="menu-text">Tile Box</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="widgets-charts.html" class="side-nav-link">
                                <span class="menu-text">Charts Widgets</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons"
                    class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-feather"></i></span>
                    <span class="menu-text"> Icons </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarIcons">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="icons-materialdesign.html" class="side-nav-link">
                                <span class="menu-text">Material Design</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="icons-fontawesome.html" class="side-nav-link">
                                <span class="menu-text">Font awesome</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="icons-simple-line.html" class="side-nav-link">
                                <span class="menu-text">Simple Line</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="icons-tabler.html" class="side-nav-link">
                                <span class="menu-text">Tabler</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="icons-lucide.html" class="side-nav-link">
                                <span class="menu-text">Lucide</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="icons-iconify.html" class="side-nav-link">
                                <span class="menu-text">Iconify Icons</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false"
                    aria-controls="sidebarCharts" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-chart-pie-outline"></i></span>
                    <span class="menu-text"> Charts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCharts">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="charts-flot.html" class="side-nav-link">
                                <span class="menu-text">Flot Chart</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="charts-morris.html" class="side-nav-link">
                                <span class="menu-text">Morris Chart</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="charts-chartjs.html" class="side-nav-link">
                                <span class="menu-text">Chartjs</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="charts-peity.html" class="side-nav-link">
                                <span class="menu-text">Peity Chart</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="charts-chartist.html" class="side-nav-link">
                                <span class="menu-text">Chartist Chart</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="charts-c3.html" class="side-nav-link">
                                <span class="menu-text">C3 Chart</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="charts-sparkline.html" class="side-nav-link">
                                <span class="menu-text">Sparkline Charts</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="charts-knob.html" class="side-nav-link">
                                <span class="menu-text">Jquery Knob</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms"
                    class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-form-select"></i></span>
                    <span class="menu-text"> Forms </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarForms">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="form-elements.html" class="side-nav-link">
                                <span class="menu-text">Basic Elements</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="form-advanced.html" class="side-nav-link">
                                <span class="menu-text">Form Advanced</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="form-masks.html" class="side-nav-link">
                                <span class="menu-text">Form Masks</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="form-picker.html" class="side-nav-link">
                                <span class="menu-text">Picker</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="form-validation.html" class="side-nav-link">
                                <span class="menu-text">Validation</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="form-wizard.html" class="side-nav-link">
                                <span class="menu-text">Wizard</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="form-fileuploads.html" class="side-nav-link">
                                <span class="menu-text">File Uploads</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="form-editors.html" class="side-nav-link">
                                <span class="menu-text">Editors</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="form-xeditable.html" class="side-nav-link">
                                <span class="menu-text">X-editable</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="form-layouts.html" class="side-nav-link">
                                <span class="menu-text">Layouts</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false"
                    aria-controls="sidebarTables" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-table"></i></span>
                    <span class="menu-text"> Tables </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTables">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="tables-basic.html" class="side-nav-link">
                                <span class="menu-text">Basic Tables</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="tables-datatable.html" class="side-nav-link">
                                <span class="menu-text">Data Tables</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="tables-responsive.html" class="side-nav-link">
                                <span class="menu-text">Responsive Table </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps"
                    class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-map-marker-circle"></i></span>
                    <span class="menu-text"> Maps </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMaps">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="maps-google.html" class="side-nav-link">
                                <span class="menu-text">Google Maps</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="maps-vector.html" class="side-nav-link">
                                <span class="menu-text">Vector Maps</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title">More</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false"
                    aria-controls="sidebarLayouts" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-star-box-multiple-outline"></i></span>
                    <span class="menu-text"> Layouts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="layouts-boxed.html" target="_blank" class="side-nav-link">Vertical Boxed</a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-horizontal.html" target="_blank" class="side-nav-link">Horizontal</a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-horizontal-boxed.html" target="_blank" class="side-nav-link">Horizontal
                                Boxed</a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-full.html" target="_blank" class="side-nav-link">Full View</a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-fullscreen.html" target="_blank" class="side-nav-link">Fullscreen
                                View</a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-hover.html" target="_blank" class="side-nav-link">Hover Menu</a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-compact.html" target="_blank" class="side-nav-link">Compact</a>
                        </li>
                        <li class="side-nav-item">
                            <a href="layouts-icon-view.html" target="_blank" class="side-nav-link">Icon View</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false"
                    aria-controls="sidebarMultiLevel" class="side-nav-link">
                    <span class="menu-icon"><i class="mdi mdi-card-multiple-outline"></i></span>
                    <span class="menu-text"> Multi Level </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMultiLevel">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false"
                                aria-controls="sidebarSecondLevel" class="side-nav-link">
                                <span class="menu-text"> Second Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSecondLevel">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="javascript: void(0);" class="side-nav-link">
                                            <span class="menu-text">Item 1</span>
                                        </a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a href="javascript: void(0);" class="side-nav-link">
                                            <span class="menu-text">Item 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false"
                                aria-controls="sidebarThirdLevel" class="side-nav-link">
                                <span class="menu-text"> Third Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarThirdLevel">
                                <ul class="sub-menu">
                                    <li class="side-nav-item">
                                        <a href="javascript: void(0);" class="side-nav-link">Item 1</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false"
                                            aria-controls="sidebarFourthLevel" class="side-nav-link">
                                            <span class="menu-text"> Item 2 </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarFourthLevel">
                                            <ul class="sub-menu">
                                                <li class="side-nav-item">
                                                    <a href="javascript: void(0);" class="side-nav-link">
                                                        <span class="menu-text">Item 2.1</span>
                                                    </a>
                                                </li>
                                                <li class="side-nav-item">
                                                    <a href="javascript: void(0);" class="side-nav-link">
                                                        <span class="menu-text">Item 2.2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <div class="clearfix"></div>
    </div>
</div>
<!-- Sidenav Menu End -->
