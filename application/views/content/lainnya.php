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
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Penambahan <?= $pagesubtitle  ?></h3>
                    </div>
                    <div class="card">
                        <form id="simpan_unit">
                            <div class="card-body">
                                <h3 class="card-title">Lembaga / Unit</h3>
                                <p class="card-subtitle">Data ini akan ditampilkan pada pilihan saat memilih peruntukan pada inventarisasi.</p>
                                <div class="input-icon">
                                    <input required type="text" value="" class="form-control" placeholder="" name="lembaga_unit" id="lembaga_unit">
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">
                                            Tambahkan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <form id="simpan_lokasi">
                            <div class="card-body">
                                <h3 class="card-title">Lokasi</h3>
                                <p class="card-subtitle">Data ini akan ditampilkan pada pilihan saat memilih lokasi pada inventarisasi.</p>
                                <div class="input-icon">
                                    <input required type="text" value="" class="form-control" placeholder="" name="nama_lokasi" id="nama_lokasi">
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">
                                            Tambahkan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Lembaga/ Unit</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th class="w-1"><button class="table-sort" data-sort="sort-name">No.</button></th>
                                    <th><button class="table-sort" data-sort="sort-name">Lembaga / Unit</button></th>
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
                            <tbody id="show_lembaga">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Lokasi</h3>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table text-nowrap datatable">
                            <thead>
                                <tr>
                                    <th class="w-1"><button class="table-sort" data-sort="sort-name">No.</button></th>
                                    <th><button class="table-sort" data-sort="sort-name">Lokasi</button></th>
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
                            <tbody id="show_lokasi">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Lembaga -->
<div class="modal modal-blur fade" id="confirm-delete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <form>
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">Hapus data Lembaga/ Unit?</div>
                    <div>Data yang dihapus tidak bisa dikembalikan.</div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="idperuntukan" id="idperuntukan" class="form-control">
                    <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Batal</button>
                    <button type="button" id="btn-delete" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Delete Lembaga -->

<!-- Delete Lokasi -->
<div class="modal modal-blur fade" id="confirm-deletelok" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <form>
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">Hapus data Lokasi?</div>
                    <div>Data yang dihapus tidak bisa dikembalikan.</div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="idlokasi" id="idlokasi" class="form-control">
                    <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Batal</button>
                    <button type="button" id="btn-deletelok" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Delete Lokasi -->

<script src="<?= base_url('assets/plugins/') ?>datatable/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('assets/plugins/') ?>datatable/datatables.min.js"></script>
<script src="<?= base_url('assets/plugins/') ?>datatable/DataTables-1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/plugins/') ?>sweetalert/sweetalert2.all.min.js"></script>
<?= $this->session->flashdata('swalnotification'); ?>

