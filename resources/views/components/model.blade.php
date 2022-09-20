<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content py-4">
        <div class="modal-body pt-0">
          <div class="d-flex align-item-end justify-content-end">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="container mt-3">
            <div class="d-flex justify-content-center align-items-center my-3">
              <img src="{{env('APP_logo')}}" >
            </div>
            <div class="appoitmentform">
              <form class="">
                <div class="form-floating mb-2">

                  <input type="text" class="form-control rounded-3" id="Name" placeholder="name@example.com">
                  <label for="Name">Full Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control rounded-3" id="Mobaile" placeholder="name@example.com">
                  <label for="Mobaile">Mobaile No.</label>
                </div>
                <div class="form-floating mb-3">
                  <select type="text" class="form-control rounded-3" id="Servicecategury">
                    <option value="1">Hair Service</option>
                  </select>
                  <label for="floatingInput">Pls Select Your Service Categury</label>
                </div>
                <div class="form-floating mb-3">
                  <select type="text" class="form-control rounded-3" id="Service">
                    <option value="1">Hair Service</option>
                  </select>
                  <label for="floatingInput">Pls Select Your Service</label>
                </div>
                <div class="form-check form-switch mb-3">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault"><small class="text-muted">By clicking Sign up, you agree to the terms of use.</small></label>
                </div>
                <button type="button" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" onclick="appoitment()">Get Appoitment</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
