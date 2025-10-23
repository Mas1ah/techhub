{{-- resources/views/faq.blade.php --}}
@extends('layouts.app')

@section('title', 'FAQs | TechHub')

@section('content')
<div class="container my-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">Frequently Asked <span class="text-primary">Questions</span></h2>
    <p class="text-muted mx-auto" style="max-width:700px;">
      Have a question? We’ve compiled answers to the most common queries about our products, shipping, warranty, and payments.
      Still need help? <a href="{{ url('/contact') }}">Contact us</a> — we’ll be happy to assist.
    </p>
  </div>

  <div class="accordion shadow-sm" id="faqAccordion">
    {{-- 1 --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq1">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
          What products does TechHub offer?
        </button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          TechHub offers a wide range of technology products including laptops, graphic cards, monitors, printers, and accessories from leading global brands like HP, ASUS, Dell, MSI, and NVIDIA.
        </div>
      </div>
    </div>

    {{-- 2 --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
          Do you provide nationwide delivery in Pakistan?
        </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Yes! We deliver to all major cities across Pakistan including Karachi, Lahore, Islamabad, Faisalabad, and Peshawar.  
          Orders are shipped via trusted courier partners, and tracking information is shared once your order is dispatched.
        </div>
      </div>
    </div>

    {{-- 3 --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
          How long does delivery take?
        </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Delivery usually takes 2–4 business days in major cities and up to 5–7 days for other regions, depending on stock availability and courier timelines.
        </div>
      </div>
    </div>

    {{-- 4 --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          What payment methods do you accept?
        </button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          We currently accept Cash on Delivery (COD), Bank Transfer, and Credit/Debit Card payments.  
          Online payment gateways will be introduced soon for faster checkout.
        </div>
      </div>
    </div>

    {{-- 5 --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          Are your products genuine and come with warranty?
        </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          100%! All TechHub products are original and sourced from authorized distributors.  
          Most items include official manufacturer warranties or TechHub in-house replacement support (depending on product type).
        </div>
      </div>
    </div>

    {{-- 6 --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
          Can I return or exchange a product?
        </button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="faq6" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Yes, you may request a return or exchange within 7 days of delivery if the item is defective or not as described.  
          Please ensure the product is unused and in its original packaging. For more details, see our Return Policy (coming soon).
        </div>
      </div>
    </div>

    {{-- 7 --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq7">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
          How can I track my order?
        </button>
      </h2>
      <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="faq7" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Once your order is shipped, you’ll receive a tracking link via email or SMS.  
          You can also contact our support team to check your order’s live status.
        </div>
      </div>
    </div>

    {{-- 8 --}}
    <div class="accordion-item">
      <h2 class="accordion-header" id="faq8">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
          How do I contact TechHub support?
        </button>
      </h2>
      <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="faq8" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          You can reach us by calling <strong>+92 345 9876543</strong> or by emailing <strong>support@techhub.pk</strong>.  
          You can also visit our <a href="{{ url('/contact') }}">Contact Page</a> to send a quick message — we usually reply within 24 hours.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
