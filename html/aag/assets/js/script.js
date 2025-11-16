// Detectar el enlace activo según el nombre del archivo actual
document.addEventListener("DOMContentLoaded", () => {
    const currentPage = window.location.pathname.split("/").pop() || "index.php";
    const links = document.querySelectorAll("nav a");
  
    links.forEach(link => {
      const href = link.getAttribute("href");
      if (href === currentPage) {
        link.classList.add("active");
      }
    });
  });