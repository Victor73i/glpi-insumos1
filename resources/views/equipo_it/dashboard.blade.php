@extends('layouts.master')
@section('title') @lang('translation.projects') @endsection
@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboards @endslot
        @slot('title') Projects @endslot
    @endcomponent
    <div class="row project-wrapper">
        <div class="col-xxl-8">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span
                                        class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                        Computadoras</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0">{{ $conteoComputadoras }} Equipos</h4>

                                    </div>
                                    <p class="text-muted text-truncate mb-0">Equipos en el GLPI</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span
                                        class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                        <i data-feather="award" class="text-warning"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted mb-3">Impresoras</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0">{{ $conteoImpresoras }} Equipos</h4>

                                    </div>
                                    <p class="text-muted mb-0">Equipos en el GLPI</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                        <i data-feather="clock" class="text-info"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                        PDU</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0">{{ $conteoPdus }} Equipos</h4>

                                    </div>
                                    <p class="text-muted text-truncate mb-0">Equipos en el GLPI</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Estatus Equipo IT</h4>

                        </div><!-- end card header -->

                        <div class="card-body">
                            <div style="display: flex; justify-content: center; align-items: center; height: 400px;">
                                <canvas id="projects-status-chart" width="400" height="400"></canvas>
                            </div>


                            <div class="mt-3">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <div>
                                        <p class="text-muted mb-0">Total Equipos IT</p>
                                        <h2 class="me-3 ff-secondary mb-0" id="totalEquiposIT">0</h2> <!-- Inicializar con 0 o con el valor del servidor -->


                                    </div>

                                </div>

                                <div
                                    class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                    <h4 class="fs-4 flex-grow-1 mb-0">
                                        <p class="fw-medium mb-0">Computadoras</p>
                                        <div>
                                            <span class="text-muted pe-5">{{ $conteoComputadoras }} Equipos</span>
                                        </div>
                                    </h4>
                                </div><!-- end -->
                                <div
                                    class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                    <h4 class="fs-4 flex-grow-1 mb-0">
                                        <p class="fw-medium mb-0">IMPRESORAS</p>
                                        <div>
                                            <span class="text-muted pe-5">{{ $conteoImpresoras }} Equipos</span>
                                        </div>
                                    </h4>
                                </div><!-- end -->
                                <div
                                    class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                    <h4 class="fs-4 flex-grow-1 mb-0">
                                        <p class="fw-medium mb-0">PDUS</p>
                                        <div>
                                            <span class="text-muted pe-5">{{ $conteoPdus }} Equipos</span>
                                        </div>
                                    </h4>
                                </div><!-- end -->

                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end col -->

        <div class="col-xxl-4">
            <div class="card">
                <div class="card-header border-0">
                    <h4 class="card-title mb-0">Equipo IT</h4>
                </div><!-- end cardheader -->
                <div class="card-body pt-0">
                    <div class="upcoming-scheduled">
                        <input type="text" class="form-control" data-provider="flatpickr"
                               data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true">
                    </div>

                    <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Eventos:</h6>
                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                        <div class="flex-shrink-0 avatar-sm">
                            <span
                                class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                09
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Development planning</h6>
                            <p class="text-muted mb-0">iTest Factory </p>
                        </div>
                        <div class="flex-shrink-0">
                            <p class="text-muted mb-0">9:20 <span class="text-uppercase">am</span></p>
                        </div>
                    </div><!-- end -->

                    <div class="mt-3 text-center">
                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">View
                            all Events</a>
                    </div>

                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
    <div class="row">
        <div class="col-xl-7">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4 class="card-title flex-grow-1 mb-0">EQUIPO IT</h4>

                </div><!-- end cardheader -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap table-centered align-middle">
                            <thead class="bg-light text-muted">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Type</th>
                                <th scope="col">Equipo</th>

                            </tr><!-- end tr -->
                            </thead><!-- thead -->

                            <tbody>
                            <tr>
                                <td class="fw-medium">Brand Logo Design</td>
                                <td>
                                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                         class="avatar-xxs rounded-circle me-1" alt="">
                                    <a href="javascript: void(0);" class="text-reset">Donald
                                        Risher</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-1 text-muted fs-13">53%</div>
                                        <div class="progress progress-sm  flex-grow-1"
                                             style="width: 68%;">
                                            <div class="progress-bar bg-primary rounded"
                                                 role="progressbar" style="width: 53%"
                                                 aria-valuenow="53" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </td>

                            </tr><!-- end tr -->

                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>

                    <div class="align-items-center mt-xl-3 mt-4 justify-content-between d-flex">
                        <div class="flex-shrink-0">
                            <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span
                                    class="fw-semibold">25</span> Results
                            </div>
                        </div>
                        <ul class="pagination pagination-separated pagination-sm mb-0">
                            <li class="page-item disabled">
                                <a href="#" class="page-link">←</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">→</a>
                            </li>
                        </ul>
                    </div>

                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->


    </div><!-- end row -->



    <div class="col-xxl-4 col-lg-6">

    </div><!-- end col -->
    </div><!-- end row -->
@endsection
@section('script')

    <script>
        // Usando Fetch API para obtener los datos
        fetch('/equipo_its/status')
            .then(response => response.json())
            .then(data => {
                // Selecciona el canvas por su nuevo id
                const ctx = document.getElementById('projects-status-chart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'doughnut', // o 'pie' si prefieres una gráfica de pastel
                    data: {
                        labels: ['Computadoras', 'Impresoras', 'PDUs'],
                        datasets: [{
                            label: 'Estatus Equipo IT',
                            data: [data.conteoComputadoras, data.conteoImpresoras, data.conteoPdus],
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        // Opciones de personalización para Chart.js
                    }
                });

                // Actualizar total de equipos IT
                document.getElementById('totalEquiposIT').textContent = data.conteoComputadoras + data.conteoImpresoras + data.conteoPdus;
            })
            .catch(error => console.error('Error al obtener el estado del equipo IT:', error));
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/dashboard-projects.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
