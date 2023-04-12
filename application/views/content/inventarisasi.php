<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    <?= $pagetitle  ?>
                </div>
                <h2 class="page-title">
                    <?= $pagesubtitle  ?>
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-add">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        <!-- <img src="<? //base_url('assets/svg/') 
                                        ?>plus.svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" /> -->
                        Tambah Inventaris
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-add" aria-label="Tambah Inventarisasi">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        <!-- <img src="<? // base_url('assets/svg/') 
                                        ?>plus.svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" /> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data <?= $pagesubtitle  ?></h3>
                    </div>

                    <div class="table-responsive">
                        <table id="datatable" class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="w-1"><button class="table-sort" data-sort="sort-name">No.</button></th>
                                    <th><button class="table-sort" data-sort="sort-name">Nomor Sertifikat</button></th>
                                    <th><button class="table-sort" data-sort="sort-name">Luas</button></th>
                                    <th><button class="table-sort" data-sort="sort-name">Lokasi</button></th>
                                    <th><button class="table-sort" data-sort="sort-name">Peruntukan</button></th>
                                    <th><button class="table-sort" data-sort="sort-name">Timestamp</button></th>
                                    <th>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                        </svg>
                                        <!-- <img src="<? // base_url('assets/svg/') 
                                                        ?>settings.svg" class="icon" width="20" height="20" /> -->
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="show_inv">
                                <?php
                                $no = 1;
                                foreach ($get_data as $sub) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $sub->nosertif ?></td>
                                        <td><?= $sub->luas ?></td>
                                        <td><?= $sub->nama_lokasi ?></td>
                                        <td><?= $sub->lembaga_unit ?></td>
                                        <td><?= $sub->timestamp ?></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-primary editInvent" data-id="<?= $sub->idinvent ?>" data-sertif="<?= $sub->nosertif ?>" data-luas="<?= $sub->luas ?>" data-lokasi="<?= $sub->nama_lokasi ?>" data-peruntukan="<?= $sub->lembaga_unit ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </a>
                                            &nbsp;
                                            &nbsp;
                                            <a href="javascript:void(0);" class="btn btn-danger deleteInvent" data-id="<?= $sub->idinvent ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7h16" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    <path d="M10 12l4 4m0 -4l-4 4" />
                                                </svg></a>
                                        </td>
                                    </tr>
                                <?php }; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add inventaris -->
<div class="modal modal-blur fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Inventaris</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="simpan">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nomor Sertifikat</label>
                        <input required type="text" class="form-control" id="nosertif" name="nosertif" placeholder="Nomor Sertifikat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Luas</label>
                        <input required type="number" class="form-control" id="luas" name="luas" placeholder="Luas">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Peruntukan</label>
                                <select required class="form-select" id="peruntukan" name="peruntukan">
                                    <option selected="" disabled="" value="">Pilih satu...</option>
                                    <?php foreach ($peruntukan->result() as $row1) : ?>
                                        <option value="<?= $row1->idperuntukan; ?>"><?= $row1->lembaga_unit; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <select required class="form-select" id="lokasi" name="lokasi">
                                    <option selected="" disabled="" value="">Pilih satu...</option>
                                    <?php foreach ($lokasi->result() as $row2) : ?>
                                        <option value="<?= $row2->idlokasi; ?>"><?= $row2->nama_lokasi; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto">
                        <!-- <img src="<? // base_url('assets/svg/') 
                                        ?>plus.svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" /> -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Tambahkan Inventaris
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Inventaris -->

<!-- Modal Edit inventaris -->
<div class="modal modal-blur fade" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Inventaris</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('ubah-inventaris') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nomor Sertifikat</label>
                        <input required type="text" class="form-control" id="edit-nosertif" name="nosertif" placeholder="Nomor Sertifikat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Luas</label>
                        <input required type="number" class="form-control" id="edit-luas" name="luas" placeholder="Luas">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Peruntukan</label>
                                <select required class="form-select" id="edit-peruntukan" name="peruntukan">
                                    <option selected="" disabled="" value="">Pilih satu...</option>
                                    <?php foreach ($peruntukan->result() as $row1) : ?>
                                        <option value="<?= $row1->idperuntukan; ?>"><?= $row1->lembaga_unit; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <select required class="form-select" id="edit-lokasi" name="lokasi">
                                    <option selected="" disabled="" value="">Pilih satu...</option>
                                    <?php foreach ($lokasi->result() as $row2) : ?>
                                        <option value="<?= $row2->idlokasi; ?>"><?= $row2->nama_lokasi; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="idinvent" id="edit-idinvent" class="form-control">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-primary ms-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M14 4l0 4l-6 0l0 -4" />
                        </svg>
                        <!-- <img src="<? // base_url('assets/svg/') 
                                        ?>device-floppy.svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" /> -->
                        Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Inventaris -->

<!-- Delete Inventaris -->
<div class="modal modal-blur fade" id="confirm-delete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <form>
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">Hapus data inventaris?</div>
                    <div>Data yang dihapus tidak bisa dikembalikan.</div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="idinvent" id="idinvent" class="form-control">
                    <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Batal</button>
                    <button type="button" id="btn-delete" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Delete Inventaris -->


