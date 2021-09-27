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
            <form class="forms-sample">
              <div class="form-group">
                <label>Paraf</label>
                <input type="file" name="img[]" class="file-upload-default" />
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Paraf" />
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Stample</label>
                <input type="file" name="img[]" class="file-upload-default" />
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Stample" />
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mr-2"> Submit </button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>