 document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.getElementById('menuToggle');
  const mainNav = document.getElementById('mainNav');

  // Abre/fecha o menu ao clicar no botão
  menuToggle.addEventListener('click', (e) => {
    e.stopPropagation(); // Evita o clique "vazar"
    mainNav.classList.toggle('active');
    menuToggle.classList.toggle('active');
  });

  // Fecha o menu ao clicar fora dele
  document.addEventListener('click', (e) => {
    // Só fecha se o menu estiver aberto e o clique for fora do menu e do botão
    if (
      mainNav.classList.contains('active') &&
      !mainNav.contains(e.target) &&
      !menuToggle.contains(e.target)
    ) {
      mainNav.classList.remove('active');
      menuToggle.classList.remove('active');
    }
  });

  // Scroll suave para links de âncora (exceto "Comece a vender")
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');

      if (href === '#comece') {
        e.preventDefault();
        mainNav.classList.remove('active');
        menuToggle.classList.remove('active');
        return;
      }

      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        mainNav.classList.remove('active');
        menuToggle.classList.remove('active');
      }
    });
  });

  // Scroll suave para "comissões" e "benefícios"
  document.querySelectorAll('.main-nav a[href="#comissoes"], .main-nav a[href="#beneficios"]').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      document.querySelector('#comissoes-beneficios').scrollIntoView({ behavior: 'smooth', block: 'start' });
      mainNav.classList.remove('active');
      menuToggle.classList.remove('active');
    });
  });
});


// ======================
// Validação do formulário
// ======================
