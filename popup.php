<!-- Popup content -->
<div id="popup" class="popup">
  <div class="popup-content">
    <span class="close-button" onclick="closePopup()">&times;</span>
    <div class="modal-body">
      <form method="post" enctype="multipart/form-data" action="./uploads.php" id="uploadForm">
        <div class="upload-btn-wrapper mb-3">
          <button class="btn">+</button>
          <input type="file" name="file" />
          <label for="file">Add your attachment</label>
        </div>
        <button type="submit">Upload</button>
      </form>
      <div>
        <h5>List of Attachment</h5>
      </div>
    </div>
  </div>
</div>