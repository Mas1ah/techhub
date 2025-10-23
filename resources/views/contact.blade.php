{{-- resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact Us | TechHub')

@section('content')
<div class="container my-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">Contact <span class="text-primary">TechHub</span></h2>
    <p class="text-muted mx-auto" style="max-width:700px;">
      Have a question, need support, or want to collaborate with us?  
      We’d love to hear from you. Get in touch using the form below or through our direct contact details.
    </p>
  </div>

  <div class="row g-4 align-items-start">
    {{-- Contact Form --}}
    <div class="col-lg-7">
      <div class="card shadow-sm p-4 border-0">
        <h5 class="mb-3">Send Us a Message</h5>
        <form id="contactForm">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="name" placeholder="John Doe" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
            </div>
            <div class="col-12">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" placeholder="Order Inquiry or Feedback" required>
            </div>
            <div class="col-12">
              <label for="message" class="form-label">Your Message</label>
              <textarea id="message" class="form-control" rows="5" placeholder="Type your message here..." required></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-4 w-100">Send Message</button>
        </form>
      </div>
    </div>

    {{-- Contact Info --}}
    <div class="col-lg-5">
      <div class="card shadow-sm p-4 border-0">
        <h5 class="mb-3">Our Contact Details</h5>
        <ul class="list-unstyled text-muted mb-4">
          <li class="mb-3">
            <strong>📍 Address:</strong><br>
            TechHub Store, 1st Floor, Tariq Road, Karachi, Pakistan
          </li>
          <li class="mb-3">
            <strong>📞 Phone:</strong><br>
            +92 345 9876543
          </li>
          <li class="mb-3">
            <strong>✉️ Email:</strong><br>
            support@techhub.pk
          </li>
          <li class="mb-3">
            <strong>🕒 Working Hours:</strong><br>
            Mon - Sat: 10:00 AM – 8:00 PM
          </li>
        </ul>

        <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.349784038906!2d67.06474377492764!3d24.86146234545717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e7b8b7a4b0f%3A0x8d3e9cfbd8d0489a!2sTariq%20Road%2C%20Karachi!5e0!3m2!1sen!2s!4v1697157023021!5m2!1sen!2s"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
