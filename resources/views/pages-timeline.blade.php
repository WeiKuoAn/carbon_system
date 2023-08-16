@extends('layouts.master')
@section('title')
    Timeline
@endsection
@section('page-title')
    Timeline
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="timeline">
                                    <div class="timeline-container">
                                        <div class="timeline-end">
                                            <p>Start</p>
                                        </div>
                                        <div class="timeline-continue">
                                            <div class="row timeline-right">
                                                <div class="col-md-6">
                                                    <div class="timeline-icon">
                                                        <i class="bx bx-briefcase-alt-2 text-primary h2 mb-0"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="timeline-box">
                                                        <div class="timeline-date bg-primary text-center rounded">
                                                            <h3 class="text-white mb-0 font-size-20">25</h3>
                                                            <p class="mb-0 text-white-50">June</p>
                                                        </div>
                                                        <div class="event-content">
                                                            <div class="timeline-text">
                                                                <h3 class="font-size-17">Timeline Event One</h3>
                                                                <p class="mb-0 mt-2 pt-1 text-muted">Perspitis unde omnis it
                                                                    voluptatem
                                                                    accusantium doloremque laudantium, totam rem aperiam,
                                                                    eaque ipsa
                                                                    quae ab illo inventore veritatis et quasi
                                                                    architecto beatae explicabo.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row timeline-left">
                                                <div class="col-md-6 d-md-none d-block">
                                                    <div class="timeline-icon">
                                                        <i class="bx bx-user-pin text-primary h2 mb-0"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="timeline-box">
                                                        <div class="timeline-date bg-primary text-center rounded">
                                                            <h3 class="text-white mb-0 font-size-20">25</h3>
                                                            <p class="mb-0 text-white-50">June</p>
                                                        </div>
                                                        <div class="event-content">
                                                            <div class="timeline-text">
                                                                <h3 class="font-size-17">Timeline Event two</h3>
                                                                <p class="mb-0 mt-2 pt-1 text-muted">At vero eos dignissimos
                                                                    ducimus quos
                                                                    dolores chooses to enjoy pleasure that has no annoying.
                                                                </p>

                                                                <div
                                                                    class="d-flex flex-wrap align-items-start event-img mt-3 gap-2">
                                                                    <img src="{{ URL::asset('build/images/small/img-2.jpg') }}" alt=""
                                                                        class="img-fluid rounded" width="60">
                                                                    <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt=""
                                                                        class="img-fluid rounded" width="60">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-md-block d-none">
                                                    <div class="timeline-icon">
                                                        <i class="bx bx-user-pin text-primary h2 mb-0"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row timeline-right">
                                                <div class="col-md-6">
                                                    <div class="timeline-icon">
                                                        <i class="bx bx-bar-chart-square text-primary h2 mb-0"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="timeline-box">
                                                        <div class="timeline-date bg-primary text-center rounded">
                                                            <h3 class="text-white mb-0 font-size-20">28</h3>
                                                            <p class="mb-0 text-white-50">Des</p>
                                                        </div>
                                                        <div class="event-content">
                                                            <div class="timeline-text">
                                                                <h3 class="font-size-17">Timeline Event Three</h3>
                                                                <p class="mb-0 mt-2 pt-1 text-muted">Vivamus ultrices massa
                                                                    turna interdum
                                                                    eu. Pellentesque habitant morbi tristique eget justo sit
                                                                    amet est
                                                                    varius mollis et quis nisi. Suspendisse potenti.
                                                                    senectus
                                                                    et netus et malesuada fames ac turpis egestas.</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row timeline-left">
                                                <div class="col-md-6 d-md-none d-block">
                                                    <div class="timeline-icon">
                                                        <i class="bx bx-camera text-primary h2 mb-0"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="timeline-box">
                                                        <div class="timeline-date bg-primary text-center rounded">
                                                            <h3 class="text-white mb-0 font-size-20">25</h3>
                                                            <p class="mb-0 text-white-50">June</p>
                                                        </div>
                                                        <div class="event-content">
                                                            <div class="timeline-text">
                                                                <h3 class="font-size-17">Timeline Event Four</h3>
                                                                <p class="mb-0 mt-2 pt-1 text-muted">Printing and
                                                                    typesetting industry. been
                                                                    the industry'scrambled
                                                                    it make a type specimen book.</p>

                                                                <button type="button"
                                                                    class="btn btn-primary btn-rounded waves-effect waves-light mt-4">See
                                                                    more detail
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-md-block d-none">
                                                    <div class="timeline-icon">
                                                        <i class="bx bx-camera text-primary h2 mb-0"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row timeline-right">
                                                <div class="col-md-6">
                                                    <div class="timeline-icon">
                                                        <i class="bx bx-pie-chart-alt text-primary h2 mb-0"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="timeline-box">
                                                        <div class="timeline-date bg-primary text-center rounded">
                                                            <h3 class="text-white mb-0 font-size-20">23</h3>
                                                            <p class="mb-0 text-white-50">July</p>
                                                        </div>
                                                        <div class="event-content">
                                                            <div class="timeline-text">
                                                                <h3 class="font-size-17">Timeline Event Five</h3>

                                                                <p class="mb-0 mt-2 pt-1 text-muted">Excepturi, obcaecati,
                                                                    quisquam id
                                                                    molestias eaque asperiores voluptatibus cupiditate error
                                                                    assumenda delectus odit
                                                                    similique earum voluptatem
                                                                    Odit, itaque, deserunt corporis vero ipsum nisi repellat
                                                                    ... <a href="#">Read more</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row timeline-left">
                                                <div class="col-md-6 d-md-none d-block">
                                                    <div class="timeline-icon">
                                                        <i class="bx bx-home-alt text-primary h2 mb-0"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="timeline-box">
                                                        <div class="timeline-date bg-primary text-center rounded">
                                                            <h3 class="text-white mb-0 font-size-20">25</h3>
                                                            <p class="mb-0 text-white-50">June</p>
                                                        </div>
                                                        <div class="event-content">
                                                            <div class="timeline-text">
                                                                <h3 class="font-size-17">Timeline Event End</h3>
                                                                <p class="mb-0 mt-2 pt-1 text-muted">Suspendisse tempor
                                                                    porttitor elit non
                                                                    maximus. Sed suscipit, purus in convallis condimentum,
                                                                    risus ex
                                                                    pellentesque sapien, vel tempor arcu dolor ut est. Nam
                                                                    ac felis id
                                                                    mauris fermentum
                                                                    nisl pharetra auctor.</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-md-block d-none">
                                                    <div class="timeline-icon">
                                                        <i class="bx bx-home-alt text-primary h2 mb-0"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-start">
                                            <p>End</p>
                                        </div>
                                        <div class="timeline-launch">
                                            <div class="timeline-box">
                                                <div class="timeline-text">
                                                    <h3 class="font-size-17">Launched our company on 21 June 2021</h3>
                                                    <p class="text-muted mb-0">Pellentesque sapien ut est.</p>
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
        </div>
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
