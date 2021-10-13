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
                <label for="exampleInputName1">Nama user</label>
                <input type="text" name="nama_user" class="form-control" id="exampleInputName1" placeholder="Name" />
              </div>
              <div class="form-user">
              <select class="form-control" name="user_id">
                <option  value="">---Select Category---</option>                    
                <?php foreach($user as $row) { ?>
                <option value="<?php echo $row->id_user;?>"><?php echo $row->username;?></option>
            <?php } ?>
        </select> 
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Pengaduan</label>
                <textarea type="text" name="pengaduan" class="form-control" id="exampleTextarea1" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mr-2"> Submit </button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>