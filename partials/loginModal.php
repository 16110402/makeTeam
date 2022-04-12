<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login to iDiscuss</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/makeTeam/partials/handleLogin.php" method="post">
      <div class="modal-body bg-info border border-primary">
      <div class="chip m-4 text-center">
                <img src="./img/8.jpg" alt="Person" width="96" height="96">
                </div> 
  <div class="mb-3">
    <label for="loginEmail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="loginPass" class="form-label">Password</label>
    <input type="password" class="form-control" id="loginPass" name="loginPass">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success">Login</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>