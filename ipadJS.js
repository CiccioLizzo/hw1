fetch('api/get_products.php?categoria=ipad')
  .then(response => response.json())
  .then(products => {
    const container = document.getElementById('ipad-products');
    container.innerHTML = '';
    products.forEach(product => {
      const el = document.createElement('div');
      el.className = 'ipad-product';
      el.innerHTML = `
        <img src="${product.image}" alt="${product.name}">
        <h3>${product.name}</h3>
        <p>${product.description}</p>
        <div class="price">A partire da € ${product.price}</div>
        <div class="ipad-product-buttons">
          <a href="#" class="btn-apple">Scopri di più</a>
          <a href="#" class="btn-apple">Acquista</a>
        </div>
        <div class="ipad-product-specs">
          ${(product.specs || []).map(spec => `<li>${spec}</li>`).join('')}
        </div>
      `;
      container.appendChild(el);
    });
  })
  .catch(error => {
    document.getElementById('ipad-products').innerHTML = '<p>Errore nel caricamento dei prodotti.</p>';
    console.error(error);
  });