
  document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("searchInput");
    const categories = document.querySelectorAll(".category");
    const noResults = document.getElementById("noResults");
    const spinner = document.getElementById("spinner");

    let typingTimeout;

    searchInput.addEventListener("input", () => {
      clearTimeout(typingTimeout);
      spinner.classList.remove("hidden");

      typingTimeout = setTimeout(() => {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        // Si el campo está vacío, mostrar todo y salir
        if (query === "") {
          categories.forEach(category => {
            category.classList.remove("hidden");
            category.style.opacity = "1";
            category.style.transform = "translateY(0)";
          });
          noResults.classList.add("hidden");
          spinner.classList.add("hidden");
          return;
        }

        // Si hay texto, filtrar resultados
        categories.forEach(category => {
          const text = category.innerText.toLowerCase();
          if (text.includes(query)) {
            category.classList.remove("hidden");
            category.style.opacity = "1";
            category.style.transform = "translateY(0)";
            visibleCount++;
          } else {
            category.classList.add("hidden");
          }
        });

        noResults.classList.toggle("hidden", visibleCount > 0);
        spinner.classList.add("hidden");
      }, 400);
    });
  });

