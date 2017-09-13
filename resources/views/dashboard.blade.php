@extends('layout.master')

@section('title')
    Dashboard
    @endsection
@section('body')
    layout layout-vertical layout-left-navigation layout-above-toolbar
@endsection

@section('content')
<aside id="aside" class="aside aside-left"
       data-fuse-bar="aside" data-fuse-bar-media-step="md"
       data-fuse-bar-position="left">
@include('shared.sidebar')
</aside>
<div class="content-wrapper">
<nav id="toolbar" class="fixed-top bg-white">
@include('shared.navigation')
</nav>
    <div class="content">
                    <div id="project-dashboard" class="page-layout simple right-sidebar tabbed">

                        <div class="page-content-wrapper">

                            <!-- HEADER -->
                            <div
                                class="page-header bg-primary text-auto d-flex flex-column justify-content-between px-6 pt-4 pb-0">

                                <div class="row no-gutters align-items-start justify-content-between flex-nowrap">

                                    <div>
                                        <span class="h2">Hi, fjfj!</span>
                                    </div>

                                </div>

                                <div class="row no-gutters align-items-center project-selection">

                                    <div class="selected-project h6 px-4 py-2">ACME Corp. Backend App</div>

                                    <div class="project-selector">
                                        <button type="button" class="btn btn-icon">
                                            <i class="icon icon-dots-horizontal"></i>
                                        </button>
                                    </div>

                                </div>

                            </div>
                            <!-- / HEADER -->

                            <!-- CONTENT -->
                            <div class="page-content">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link btn active" id="home-tab" data-toggle="tab"
                                           href="#home-tab-pane" role="tab"
                                           aria-controls="home-tab-pane" aria-expanded="true">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link btn" id="budget-summary-tab" data-toggle="tab"
                                           href="#budget-summary-tab-pane"
                                           role="tab" aria-controls="budget-summary-tab-pane">Budget Summary</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link btn" id="team-members-tab" data-toggle="tab"
                                           href="#team-members-tab-pane"
                                           role="tab" aria-controls="team-members-tab-pane">Team Members</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                         aria-labelledby="home-tab">

                                        <!-- WIDGET GROUP -->
                                        <div class="widget-group row">

                                            <!-- WIDGET 1 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget1 card">

                                                    <div
                                                        class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">

                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div
                                                        class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">

                                                        <div class="title text-primary">7</div>

                                                        <div class="sub-title h6 text-muted">ADMINISTRATORS</div>

                                                    </div>

                                                    <div
                                                        class="widget-footer p-4 bg-faded row no-gutters align-items-center">

                                                        <span class="text-muted">Completed:</span>

                                                        <span class="ml-2">7</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 1 -->

                                            <!-- WIDGET 2 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget2 card">

                                                    <div
                                                        class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">

                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>
                                                    </div>

                                                    <div
                                                        class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                                        <div class="title text-danger">7</div>
                                                        <div class="sub-title h6 text-muted">ALUMNI</div>
                                                    </div>

                                                    <div
                                                        class="widget-footer p-4 bg-faded row no-gutters align-items-center">
                                                        <span class="text-muted">Yesterday's:</span>
                                                        <span class="ml-2">2</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 2 -->

                                            <!-- WIDGET 3 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget3 card">

                                                    <div
                                                        class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">

                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div
                                                        class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                                        <div class="title text-warning">7</div>
                                                        <div class="sub-title h6 text-muted">PENDING REQUESTS</div>
                                                    </div>

                                                    <div
                                                        class="widget-footer p-4 bg-faded row no-gutters align-items-center">
                                                        <span class="text-muted">Closed today:</span>
                                                        <span class="ml-2">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 3 -->

                                            <!-- WIDGET 4 -->
                                            <div class="col-12 col-sm-6 col-xl-3 p-3">

                                                <div class="widget widget4 card">

                                                    <div
                                                        class="widget-header pl-4 pr-2 row no-gutters align-items-center justify-content-between">

                                                        <div class="col">

                                                        </div>

                                                        <button type="button" class="btn btn-icon">
                                                            <i class="icon icon-dots-vertical"></i>
                                                        </button>

                                                    </div>

                                                    <div
                                                        class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                                        <div class="title text-success">42</div>
                                                        <div class="sub-title h6 text-muted">ONLINE</div>
                                                    </div>

                                                    <div
                                                        class="widget-footer p-4 bg-faded row no-gutters align-items-center">
                                                        <span class="text-muted">Implemented:</span>
                                                        <span class="ml-2">8</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / WIDGET 4 -->
                                           
                                        </div>
                                        <!-- / WIDGET GROUP -->
                                    </div>
                                    <div class="tab-pane fade" id="budget-summary-tab-pane" role="tabpanel"
                                         aria-labelledby="budget-summary-tab">

                                        <!-- WIDGET GROUP -->
                                        <div class="widget-group row">

                                          <div class="toolbar-bottom row align-items-center no-gutters px-4">

                                                    <!-- SEARCH -->
                                                    <div class="search-wrapper md-elevation-1 row no-gutters align-items-center w-100 p-2">
                                                        <i class="icon-magnify s-4"></i>
                                                        <input class="col pl-2" type="text" placeholder="Search or start new chat">
                                                    </div>
                                                    <!-- / SEARCH -->
                                                </div>


                                            
                                        </div>
                                        <!-- / WIDGET GROUP -->
                                    </div>
                                    <div class="tab-pane fade" id="team-members-tab-pane" role="tabpanel"
                                         aria-labelledby="team-members-tab">

                                        <!-- WIDGET GROUP -->
                                        <div class="widget-group row">

                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- / CONTENT -->

                        </div>

                    </div>

                    <script type="text/javascript" src="../../assets/js/apps/dashboard/project.js"></script>
                </div>
                </div>
@endsection