<script src="<?= base_url('assets/plugins/') ?>datatable/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('assets/plugins/') ?>datatable/datatables.min.js"></script>
<script src="<?= base_url('assets/plugins/') ?>datatable/DataTables-1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/plugins/') ?>sweetalert/sweetalert2.all.min.js"></script>

<?= $this->session->flashdata('swalnotification'); ?>

<script>
    $(document).ready(function() {
        // show_inventaris();
        // Datatable
        $('#datatable').DataTable({
            language: {
                search: "",
                searchPlaceholder: "Search..."
            },
            dom: "<'row d-flex justify-content-center'<'col-md-7'l><'col-md-2 mt-3'f><'col-md-2'B>>" +
                "<'row d-flex justify-content-center'<'col-md-11'tr>>" +
                "<'row d-flex justify-content-center'<'col-md-8 mt-4'i><'col-md-3 mt-4'p>>",
            buttons: {
                buttons: [{
                        extend: 'copyHtml5',
                        className: 'btn btn-primary mb-2 mt-3',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        className: 'btn btn-primary mb-2 mt-3',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csvHtml5',
                        className: 'btn btn-primary mb-2 mt-3',
                        exportOptions: {
                            columns: ':visible'
                        }
                    }
                ],
            }
        });

        // Tampilkan Inventaris
        function show_inventaris() {
            $.ajax({
                type: 'ajax',
                url: '<?= base_url('data-inventaris') ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var no = 1;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + no++ + '</td>' +
                            '<td>' + data[i].nosertif + '</td>' +
                            '<td>' + data[i].luas + ' m' + '</td>' +
                            '<td>' + '<a href="<?= base_url('inventarisasi?lokasi=') ?>' + data[i].nama_lokasi + '">' + data[i].nama_lokasi + '</a></td>' +
                            '<td>' + data[i].lembaga_unit + '</td>' +
                            '<td>' + data[i].timestamp + '</td>' +
                            '<td>' + '<a href="javascript:void(0);" class="btn btn-primary editInvent_" data-id="' + data[i].idinvent + '" data-sertif="' + data[i].nosertif + '" data-luas="' + data[i].luas + '" data-lokasi="' + data[i].nama_lokasi + '" data-peruntukan="' + data[i].lembaga_unit + '"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg></a>' + '   ' + '<a href="javascript:void(0);" class="btn btn-danger deleteInvent_" data-id="' + data[i].idinvent + '"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg></a>' + '</td>' +
                            '</tr>';
                    }
                    $('#show_inv').html(html);
                }

            });
        }

        // Tambah Inventaris
        $('#simpan').submit(function(e) {
            var nosertif = $('#nosertif').val();
            var luas = $('#luas').val();
            var peruntukan = $('#peruntukan').val();
            var lokasi = $('#lokasi').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('tambah-inventaris') ?>",
                dataType: "JSON",
                data: {
                    nosertif: nosertif,
                    luas: luas,
                    peruntukan: peruntukan,
                    lokasi: lokasi
                },
                success: function(data) {
                    $('[name="nosertif"]').val("");
                    $('[name="luas"]').val("");
                    $('[name="peruntukan"]').val("");
                    $('[name="lokasi"]').val("");
                    show_inventaris();
                    Swal.fire({
                        icon: 'success',
                        title: 'Data berhasil ditambahkan',
                        showConfirmButton: false
                    })
                    // $('#modal-add').modal('hide');
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }
            });
            return false;
        });

        // Menampilkan Edit Inventaris
        $('#show_inv').on('click', '.editInvent', function() {
            var idinvent = $(this).data('id');
            var nosertif = $(this).data('sertif');
            var luas = $(this).data('luas');
            var lokasi = $(this).data('lokasi');
            var peruntukan = $(this).data('peruntukan');
            $('#modal-edit').modal('show');
            $('[name="idinvent"]').val(idinvent);
            $('[name="nosertif"]').val(nosertif);
            $('[name="luas"]').val(luas);
            $('[name="lokasi"]').val(lokasi);
            $('[name="peruntukan"]').val(peruntukan);
        });

        // Hapus Inventaris
        //Konfirmasi
        $('#show_inv').on('click', '.deleteInvent', function() {
            var idinvent = $(this).data('id');
            $('#confirm-delete').modal('show');
            $('[name="idinvent"]').val(idinvent);
        });

        //Hapus
        $('#btn-delete').on('click', function() {
            var idinvent = $('#idinvent').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('hapus-inventaris') ?>",
                dataType: "JSON",
                data: {
                    idinvent: idinvent
                },
                success: function(data) {
                    $('[name="idinvent"]').val("");
                    $('#confirm-delete').modal('hide');
                    show_inventaris();
                    Swal.fire({
                        icon: 'success',
                        title: 'Data berhasil dihapus.',
                        showConfirmButton: false
                    })
                    // $('#modal-add').modal('hide');
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                }
            });
            return false;
        });
    });
</script>