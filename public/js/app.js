// // public/js/app.js

// document.addEventListener('DOMContentLoaded', () => {
//   // Handle Add to Cart buttons
//   const cartButtons = document.querySelectorAll('.add-to-cart-btn');
//   cartButtons.forEach(btn => {
//     btn.addEventListener('click', () => {
//       const name = btn.getAttribute('data-name');
//       const price = btn.getAttribute('data-price');
//       console.log(`Add to Cart clicked: ${name} — Rs. ${price}`);

//       // TODO: replace with real cart logic / AJAX call to backend
//       alert(`Added to cart: ${name}`);
//     });
//   });
// });


// public/js/app.js

document.addEventListener('DOMContentLoaded', () => {
  const cartKey = 'cartItems';
  const cartButtons = document.querySelectorAll('.add-to-cart-btn');

  // --- Helper functions ---
  function getCart() {
    return JSON.parse(localStorage.getItem(cartKey)) || [];
  }

  function saveCart(cart) {
    localStorage.setItem(cartKey, JSON.stringify(cart));
  }

  function updateCartCount() {
    const count = getCart().reduce((sum, item) => sum + item.qty, 0);
    const cartBadge = document.querySelector('#cart-count');
    if (cartBadge) cartBadge.textContent = count;
  }

  // --- Add to Cart Buttons ---
  cartButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const name = btn.getAttribute('data-name');
      const price = parseInt(btn.getAttribute('data-price'), 10);
      const img = btn.closest('.card').querySelector('img').src;

      let cart = getCart();
      const existing = cart.find(p => p.name === name);

      if (existing) {
        existing.qty += 1;
      } else {
        cart.push({ name, price, img, qty: 1 });
      }

      saveCart(cart);
      updateCartCount();
      alert(`${name} added to cart!`);
    });
  });

  // --- Cart Page Logic ---
  if (window.location.pathname === '/cart') {
    const cart = getCart();
    const tbody = document.querySelector('#cart-items');
    const emptyCart = document.querySelector('#empty-cart');
    const tableWrapper = document.querySelector('#cart-table-wrapper');
    const summary = document.querySelector('#cart-summary');

    if (cart.length === 0) {
      emptyCart.classList.remove('d-none');
      return;
    }

    // Show table and summary
    tableWrapper.classList.remove('d-none');
    summary.classList.remove('d-none');
    emptyCart.classList.add('d-none');

    let subtotal = 0;
    tbody.innerHTML = '';

    cart.forEach((item, index) => {
      const total = item.price * item.qty;
      subtotal += total;

      tbody.innerHTML += `
        <tr>
          <td><img src="${item.img}" style="width:60px; height:40px; object-fit:cover;" class="me-2"> ${item.name}</td>
          <td>${item.price.toLocaleString()}</td>
          <td>
            <input type="number" class="form-control form-control-sm cart-qty" data-index="${index}" min="1" value="${item.qty}">
          </td>
          <td>${total.toLocaleString()}</td>
          <td class="text-center">
            <button class="btn btn-sm btn-danger remove-item" data-index="${index}">Remove</button>
          </td>
        </tr>
      `;
    });

    document.querySelector('#cart-subtotal').textContent = `Rs. ${subtotal.toLocaleString()}`;
    document.querySelector('#cart-total').textContent = `Rs. ${subtotal.toLocaleString()}`;

    // --- Quantity & Remove ---
    tbody.addEventListener('input', e => {
      if (e.target.classList.contains('cart-qty')) {
        const index = e.target.dataset.index;
        const newQty = parseInt(e.target.value);
        if (newQty > 0) {
          cart[index].qty = newQty;
          saveCart(cart);
          location.reload();
        }
      }
    });

    tbody.addEventListener('click', e => {
      if (e.target.classList.contains('remove-item')) {
        const index = e.target.dataset.index;
        cart.splice(index, 1);
        saveCart(cart);
        location.reload();
      }
    });

    
  }

  // Initialize cart count on every page
  updateCartCount();
});



// --- Checkout Page Logic ---
if (window.location.pathname === '/checkout') {
  const cart = JSON.parse(localStorage.getItem('cartItems')) || [];
  const orderSummary = document.getElementById('order-summary');
  const totalEl = document.getElementById('checkout-total');
  const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');
  const cardInfo = document.getElementById('card-info');
  const checkoutForm = document.getElementById('checkout-form');

  if (cart.length === 0) {
    orderSummary.innerHTML = '<li class="list-group-item text-center text-muted">Your cart is empty.</li>';
    totalEl.textContent = 'Rs. 0';
  } else {
    let total = 0;
    orderSummary.innerHTML = '';
    cart.forEach(item => {
      const subtotal = item.price * item.qty;
      total += subtotal;
      orderSummary.innerHTML += `
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <strong>${item.name}</strong>
            <div class="text-muted small">x${item.qty}</div>
          </div>
          <span>Rs. ${subtotal.toLocaleString()}</span>
        </li>`;
    });
    totalEl.textContent = `Rs. ${total.toLocaleString()}`;
  }

  // Toggle card input visibility
  paymentMethods.forEach(radio => {
    radio.addEventListener('change', () => {
      if (document.getElementById('card').checked) {
        cardInfo.classList.remove('d-none');
      } else {
        cardInfo.classList.add('d-none');
      }
    });
  });

  // Form submission
  checkoutForm.addEventListener('submit', e => {
    e.preventDefault();
    if (cart.length === 0) {
      alert('Your cart is empty!');
      return;
    }

    const name = document.getElementById('firstName').value.trim();
    alert(`Thank you, ${name}! Your order has been placed successfully.`);
    localStorage.removeItem('cartItems');
    window.location.href = '/';
  });
}


// --- Contact Page Logic ---
if (window.location.pathname === '/contact') {
  const contactForm = document.getElementById('contactForm');
  contactForm.addEventListener('submit', e => {
    e.preventDefault();
    const name = document.getElementById('name').value.trim();
    alert(`Thank you, ${name}! Your message has been sent successfully.`);
    contactForm.reset();
  });
}
