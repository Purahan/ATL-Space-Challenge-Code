<?php
 include('includes/header.php');
?>
    <main id="main">


      <!-- ======= Blog Section ======= -->
      <section id="main">
        <div class="d-flex mx-5 mt-5 flex-column h-100 bg-light rounded-3 shadow-lg p-4">
          <div class="py-2 p-md-3">
            <!-- Title + Compose button-->
            <div class="d-sm-flex align-items-center justify-content-between pb-2 text-center text-sm-start">
              <h1 class="h3 mb-3 text-nowrap">Your messages<span class="d-inline-block align-middle bg-faded-success text-success fs-ms fw-medium rounded-1 py-1 px-2 ms-2">1</span></h1>
              <div class="mb-3"><a class="btn btn-translucent-primary" href="#message-compose" data-bs-toggle="collapse"><i class="bi bi-plus"></i>Compose</a></div>
            </div>
            <!-- Message compose form-->
            <div class="collapse" id="message-compose">
              <form class="needs-validation shadow rounded mb-4" novalidate="">
                <div class="d-flex align-items-center justify-content-between bg-dark rounded-top py-3 px-4">
                  <h3 class="fs-base text-light mb-0">New message</h3><a class="btn-close btn-close-white" href="#message-compose" data-bs-toggle="collapse"></a>
                </div>
                <div class="p-4">
                  <div class="mb-3 pb-1">
                    <input class="form-control" type="text" placeholder="To" required="">
                    <div class="invalid-feedback">Please provide recipient(s) of your message!</div>
                  </div>
                  <div class="mb-3 pb-1">
                    <input class="form-control bg-image-0" type="text" placeholder="Subject">
                  </div>
                  <div class="mb-3 pb-1">
                    <textarea class="form-control" rows="5" required=""></textarea>
                    <div class="invalid-feedback">Please write your message!</div>
                  </div>
                  <button class="btn btn-primary" type="submit"><i class="ai-send fs-lg me-2"></i>Send</button>
                </div>
              </form>
            </div>
            <!-- Toolbar-->
            <div class="d-flex align-items-center justify-content-between bg-secondary-msg py-2 px-3">
              <div class="py-1">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="select-all" data-master-checkbox-for="#message-list">
                  <label class="form-check-label" for="select-all">Select all</label>
                </div>
              </div>
              <div class="py-1">
                <div class="btn-group dropdown">
                  <button class="dropdown-toggle btn btn-light btn-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                  <div class="dropdown-menu dropdown-menu-end my-1">
                    <a class="dropdown-item" href="#"><i class="bi bi-eye-slash me-2 align-middle mt-n1"></i>Mark unread</a>
                    <a class="dropdown-item" href="#"><i class="bi bi-arrow-90deg-left fs-ms me-2 align-middle mt-n1"></i>Reply</a>
                    <a class="dropdown-item" href="#"><i class="bi bi-arrow-90deg-right me-2 fs-ms align-middle mt-n1"></i>Forward</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i class="bi bi-trash fs-ms me-2 align-middle mt-n1"></i>Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Message list (table)-->
            <table class="table table-hover border-bottom">
              <tbody id="message-list">
                <!-- Message-->
                <tr id="item-message-1">
                  <td class="py-3 align-middle ps-2 pe-0" style="width: 2.5rem;">
                    <div class="form-check ms-2 me-0">
                      <input class="form-check-input" type="checkbox" id="message-1" data-checkbox-toggle-class="bg-faded-primary" data-bs-target="#item-message-1">
                      <label class="form-check-label" for="message-1"></label>
                    </div>
                  </td>
                  <td class="py-3 align-middle"><a class="d-block d-sm-flex align-items-center text-decoration-none" href="#">
                    <img class="rounded-circle mb-2 me-3 mb-sm-0" src="https://around.createx.studio/img/dashboard/messages/01.jpg" alt="Edward Johnson" width="42">
                      <div class="fs-sm ps-sm-3">
                        <div class="d-sm-flex text-heading align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="text-truncate fw-semibold" style="max-width: 10rem;">Edward Johnson</div><span class="nav-indicator"></span>
                          </div>
                          <div class="ms-sm-auto text-muted position-absolute fs-xs end-8">Aug 13,2020</div>
                        </div>
                        <div class="pt-1 text-heading">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium...</div>
                      </div></a></td>
                </tr>
                <!-- Message-->
                <tr id="item-message-2">
                  <td class="py-3 align-middle ps-2 pe-0" style="width: 2.5rem;">
                    <div class="form-check ms-2 me-0">
                      <input class="form-check-input" type="checkbox" id="message-2" data-checkbox-toggle-class="bg-faded-primary" data-bs-target="#item-message-2">
                      <label class="form-check-label" for="message-2"></label>
                    </div>
                  </td>
                  <td class="py-3 align-middle"><a class="d-block d-sm-flex align-items-center text-decoration-none" href="#">
                    <img class="rounded-circle mb-2 me-3 mb-sm-0" src="https://around.createx.studio/img/dashboard/messages/02.jpg" alt="Emilia Young" width="42">
                      <div class="fs-sm ps-sm-3">
                        <div class="d-sm-flex text-heading align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="text-truncate" style="max-width: 10rem;">Emilia Young</div>
                          </div>
                          <div class="ms-sm-auto text-muted fs-xs position-absolute end-8">Aug 05,2020</div>
                        </div>
                        <div class="pt-1 text-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque...</div>
                      </div></a></td>
                </tr>
                <!-- Message-->
                <tr id="item-message-3">
                  <td class="py-3 align-middle ps-2 pe-0" style="width: 2.5rem;">
                    <div class="form-check ms-2 me-0">
                      <input class="form-check-input" type="checkbox" id="message-3" data-checkbox-toggle-class="bg-faded-primary" data-bs-target="#item-message-3">
                      <label class="form-check-label" for="message-3"></label>
                    </div>
                  </td>
                  <td class="py-3 align-middle"><a class="d-block d-sm-flex align-items-center text-decoration-none" href="#">
                    <img class="rounded-circle mb-2 me-3 mb-sm-0" src="https://around.createx.studio/img/dashboard/messages/03.jpg" alt="The Art Studio Inc." width="42">
                      <div class="fs-sm ps-sm-3">
                        <div class="d-sm-flex text-heading align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="text-truncate" style="max-width: 10rem;">The Art Studio Inc.</div>
                          </div>
                          <div class="ms-sm-auto text-muted fs-xs position-absolute end-8">Jul 18,2020</div>
                        </div>
                        <div class="pt-1 text-body">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae...</div>
                      </div></a></td>
                </tr>
                <!-- Message-->
                <tr class="bg-faded-primary" id="item-message-4">
                  <td class="py-3 align-middle ps-2 pe-0" style="width: 2.5rem;">
                    <div class="form-check ms-2 me-0">
                      <input class="form-check-input" type="checkbox" id="message-4" data-checkbox-toggle-class="bg-faded-primary" data-bs-target="#item-message-4" checked="">
                      <label class="form-check-label" for="message-4"></label>
                    </div>
                  </td>
                  <td class="py-3 align-middle"><a class="d-block d-sm-flex align-items-center text-decoration-none" href="#">
                    <img class="rounded-circle mb-2 me-3 mb-sm-0" src="https://around.createx.studio/img/dashboard/messages/04.jpg" alt="Felicity Coleman" width="42">
                      <div class="fs-sm ps-sm-3">
                        <div class="d-sm-flex text-heading align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="text-truncate" style="max-width: 10rem;">Felicity Coleman</div>
                          </div>
                          <div class="ms-sm-auto text-muted fs-xs position-absolute end-8">Jul 10,2020</div>
                        </div>
                        <div class="pt-1 text-body">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit...</div>
                      </div></a></td>
                </tr>
                <!-- Message-->
                <tr id="item-message-5">
                  <td class="py-3 align-middle ps-2 pe-0" style="width: 2.5rem;">
                    <div class="form-check ms-2 me-0">
                      <input class="form-check-input" type="checkbox" id="message-5" data-checkbox-toggle-class="bg-faded-primary" data-bs-target="#item-message-5">
                      <label class="form-check-label" for="message-5"></label>
                    </div>
                  </td>
                  <td class="py-3 align-middle"><a class="d-block d-sm-flex align-items-center text-decoration-none" href="#">
                    <img class="rounded-circle mb-2 me-3 mb-sm-0" src="https://around.createx.studio/img/dashboard/messages/05.jpg" alt="Mike Rogers" width="42">
                      <div class="fs-sm ps-sm-3">
                        <div class="d-sm-flex text-heading align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="text-truncate" style="max-width: 10rem;">Mike Rogers</div>
                          </div>
                          <div class="ms-sm-auto text-muted fs-xs position-absolute end-8">Jun 30,2020</div>
                        </div>
                        <div class="pt-1 text-body">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus...</div>
                      </div></a></td>
                </tr>
                <!-- Message-->
                <tr id="item-message-6">
                  <td class="py-3 align-middle ps-2 pe-0" style="width: 2.5rem;">
                    <div class="form-check ms-2 me-0">
                      <input class="form-check-input" type="checkbox" id="message-6" data-checkbox-toggle-class="bg-faded-primary" data-bs-target="#item-message-6">
                      <label class="form-check-label" for="message-6"></label>
                    </div>
                  </td>
                  <td class="py-3 align-middle"><a class="d-block d-sm-flex align-items-center text-decoration-none" href="#">
                    <img class="rounded-circle mb-2 me-3 mb-sm-0" src="https://around.createx.studio/img/dashboard/messages/06.jpg" alt="Jeffrey Henderson" width="42">
                      <div class="fs-sm ps-sm-3">
                        <div class="d-sm-flex text-heading align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="text-truncate" style="max-width: 10rem;">Jeffrey Henderson</div>
                          </div>
                          <div class="ms-sm-auto text-muted fs-xs position-absolute end-8">Jun 26,2020</div>
                        </div>
                        <div class="pt-1 text-body">Et harum quidem rerum facilis est et expedita distinctio deleniti atque corrupti quos...</div>
                      </div></a></td>
                </tr>
                <!-- Message-->
                <tr id="item-message-7">
                  <td class="py-3 align-middle ps-2 pe-0" style="width: 2.5rem;">
                    <div class="form-check ms-2 me-0">
                      <input class="form-check-input" type="checkbox" id="message-7" data-checkbox-toggle-class="bg-faded-primary" data-bs-target="#item-message-7">
                      <label class="form-check-label" for="message-7"></label>
                    </div>
                  </td>
                  <td class="py-3 align-middle"><a class="d-block d-sm-flex align-items-center text-decoration-none" href="#">
                    <img class="rounded-circle mb-2 me-3 mb-sm-0" src="https://around.createx.studio/img/dashboard/messages/07.jpg" alt="Maria Sanchez" width="42">
                      <div class="fs-sm ps-sm-3">
                        <div class="d-sm-flex text-heading align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="text-truncate" style="max-width: 10rem;">Maria Sanchez</div>
                          </div>
                          <div class="ms-sm-auto text-muted fs-xs position-absolute end-8">Jun 14,2020</div>
                        </div>
                        <div class="pt-1 text-body">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus...</div>
                      </div></a></td>
                </tr>
                <!-- Message-->
                <tr id="item-message-8">
                  <td class="py-3 align-middle ps-2 pe-0" style="width: 2.5rem;">
                    <div class="form-check ms-2 me-0">
                      <input class="form-check-input" type="checkbox" id="message-8" data-checkbox-toggle-class="bg-faded-primary" data-bs-target="#item-message-8">
                      <label class="form-check-label" for="message-8"></label>
                    </div>
                  </td>
                  <td class="py-3 align-middle"><a class="d-block d-sm-flex align-items-center text-decoration-none" href="#">
                    <img class="rounded-circle mb-2 me-3 mb-sm-0" src="https://around.createx.studio/img/dashboard/messages/08.jpg" alt="Best Ever Company Ltd." width="42">
                      <div class="fs-sm ps-sm-3">
                        <div class="d-sm-flex text-heading align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="text-truncate" style="max-width: 10rem;">Best Ever Company Ltd.</div>
                          </div>
                          <div class="ms-sm-auto text-muted fs-xs position-absolute end-8">Jun 08,2020</div>
                        </div>
                        <div class="pt-1 text-body">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit aliquid...</div>
                      </div></a></td>
                </tr>
                <!-- Message-->
                <tr id="item-message-9">
                  <td class="py-3 align-middle ps-2 pe-0" style="width: 2.5rem;">
                    <div class="form-check ms-2 me-0">
                      <input class="form-check-input" type="checkbox" id="message-9" data-checkbox-toggle-class="bg-faded-primary" data-bs-target="#item-message-9">
                      <label class="form-check-label" for="message-9"></label>
                    </div>
                  </td>
                  <td class="py-3 align-middle"><a class="d-block d-sm-flex align-items-center text-decoration-none" href="#">
                    <img class="rounded-circle mb-2 me-3 mb-sm-0" src="https://around.createx.studio/img/dashboard/messages/09.jpg" alt="Daniel Adams" width="42">
                      <div class="fs-sm ps-sm-3">
                        <div class="d-sm-flex text-heading align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="text-truncate" style="max-width: 10rem;">Daniel Adams</div>
                          </div>
                          <div class="ms-sm-auto text-muted fs-xs position-absolute end-8">May 23,2020</div>
                        </div>
                        <div class="pt-1 text-body">Reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores...</div>
                      </div></a></td>
                </tr>
              </tbody>
            </table>
            <!-- Pagination-->
            <nav class="d-md-flex justify-content-between align-items-center text-center text-md-start pt-3">
              <div class="d-md-flex align-items-center w-100"><span class="fs-sm text-muted me-md-3">Showing 9 of 84 messages</span>
                <div class="progress w-100 my-3 mx-auto mx-md-0" style="max-width: 10rem; height: 4px;">
                  <div class="progress-bar" role="progressbar" style="width: 12%;background-color: #e43c5c;" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <button class="btn btn-outline-pink fs-sm" type="button">Load older messages</button>
            </nav>
          </div>
        </div>
      </section><!-- End Blog Section -->

    </main><!-- End #main -->
<?php
  include('includes/footer.php');
?>