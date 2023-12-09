<!-- Popup content -->
<div id="popup" class="popup">
  <div class="popup-content">
    <span class="close-button" onclick="closePopup()">&times;</span>
    <div class="modal-body">
      <form class="input-file-form" method="post" enctype="multipart/form-data" action="./uploads.php" id="uploadForm">
        <div class="upload-btn-wrapper mb-3">
          <button class="btn">+</button>
          <input type="file" name="file" id="fileInput" onchange="displayFileName()" />
          <label for="file" id="fileInputLabel">Add your attachment</label>
        </div>
        <button type="submit" class="submit-btn">Submit</button>
      </form>
      <div>
        <h5 style="margin-bottom: 10px;">List of Attachment</h5>
        <?php
        include "./db-conn.php";
        $fileList = "SELECT `id`, `filename` FROM `files` WHERE 1";
        $displayQuery = mysqli_query($conn, $fileList);
        $sequentialNumber = 1;
        if (mysqli_num_rows($displayQuery) > 0) {
          while ($row = mysqli_fetch_assoc($displayQuery)) {
            $file = $row['filename'];
            echo '<ul><li>' . $sequentialNumber . '. ' . $file . '</li></ul>';
            $sequentialNumber++;
          }
        } ?>
      </div>
    </div>
  </div>
</div>