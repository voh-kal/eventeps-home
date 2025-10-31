<script>
    // AJAX handler for contact form submission
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('contactForm');
        if (form) {
            var submitBtn = document.getElementById('contactSubmitBtn');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Processing...';
                }
                var formData = new FormData(form);
                var settings = {
                    url: "{{ config('app.base_url') }}/contact-us",
                    method: "POST",
                    timeout: 0,
                    headers: {
                        "Accept": "application/json"
                    },
                    processData: false,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Message Sent',
                            text: "Thank you for contacting us! We'll get back to you soon.",
                            confirmButtonText: 'OK'
                        });
                        form.reset();
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.textContent = 'Send Message';
                        }
                    },
                    error: function(xhr) {
                        var msg = 'There was an error submitting your message. Please try again.';
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            var errors = xhr.responseJSON.errors;
                            msg = Object.values(errors).map(function(arr) { return arr.join(' '); }).join(' ');
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            msg = xhr.responseJSON.message;
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Submission Failed',
                            text: msg,
                            confirmButtonText: 'OK'
                        });
                        if (submitBtn) {
                            submitBtn.disabled = false;
                            submitBtn.textContent = 'Send Message';
                        }
                    }
                };
                if (window.$ && $.ajax) {
                    $.ajax(settings);
                } else {
                    // fallback to fetch if jQuery is not available
                    fetch(settings.url, {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json'
                            },
                            body: formData
                        })
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(data) {
                            if (data && data.errors) {
                                var msg = Object.values(data.errors).map(function(arr) { return arr.join(' '); }).join(' ');
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Submission Failed',
                                    text: msg,
                                    confirmButtonText: 'OK'
                                });
                                if (submitBtn) {
                                    submitBtn.disabled = false;
                                    submitBtn.textContent = 'Send Message';
                                }
                            } else {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Message Sent',
                                    text: "Thank you for contacting us! We'll get back to you soon.",
                                    confirmButtonText: 'OK'
                                });
                                form.reset();
                                if (submitBtn) {
                                    submitBtn.disabled = false;
                                    submitBtn.textContent = 'Send Message';
                                }
                            }
                        })
                        .catch(function(err) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Submission Failed',
                                text: 'There was an error submitting your message. Please try again.',
                                confirmButtonText: 'OK'
                            });
                            if (submitBtn) {
                                submitBtn.disabled = false;
                                submitBtn.textContent = 'Send Message';
                            }
                        });
                }
            });
        }
        // Reset modal on close
        var contactModal = document.getElementById('contactModal');
        if (contactModal) {
            contactModal.addEventListener('hidden.bs.modal', function() {
                form.reset();
                form.classList.remove('d-none');
                document.getElementById('contactSuccess').classList.add('d-none');
            });
        }
    });
</script>