document.addEventListener("DOMContentLoaded", () => {
  console.log("✅ price.js activo");

  const planButtons = document.querySelectorAll(".plan-button");
  const plans = document.querySelectorAll(".bg-white.rounded-2xl");
  let activeMessage = null;

  planButtons.forEach(button => {
    button.addEventListener("click", e => {
      e.preventDefault(); // Evita navegación inmediata

      const plan = button.dataset.plan;
      const card = button.closest(".bg-white.rounded-2xl");

      // Quitar selección previa
      plans.forEach(c => {
        c.style.boxShadow = "";
        c.style.transform = "scale(1)";
      });

      // Resaltar actual
      card.style.boxShadow = "0 0 0 4px #3B82F6";
      card.style.transform = "scale(1.05)";
      card.style.transition = "all 0.3s ease";

      // Eliminar mensaje anterior
      if (activeMessage) activeMessage.remove();

      // Crear mensaje
      const message = document.createElement("div");
      message.textContent = `You selected the ${plan} plan ✅`;
      Object.assign(message.style, {
        position: "fixed",
        bottom: "24px",
        right: "24px",
        background: "#2563eb",
        color: "#fff",
        padding: "12px 20px",
        borderRadius: "10px",
        boxShadow: "0 4px 10px rgba(0,0,0,0.2)",
        zIndex: "9999",
        opacity: "0",
        transition: "opacity 0.4s ease",
        fontWeight: "500",
      });
      document.body.appendChild(message);
      activeMessage = message;

      requestAnimationFrame(() => (message.style.opacity = "1"));

      // Esperar un segundo y redirigir
      setTimeout(() => {
        window.location.href = "/contact";
      }, 1000);
    });
  });
});
