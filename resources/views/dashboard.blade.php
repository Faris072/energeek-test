@extends('parts.navbar')

@section('content')
    {{-- content --}}
    <div class="container py-4">
        <div class="row py-5">
            <div class="col-lg-11 mx-auto">
                <div class="inventory d-flex">
                    <h2><b>Inventory</b></h2>
                    <a href="#" class="btn btn-danger pt-2 ml-3 px-3" data-toggle="modal" data-target="#inventoryModal"><h5><i class="fas fa-plus"></i> Tambah data</h5></a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="inventoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="" style="font-size: 18px" id="tambahBarang">
                                <label for="kodeBarang"><b>Kode Barang</b></label>
                                <input type="text" name="kodeBarang" id="kodeBarang" placeholder="Kode Barang" class="form-control">
                                <small style="color:red;" id="msg-kodeBarang"></small>
                                <br>
                                <label for="namaBarang"><b>Nama Barang</b></label>
                                <input type="text" name="namaBarang" id="namaBarang" placeholder="Nama Barang" class="form-control">
                                <small style="color:red;" id="msg-namaBarang"></small>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="stokMin"><b>Stok Minimal</b></label>
                                        <input type="number" name="stokMin" id="stokMin" placeholder="Stok Minimal" class="form-control">
                                        <small style="color:red;" id="msg-stokMin"></small>
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="stokAwal"><b>Stok Awal</b></label>
                                        <input type="number" name="stokAwal" id="stokAwal" placeholder="Stok Awal" class="form-control">
                                        <small style="color:red;" id="msg-stokAwal"></small>
                                        <br>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-danger" id="btn-tambah">Simpan</button>
                        </div>
                    </div>
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
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Minimal Stok</th>
                                        <th>Stok</th>
                                        <th style="text-align:center">Status Stok</th>
                                        <th style="text-align:center" colspan="3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <td>1</td>
                                        <td>BRG-001</td>
                                        <td>Komputer</td>
                                        <td>1</td>
                                        <td>10</td>
                                        <td align="center"><span class="p-1 bg-primary" style="color:white; border-radius:5px;">Aman</span></td>
                                        <td align="center" style="border:none;"><a href="#"><i class="fas fa-edit" style="color:grey;"></i></a></td>
                                        <td align="center" style="border:none;"><a href="/history"><i class="fas fa-history" style="color:grey;"></i></a></td>
                                        <td align="center" style="border:none;"><a href="#" onclick="hapus()"><i class="fas fa-trash-alt" style="color:grey;"></i></a></td>
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