<script>
    $(document).ready(function() {
        show_lembaga();
        show_lokasi();
        // Datatable
        $('.datatable').DataTable({
            language: {
                search: "",
                searchPlaceholder: "Search..."
            },
            dom: "<'row d-flex justify-content-center'<'col-md-4'l><'col-md-7 mt-3'f>>" +
                "<'row d-flex justify-content-center'<'col-md-11'tr>>" +
                "<'row d-flex justify-content-center'<'col-md-1 mt-4'><'col-md-5 mt-4'p>>",
        });

        // Tampilkan Peruntukan
        function show_lembaga() {
            $.ajax({
                type: 'ajax',
                url: '<?= base_url('data-lembaga') ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var no = 1;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + no++ + '</td>' +
                            '<td>' + data[i].lembaga_unit + '</td>' +
                            '<td>' +
                            ((data[i].peruntukancount == 0) ?
                                '<a href="javascript:void(0);" class="btn btn-danger deleteLembaga" data-id="' + data[i].idperuntukan + '"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg></a>' : '<a href="javascript:void(0);" class="btn btn-warning blockDeleteLembaga"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg></a>') +
                            '</td>' +
                            '</tr>'
                    }
                    $('#show_lembaga').html(html);
                }
            });
        }

        // Tampilkan Lokasi
        function show_lokasi() {
            $.ajax({
                type: 'ajax',
                url: '<?= base_url('data-lokasi') ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var no = 1;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + no++ + '</td>' +
                            '<td>' + data[i].nama_lokasi + '</td>' +
                            '<td>' +
                            ((data[i].lokasicount == 0) ?
                                '<a href="javascript:void(0);" class="btn btn-danger deleteLokasi" data-id="' + data[i].idlokasi + '"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg></a>' : '<a href="javascript:void(0);" class="btn btn-warning blockDeleteLokasi"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg></a>') +
                            '</td>' +
                            '</tr>'
                    }
                    $('#show_lokasi').html(html);
                }
            });
        }

        // Tambah Peruntukan
        $('#simpan_unit').submit(function(e) {
            var lembaga_unit = $('#lembaga_unit').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('tambah-lembaga') ?>",
                dataType: "JSON",
                data: {
                    lembaga_unit: lembaga_unit,
                },
                success: function(data) {
                    $('[name="lembaga_unit"]').val("");
                    show_lembaga();
                    Swal.fire({
                        icon: 'success',
                        title: 'Data lembaga berhasil ditambahkan',
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

        $('#simpan_lokasi').submit(function(e) {
            var nama_lokasi = $('#nama_lokasi').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('tambah-lokasi') ?>",
                dataType: "JSON",
                data: {
                    nama_lokasi: nama_lokasi,
                },
                success: function(data) {
                    $('[name="nama_lokasi"]').val("");
                    show_lembaga();
                    Swal.fire({
                        icon: 'success',
                        title: 'Data lokasi berhasil ditambahkan',
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

        // Hapus Peruntukan
        // Block Delete
        $('#show_lembaga').on('click', '.blockDeleteLembaga', function() {
            Swal.fire({
                icon: 'error',
                title: 'Gagal Menghapus',
                text: 'Data tidak dapat dihapus karena telah digunakan di inventarisasi.',
                showConfirmButton: false
            })
        });

        // Block Delete
        $('#show_lokasi').on('click', '.blockDeleteLokasi', function() {
            Swal.fire({
                icon: 'error',
                title: 'Gagal Menghapus',
                text: 'Data tidak dapat dihapus karena telah digunakan di inventarisasi.',
                showConfirmButton: false
            })
        });

        //Konfirmasi
        $('#show_lembaga').on('click', '.deleteLembaga', function() {
            var idperuntukan = $(this).data('id');
            $('#confirm-delete').modal('show');
            $('[name="idperuntukan"]').val(idperuntukan);
        });

        $('#show_lokasi').on('click', '.deleteLokasi', function() {
            var idlokasi = $(this).data('id');
            $('#confirm-deletelok').modal('show');
            $('[name="idlokasi"]').val(idlokasi);
        });

        //Hapus
        $('#btn-delete').on('click', function() {
            var idperuntukan = $('#idperuntukan').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('hapus-lembaga') ?>",
                dataType: "JSON",
                data: {
                    idperuntukan: idperuntukan
                },
                success: function(data) {
                    $('[name="idperuntukan"]').val("");
                    $('#confirm-delete').modal('hide');
                    show_lembaga();
                    Swal.fire({
                        icon: 'success',
                        title: 'Data lembaga berhasil dihapus.',
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

        $('#btn-deletelok').on('click', function() {
            var idlokasi = $('#idlokasi').val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('hapus-lokasi') ?>",
                dataType: "JSON",
                data: {
                    idlokasi: idlokasi
                },
                success: function(data) {
                    $('[name="idlokasi"]').val("");
                    $('#confirm-deletelok').modal('hide');
                    show_lokasi();
                    Swal.fire({
                        icon: 'success',
                        title: 'Data lokasi berhasil dihapus.',
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