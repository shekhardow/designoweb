@extends('admin/layout')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-content">
        <div class="row">
            <div class="col-xl-4">
                <div class="m-portlet m-portlet--head-overlay m-portlet--full-height m-portlet--rounded-force">
                    <div class="m-portlet__head m-portlet__head--fit">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text m--font-light">Project Stats :</h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="m-widget28">
                            <div class="m-widget28__pic m-portlet-fit--sides"></div>
                            <div class="m-widget28__container">
                                <ul class="m-widget28__nav-items nav nav-pills nav-fill" role="tablist">
                                    <li class="m-widget28__nav-item nav-item">
                                        <a class="nav-link users statsboxs" href="javascript:void(0)">
                                            <div>
                                                <span>
                                                    <h3><?php echo !empty($portfolio_count) ? $portfolio_count : '0'; ?></h3>
                                                </span>
                                                <span>
                                                    <h5>(Total Projects)</h5>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="m-portlet m-portlet--head-overlay m-portlet--full-height m-portlet--rounded-force">
                    <div class="m-portlet__head m-portlet__head--fit">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text m--font-light">Stats :</h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="m-widget28">
                            <div class="m-widget28__pic m-portlet-fit--sides"></div>
                            <div class="m-widget28__container">
                                <ul class="m-widget28__nav-items nav nav-pills nav-fill" role="tablist">
                                    <li class="m-widget28__nav-item nav-item">
                                        <a class="nav-link users statsboxs" href="javascript:void(0)">
                                            <div>
                                                <span>
                                                    <h3><?php echo !empty($totalproducts) ? $totalproducts : '0'; ?></h3>
                                                </span>
                                                <span>
                                                    <h5>(Total Count)</h5>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="m-portlet m-portlet--head-overlay m-portlet--full-height m-portlet--rounded-force">
                    <div class="m-portlet__head m-portlet__head--fit">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text m--font-light">Stats :</h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="m-widget28">
                            <div class="m-widget28__pic m-portlet-fit--sides"></div>
                            <div class="m-widget28__container">
                                <ul class="m-widget28__nav-items nav nav-pills nav-fill" role="tablist">
                                    <li class="m-widget28__nav-item nav-item">
                                        <a class="nav-link users statsboxs" href="javascript:void(0)">
                                            <div>
                                                <span>
                                                    <h3><?php echo !empty($totalproducts) ? $totalproducts : '0'; ?></h3>
                                                </span>
                                                <span>
                                                    <h5>(Total Count)</h5>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
@endsection