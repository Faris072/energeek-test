@extends('parts.navbar')

@section('content')
    {{-- content --}}
    <div class="container py-4">
        <div class="row py-5">
            <div class="col-lg-11 mx-auto">
                <div class="data p-4" style="background-color: rgb(226, 226, 226); border-radius:5px;">
                    <table width="100%" border="0">
                        <tr>
                            <td align="center" style="font-size:19px;">Kode Barang</td>
                            <td align="center" style="font-size:19px;">Nama Barang</td>
                            <td align="center" style="font-size:19px;">Total Stok</td>
                            <td align="center" style="font-size:19px;">Stok Minimal</td>
                        </tr>
                        <tr>
                            <td align="center" style="font-size:21px;"><b>BRG-001</b></td>
                            <td align="center" style="font-size:21px;"><b>Komputer</b></td>
                            <td align="center" style="font-size:21px;"><b>10</b></td>
                            <td align="center" style="font-size:21px;"><b>1</b></td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="judul d-flex" style="justify-content:space-between;">
                    <div class="inventory d-flex">
                        <h2><b>History Transaksi</b></h2>
                        <a href="#" class="btn btn-danger pt-2 ml-3 px-3" data-toggle="modal" data-target="#inventoryModal"><h5><i class="fas fa-plus"></i> Tambah data</h5></a>
                        <!-- Modal -->
                        <div class="modal fade" id="inventoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" style="font-size: 18px">
                                        Jenis Transaksi
                                        <br>
                                        <input type="radio" class="" name="jenis" value="menambah" id="menambah">
                                        <label for="menambah">Menambah</label>
                                        <input type="radio" class="ml-5" name="jenis" value="mengurangi" id="mengurangi">
                                        <label for="mengurangi">Mengurangi</label>
                                        <br>
                                        <small style="color:red;" id="tambahKurang"></small>
                                        <br>
                                        <label for="kodeBarang">Jumlah</label>
                                        <input type="number" name="jumlahBarang" id="jumlahBarang" placeholder="Jumlah Barang" class="form-control">
                                        <small style="color:red;" id="msg-jumlahBarang"></small>
                                        <br>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-danger" id="btn-history">Simpan</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="path pt-2">
                        <h4><a href="/dashboard" style="color:black;">Inventory</a> > History</h4>
                    </div>
                </div>
                <br>
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <div class="table-responsive">
                            <div class="atas d-flex pb-3" style="justify-content:space-between;">
                                <div class="showKonten">
                                Showing per page
                                    <select style="border:none; height:25px;" class="ml-1" name="" id="">
                                        <option value="">10</option>
                                        <option value="">20</option>
                                        <option value="">30</option>
                                        <option value="">40</option>
                                        <option value="">50</option>
                                    </select>
                                </div>
                                <div class="search d-flex">
                                    search: <input type="text" class="form-control ml-4" style="font-size:10px;">
                                </div>
                            </div>
                            <table id="example" style="width:100%" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Jenis Transaksi</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <td>1</td>
                                        <td>04-07-2022</td>
                                        <td><span style="color:rgb(70, 70, 255)">Menambah</span></td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- pagination --}}
                            <div class="pagination d-flex" style="width:100%; justify-content:space-between;">
                                <p class="pt-4">Showing 1 to 10 of 50 entries</p>
                                <nav class="pt-3">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <span class="page-link"><</span>
                                        </li>
                                        <li class="page-item"><a class="page-link aktif" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            {{-- endpagination --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
