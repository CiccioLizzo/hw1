fetch('api/get_products.php?categoria=iphone')
  .then(response => response.json())
  .then(products => {
    const container = document.getElementById('iphone-products');
    container.innerHTML = '';
    products.forEach(product => {
      const el = document.createElement('div');
      el.className = 'iphone-product';
      el.innerHTML = `
        <img src="${product.image}" alt="${product.name}">
        <h3>${product.name}</h3>
        <p>${product.description}</p>
        <div class="price">A partire da € ${product.price}</div>
        <div class="iphone-product-buttons">
          <a href="#" class="btn-apple">Scopri di più</a>
          <a href="#" class="btn-apple">Acquista</a>
        </div>
        <ul class="iphone-product-specs">
          ${(product.specs || []).map(spec => `<li>${spec}</li>`).join('')}
        </ul>
      `;
      container.appendChild(el);
    });
  })
  .catch(error => {
    document.getElementById('iphone-products').innerHTML = '<p>Errore nel caricamento dei prodotti.</p>';
    console.error(error);
  });