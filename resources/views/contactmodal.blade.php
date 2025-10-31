  <!-- Contact Modal -->
  <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form id="contactForm" autocomplete="on">
                      <div class="mb-3">
                          <label for="contactName" class="form-label">Name</label>
                          <input type="text" class="form-control" id="contactName" name="name" required aria-required="true" aria-label="Your Name">
                      </div>
                      <div class="mb-3">
                          <label for="contactEmail" class="form-label">Email</label>
                          <input type="email" class="form-control" id="contactEmail" name="email" required aria-required="true" aria-label="Your Email">
                      </div>
                      <div class="mb-3">
                          <label for="contactMessage" class="form-label">Message</label>
                          <textarea class="form-control" id="contactMessage" name="message" rows="4" required aria-required="true" aria-label="Your Message"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary w-100" aria-label="Send message" id="contactSubmitBtn">Send Message</button>
                  </form>
                  <div id="contactSuccess" class="alert alert-success mt-3 d-none" role="alert">
                      Thank you for contacting us! We'll get back to you soon.
                  </div>
              </div>
          </div>
      </div>
  </div>