document.addEventListener("DOMContentLoaded", function() {
  // Selecciona el contenedor que envuelve todas las páginas del formulario
  const slidePage = document.querySelector(".form-outer form");
  
  // Selecciona todas las páginas individuales del formulario
  const pages = document.querySelectorAll(".form-outer .page");
 
  
  // Selecciona todos los botones de siguiente y previo
  const nextButtons = document.querySelectorAll(".next");
  const prevButtons = document.querySelectorAll(".prev");
  
  // Selecciona los elementos para la barra de progreso
  const progressText = document.querySelectorAll(".step p");
  const progressCheck = document.querySelectorAll(".step .check");
  const bullet = document.querySelectorAll(".step .bullet");
  
  // Selecciona el botón de envío
  const submitBtn = document.querySelector(".submit");

  // Indica la página actual del formulario, inicializada en 0 (la primera página)
  let current = 0;

  // Función para actualizar el progreso visual de la barra de progreso
  const updateProgress = () => {
      bullet.forEach((b, index) => {
          b.classList.toggle("active", index <= current);
      });
      progressCheck.forEach((c, index) => {
          c.classList.toggle("active", index <= current);
      });
      progressText.forEach((p, index) => {
          p.classList.toggle("active", index <= current);
      });
  };

  // Función para mostrar la página especificada por el índice
  const showPage = (pageIndex) => {
      const totalPages = pages.length; 
      if (pageIndex >= 0 && pageIndex < totalPages) { 
          slidePage.style.marginLeft = `-${pageIndex * 100}%`; // Ajusta el margen para mostrar la página correspondiente
          current = pageIndex; // Actualiza la página actual
          updateProgress(); // Actualiza la barra de progreso visual
      }
  };

  // Agrega eventos a todos los botones de siguiente
  nextButtons.forEach(button => {
      button.addEventListener("click", function() {
          if (current < pages.length - 1) { // Verifica que no sea la última página
              showPage(current + 1); // Muestra la siguiente página
          }
      });
  });

  // Agrega eventos a todos los botones de previo
  prevButtons.forEach(button => {
      button.addEventListener("click", function() {
          if (current > 0) { // Verifica que no sea la primera página
              showPage(current - 1); // Muestra la página anterior
          }
      });
  });

  //Desplazar el scroll hasta la parte superior del formulario cada vez que se cambie de página
  
  
  

  // Manejo del botón de envío
 /*
  if (submitBtn) {
      submitBtn.addEventListener("click", function(event) {
          event.preventDefault(); // Previene el envío automático del formulario
          alert("Formulario enviado exitosamente"); // Muestra una alerta          
      });
  } */

  // Inicializa la vista del formulario mostrando la primera página
  showPage(current);
});

