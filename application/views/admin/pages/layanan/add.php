<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Form elements</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Form elements </li>
        </ol>
      </nav>
    </div>

    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic form elements</h4>
            <p class="card-description">Basic form elements</p>
            <form class="forms-sample" action="proses" method="post">
              <div class="form-group">
                <label for="exampleInputName1">Nama Layanan</label>
                <input type="text" name="nama_layanan" class="form-control" id="exampleInputName1" placeholder="Name" />
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="exampleInputName1" placeholder="Name" />
              </div>
              <div class="form-group">
                <label for="exampleInputName1">File</label>
                <input type="text" name="file" class="form-control" id="exampleInputName1" placeholder="Name" />
              </div>
              <button type="submit" name="add" class="btn btn-primary mr-2"> Submit </button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>