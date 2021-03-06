<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Basic Tables</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Basic tables </li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">List Layanan</h4>
            <a href="<?= base_url('admin') ?>/c_layanan/add" class="btn btn-primary">Tambah Data</a>
            </p>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Layanan</th>
                    <th>Deskripsi</th>
                    <th>File</th>
                  </tr>
           <?php
                  $no = 1;
                  foreach ($layanan as $b => $row){ ?>
              <tr>
                <td><?=$no++;?></td>   
                <td><?=$row->nama_layanan;?></td>
                <td><?=$row->deskripsi;?></td>
                <td><?=$row->file;?></td>
                <td></td>
            </tr>
          <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>