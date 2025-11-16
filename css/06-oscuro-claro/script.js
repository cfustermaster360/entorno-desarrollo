// Referencias
const toggle = document.getElementById('theme-toggle');
const root = document.documentElement;

// Colores de cada tema
const temaClaro = {
  '--color-fondo': '#f4f4f4',
  '--color-texto': '#222',
  '--color-principal': '#0044ff',
  '--color-secundario': '#0056b3'
};

const temaOscuro = {
  '--color-fondo': '#121212',
  '--color-texto': '#f4f4f4',
  '--color-principal': '#ff6600',
  '--color-secundario': '#ff8533'
};

// Cambiar el tema al marcar el switch
toggle.addEventListener('change', (e) => {
  const tema = e.target.checked ? temaOscuro : temaClaro;
  for (const prop in tema) {
    root.style.setProperty(prop, tema[prop]);
  }
});

// Ejemplo: botón para cambiar el color principal de forma dinámica
const btn = document.querySelector('.action-btn');
btn.addEventListener('click', () => {
  const randomColor = `hsl(${Math.floor(Math.random() * 360)}, 80%, 50%)`;
  root.style.setProperty('--color-principal', randomColor);
});

