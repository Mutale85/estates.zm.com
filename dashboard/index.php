<?php
  include ("../include/db.php"); 
  if (!isset($_SESSION['user_id'])) {
      header('location:../');
  }
  $user_id = $_SESSION['user_id'];
  $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'addon_header.php'; ?>
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <?php include 'addon_logo.php';?>
        <?php include 'addon_side_nav.php';?>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          
          <!-- Navbar Header -->
          <?php include 'addon_top_nav.php';?>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
              <div>
                <h3 class="fw-bold mb-3">Welcome <?php echo htmlspecialchars($username); ?> </h3>
                <h6 class="op-7 mb-2">Dashboard</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2" data-bs-toggle="modal" data-bs-target="#addPropertyModal">Add Property</a>
                <a href="#" class="btn btn-primary btn-round">Add Tenant</a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Tenants</p>
                          <h4 class="card-title">19</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="bi bi-house"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Properties</p>
                          <h4 class="card-title">05</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="bi bi-cash-coin"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Payments</p>
                          <h4 class="card-title">04</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small">
                          <i class="bi bi-circle"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Non Payments</p>
                          <h4 class="card-title">06</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-4">
                <div class="card card-round">
                  <div class="card-body">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Tenants</div>
                    </div>
                    <div class="card-list py-4">
                      <div class="item-list">
                        <div class="avatar">
                          <i class="bi bi-person fs-4"></i>
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Chanda Mulenga</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8">
                          <i class="bi bi-chat-dots"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <i class="bi bi-person fs-4"></i>
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Mutale Ngoma</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8">
                          <i class="bi bi-chat-dots"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <i class="bi bi-person fs-4"></i>
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Bwalya Tembo</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8">
                          <i class="bi bi-chat-dots"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <i class="bi bi-person fs-4"></i>
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Chileshe Banda</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8">
                          <i class="bi bi-chat-dots"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <i class="bi bi-person fs-4"></i>
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Kalumba Zulu</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8">
                          <i class="bi bi-chat-dots"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <i class="bi bi-person fs-4"></i>
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Namwinga Phiri</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8">
                          <i class="bi bi-chat-dots"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Payment History</div>
                      
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Payment Number</th>
                            <th scope="col" class="text-end">Date & Time</th>
                            <th scope="col" class="text-end">Amount</th>
                            <th scope="col" class="text-end">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end"><?php echo date("d-M-y");?></td>
                            <td class="text-end">ZMW 2500.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end"><?php echo date("d-M-y");?></td>
                            <td class="text-end">ZMW 2500.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end"><?php echo date("d-M-y");?></td>
                            <td class="text-end">ZMW 2500.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end"><?php echo date("d-M-y");?></td>
                            <td class="text-end">ZMW 2500.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end"><?php echo date("d-M-y");?></td>
                            <td class="text-end">ZMW 2500.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end"><?php echo date("d-M-y");?></td>
                            <td class="text-end">ZMW 2500.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button>
                              Payment from #10231
                            </th>
                            <td class="text-end"><?php echo date("d-M-y");?></td>
                            <td class="text-end">ZMW 2500.00</td>
                            <td class="text-end">
                              <span class="badge badge-success">Completed</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          
        </footer>
      </div>
      <!-- End Custom template -->
    </div>
    <div class="modal fade" id="addPropertyModal" tabindex="-1" aria-labelledby="addPropertyModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addPropertyModalLabel">Add Property for Rent</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addPropertyForm">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="propertyTitle" class="form-label">Property Title</label>
                  <input type="text" class="form-control" id="propertyTitle" required>
                </div>
                <div class="col-md-6">
                  <label for="propertyType" class="form-label">Property Type</label>
                  <select class="form-select" id="propertyType" required>
                    <option value="">Select Type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Full House">Full House</option>
                    <option value="Boarding House">Boarding House</option>
                    <option value="Store">Store</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="bedrooms" class="form-label">Bedrooms</label>
                  <input type="number" class="form-control" id="bedrooms" min="0" required>
                </div>
                <div class="col-md-6">
                  <label for="bathrooms" class="form-label">Bathrooms</label>
                  <input type="number" class="form-control" id="bathrooms" min="0" step="0.5" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="rentAmount" class="form-label">Rent Amount</label>
                  <div class="input-group">
                    <span class="input-group-text">ZMW</span>
                    <input type="number" class="form-control" id="rentAmount" min="0" step="0.01" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="rentPeriod" class="form-label">Rent Period</label>
                  <select class="form-select" id="rentPeriod" name="rentPeriod" required>
                    <option value="">Select Rent Period</option>
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="quarterly">Quarterly</option>
                    <option value="biannually">Biannually</option>
                    <option value="annually">Annually</option>
                  </select>
                </div>
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" required>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                <label for="amenities" class="form-label">Amenities</label>
                <div id="amenitiesContainer">
                  <!-- Existing amenities will be added here dynamically -->
                </div>
                <button type="button" class="btn btn-sm btn-primary mt-2" id="addAmenityBtn">Add Amenity</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="addPropertyButton" onclick="submitProperty()">Add Property</button>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>
    <scritp>
    <script>
      $(document).ready(function() {
        const amenitiesContainer = $('#amenitiesContainer');
        const addAmenityBtn = $('#addAmenityBtn');

        // Function to add a new amenity input
        function addAmenityInput(value = '') {
          const index = amenitiesContainer.children().length;
          const amenityHtml = `
            <div class="input-group mb-2 amenity-input">
              <input type="text" class="form-control" name="amenities[]" value="${value}" placeholder="Enter amenity" required>
              <button class="btn btn-outline-danger remove-amenity" type="button"><i class="bi bi-trash2"></i></button>
            </div>
          `;
          amenitiesContainer.append(amenityHtml);
        }

        // Add amenity button click handler
        addAmenityBtn.on('click', function() {
          addAmenityInput();
        });

        // Remove amenity button click handler
        amenitiesContainer.on('click', '.remove-amenity', function() {
          $(this).closest('.amenity-input').remove();
        });

        // Initialize with a few common amenities
        const initialAmenities = ['TV Room', 'Parking', 'Air Conditioning', 'Laundry', 'Pool', 'Gym'];
        initialAmenities.forEach(amenity => addAmenityInput(amenity));

        // Function to get all amenities when submitting the form
        function getAmenities() {
          return amenitiesContainer.find('input[name="amenities[]"]').map(function() {
            return $(this).val();
          }).get();
        }

        // Modify your existing submitProperty function to use getAmenities()
        function submitProperty() {
          const $form = $('#addPropertyForm');
          if ($form[0].checkValidity()) {
            const formData = new FormData($form[0]);
            
            // Add amenities to formData
            const amenities = getAmenities();
            formData.append('amenities', JSON.stringify(amenities));

            $.ajax({
              url: 'php_process/add_property',
              type: 'POST',
              data: formData,
              processData: false,
              contentType: false,
              dataType: 'json',
              beforeSend:function() {
                $("#addPropertyButton").prop("disabled", true).html("Processin....");
              },
              success: function(data) {
                if (data.success) {
                  alert('Property added successfully!');
                  $('#addPropertyModal').modal('hide');
                  // Optionally, refresh the property list or add the new property to the existing list
                } else {
                  alert('Error: ' + data.message);
                }
                $("#addPropertyButton").prop("disabled", false).html("Submit Property");
              },
              error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error:', textStatus, errorThrown);
                alert('An error occurred. Please try again.');
                $("#addPropertyButton").prop("disabled", false).html("Submit Property");
              }
            });
          } else {
            $form[0].reportValidity();
          }
        }

        // Attach the submitProperty function to the button click event
        $('#addPropertyButton').on('click', submitProperty);
      });
    </script>
    
  </body>
</html>
