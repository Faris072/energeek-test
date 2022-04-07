@extends('parts.navbar')

@section('content')
    {{-- content --}}
    <div class="container">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-10 mx-auto">
                    <div class="card rounded shadow border-0">
                        <div class="card-body p-5 bg-white rounded">
                            <div class="table-responsive">
                                <div class="atas d-flex pb-3">
                                    Tampilkan
                                    <select style="border:none; height:25px;" name="" id="">
                                        <option value="">10</option>
                                        <option value="">20</option>
                                        <option value="">20</option>
                                        <option value="">20</option>
                                    </select>
                                    data
                                </div>
                                <table id="example" style="width:100%" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Minimal Stok</th>
                                            <th>Stok</th>
                                            <th>Status Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>BRG-001</td>
                                            <td>Komputer</td>
                                            <td>1</td>
                                            <td>10</td>
                                            <td align="center"><span class="p-1 bg-danger"
                                                    style="color:white; border-radius:5px;">bahaya</span></td>
                                            <td align="center"><a href=""><i class="fas fa-history"
                                                        style="color:grey;"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- pagination --}}
                                <nav aria-label="..." class="pt-3">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <span class="page-link">
                                                2
                                                <span class="sr-only">(current)</span>
                                            </span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                                {{-- endpagination --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
