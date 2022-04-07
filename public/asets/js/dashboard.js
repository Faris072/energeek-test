$(function () {
    $(document).ready(function () {
        $('#example').DataTable();
    });
});

function hapus() {
    swal({
            title: "Apakah anda yakin ingin menghapus data ini?",
            text: "",
            icon: "warning",
            buttons: ['Batal','Ya hapus', ],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Data berhasil dihapus!", {
                    icon: "success",
                });
            } else {
                swal("Data batal dihapus!");
            }
        });
}

function buat(){
    $('#inventoryModal').modal('toggle');
    swal("Berhasil!", "Data berhasil dibuat!", "success");
}

function simpan(){
    $('#inventoryModal').modal('toggle');
    swal("Berhasil!", "Data berhasil disimpan!", "success");
}
