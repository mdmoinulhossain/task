// Function to open the popup
function openPopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
}

// Function to close the popup
function closePopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
}

function displayFileName() {
  const fileInput = document.getElementById("fileInput");
  const fileInputLabel = document.getElementById("fileInputLabel");

  if (fileInput.files.length > 0) {
    fileInputLabel.textContent = fileInput.files[0].name;
  } else {
    fileInputLabel.textContent = "Add your attachment";
  }
}
