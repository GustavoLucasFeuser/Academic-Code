document.getElementById('photoInput').addEventListener('change', function (event) {
  const file = event.target.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function (e) {
      const photoPreview = document.getElementById('photoPreview');
      photoPreview.src = e.target.result; // Define a imagem selecionada
      photoPreview.classList.remove('default'); // Remove o fundo cinza
    };

    reader.readAsDataURL(file);
  }
});