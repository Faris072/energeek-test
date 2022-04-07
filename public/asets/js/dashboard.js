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

// function buat(){
//     $('#inventoryModal').modal('toggle');
//     swal("Berhasil!", "Data berhasil dibuat!", "success");
// }

// function simpan(){
//     $('#inventoryModal').modal('toggle');
//     swal("Berhasil!", "Data berhasil disimpan!", "success");
// }

$('#btn-tambah').on('click', function(e) {
    e.preventDefault();
    let kode = $('#kodeBarang').val();
    let nama = $('#namaBarang').val();
    let stokMin = $('#stokMin').val();
    let stokAwal = $('#stokAwal').val();
    let arayKode = kode.slice();

    let bol = 3;

    let huruf = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    let angka = ['0','1','2','3','4','5','6','7','8','9'];

    if(kode.length != 7){
        $('#msg-kodeBarang').text('Kode Barang harus 7 karakter!');
    }
    else if(nama.length < 1){
        $('#msg-namaBarang').text('Tidak boleh kosong!');
    }
    else if(stokMin < 10){
        $('#msg-stokMin').text('Stok minimal harus lebih dari 10');
    }
    else if(stokAwal >= 50){
        $('#msg-stokAwal').text('Stok awal harus lebih dari kurang dari 51');
    }
    else{
        for(let i = 0; i < 7; i++){
            if(i <= 2){
                for(let j = 0; j < huruf.length; j++){
                    if(arayKode[i] == huruf[j]){
                        bol = 3;
                        break;
                    }
                    else{
                        bol = 0;
                    }
                }
                if(bol == 0){
                    break;
                }
            }
            else if(i == 3){
                if(arayKode[i] !== '-'){
                    bol = 1;
                    break;
                }
            }
            else{
                for(let j = 0; j < angka.length; j++){
                    if(arayKode[i] == angka[j]){
                        bol = 3;
                        break;
                    }
                    else{
                        bol = 2;
                    }
                }
                if(bol == 2){
                    break;
                }
            }
        }
        if(bol > 2){
            $('#inventoryModal').modal('toggle');
            swal("Berhasil!", "Data berhasil dibuat!", "success");
        }
        else{
            $('#msg-kodeBarang').text('Format kode harus karakter 1-3 huruf kapital, karakter 4 '-', karakter 5-7 angka. Contoh: BRG-001');
        }
    }

});
