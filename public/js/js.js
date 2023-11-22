document.getElementById('image-input').addEventListener('change', function(event) {
    const input = event.target;
    if (input.files && input.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        const imagePreview = document.getElementById('image-preview');
        imagePreview.src = e.target.result;
        document.getElementById('preview-container').style.display = 'block';
      };

      reader.readAsDataURL(input.files[0]);
    }
  });
