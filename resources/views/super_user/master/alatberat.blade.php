@extends('super_user.layouts.app')
@section('title')
    Master | Alat Berat
@endsection

@section('css-super_user')
    <!-- DataTables -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> --}}
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/2.3.3/css/dataTables.bootstrap4.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/3.2.4/css/buttons.bootstrap4.css" rel="stylesheet" /> --}}
@endsection

@section('content-super_user')
    <div class="mt-3 container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Data Alat Berat</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-header flex-wrap gap-4">
                        <div class="form-icon right">
                            <input type="text" id="search-input" class="form-control" placeholder="Search..." />
                            <i class="ri-search-2-line search-icon"></i>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" id="exportDropdownButton">
                                    <i class="ri-upload-2-line me-1"></i>Export
                                </button>
                                <div id='exportDropdown'>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item" id="export-excel">
                                            <i class="ri-file-text-line"></i> Export as Excel
                                        </li>
                                        <li class="dropdown-item" id="export-pdf">
                                            <i class="ri-file-pdf-line"></i> Export as PDF
                                        </li>
                                        <li class="dropdown-item" id="download-all">
                                            <i class="ri-download-cloud-2-line"></i> Download All
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addProductModal">
                                <i class="ri-add-fill me-1"></i>Add New
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-box table-responsive">
                            <table id="default_datatable" class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alat Berat</th>
                                        <th>Jenis</th>
                                        <th>Area</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>Excavator</td>
                                        <td>Heavy</td>
                                        <td>Site A</td>
                                        <td>
                                            <span class="badge bg-success">Available</span>
                                        </td>
                                        <td>2024-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>Truck</td>
                                        <td>Ringan</td>
                                        <td>Site B</td>
                                        <td>
                                            <span class="badge bg-success">Available</span>
                                        </td>
                                        <td>2024-04-26</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>Angkot</td>
                                        <td>Ringan</td>
                                        <td>Site C</td>
                                        <td>
                                            <span class="badge bg-success">UnAvailable</span>
                                        </td>
                                        <td>2024-04-27</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>Excavator</td>
                                        <td>Heavy</td>
                                        <td>Site A</td>
                                        <td>
                                            <span class="badge bg-success">Available</span>
                                        </td>
                                        <td>2024-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>Excavator</td>
                                        <td>Heavy</td>
                                        <td>Site A</td>
                                        <td>
                                            <span class="badge bg-success">Available</span>
                                        </td>
                                        <td>2024-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>Excavator</td>
                                        <td>Heavy</td>
                                        <td>Site A</td>
                                        <td>
                                            <span class="badge bg-success">Available</span>
                                        </td>
                                        <td>2024-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7
                                        </td>
                                        <td>Excavator</td>
                                        <td>Heavy</td>
                                        <td>Site A</td>
                                        <td>
                                            <span class="badge bg-success">Available</span>
                                        </td>
                                        <td>2024-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8
                                        </td>
                                        <td>Excavator</td>
                                        <td>Heavy</td>
                                        <td>Site A</td>
                                        <td>
                                            <span class="badge bg-success">Available</span>
                                        </td>
                                        <td>2024-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9
                                        </td>
                                        <td>Excavator</td>
                                        <td>Heavy</td>
                                        <td>Site A</td>
                                        <td>
                                            <span class="badge bg-success">Available</span>
                                        </td>
                                        <td>2024-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10
                                        </td>
                                        <td>Excavator</td>
                                        <td>Heavy</td>
                                        <td>Site A</td>
                                        <td>
                                            <span class="badge bg-success">Available</span>
                                        </td>
                                        <td>2024-04-25</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11
                                        </td>
                                        <td>Excavator</td>
                                        <td>Heavy</td>
                                        <td>Site A</td>
                                        <td>
                                            <span class="badge bg-success">Available</span>
                                        </td>
                                        <td>2024-04-25</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end:: Basic Datatable -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        The footer of the card
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection

@section('js-super_user')
    <!-- SheetJS & jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    {{-- Search Input --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search-input');
            const table = document.getElementById('default_datatable').getElementsByTagName('tbody')[0];
            searchInput.addEventListener('keyup', function() {
                const filter = searchInput.value.toLowerCase();
                const rows = table.getElementsByTagName('tr');
                for (let i = 0; i < rows.length; i++) {
                    const cells = rows[i].getElementsByTagName('td');
                    let match = false;
                    for (let j = 0; j < cells.length; j++) {
                        if (cells[j]) {
                            const cellText = cells[j].textContent || cells[j].innerText;
                            if (cellText.toLowerCase().indexOf(filter) > -1) {
                                match = true;
                                break;
                            }
                        }
                    }
                    rows[i].style.display = match ? '' : 'none';
                }
            });
        });
    </script>

    {{-- Data Table Export Logic --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let table = $('#default_datatable').DataTable({
                dom: 't', // hanya tabel (tanpa search & paging bawaan)
                buttons: [{
                        extend: 'excelHtml5',
                        title: 'Data Alat Berat',
                        filename: 'alat_berat_excel'
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Data Alat Berat',
                        filename: 'alat_berat_pdf',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        exportOptions: {
                            columns: ':visible' // hanya export kolom yang terlihat
                        },
                        customize: function(doc) {
                            // Atur margin
                            doc.pageMargins = [40, 60, 40, 40];

                            // Title di tengah
                            doc.content[0].text = 'Data Alat Berat';
                            doc.content[0].alignment = 'center';
                            doc.content[0].fontSize = 14;
                            doc.content[0].bold = true;
                            doc.content[0].margin = [0, 0, 0, 20];

                            // Ambil table body
                            var tableBody = doc.content[1].table.body;

                            // Style header
                            var header = tableBody[0];
                            header.forEach(function(h) {
                                h.fillColor = '#0d6efd'; // biru bootstrap
                                h.color = 'white';
                                h.bold = true;
                                h.alignment = 'center';
                            });

                            // Style isi tabel
                            for (var i = 1; i < tableBody.length; i++) {
                                for (var j = 0; j < tableBody[i].length; j++) {
                                    tableBody[i][j].alignment = 'center'; // rata tengah
                                    tableBody[i][j].fontSize = 10;
                                }
                            }

                            // Biar tabel full width
                            doc.content[1].table.widths = Array(tableBody[0].length).fill('*');
                        }
                    }
                ]
            });

            // Search manual
            document.getElementById('search-input').addEventListener('keyup', function() {
                table.search(this.value).draw();
            });

            // Export manual via dropdown
            document.getElementById('export-excel').addEventListener('click', () => {
                table.button('.buttons-excel').trigger();
            });

            document.getElementById('export-pdf').addEventListener('click', () => {
                table.button('.buttons-pdf').trigger();
            });

            document.getElementById('download-all').addEventListener('click', () => {
                table.button('.buttons-excel').trigger();
                setTimeout(() => {
                    table.button('.buttons-pdf').trigger();
                }, 1500); // jeda agar tidak di-zip jadi 1 file
            });
        });
    </script>
@endsection
