<?php
include 'partials/header.php';
include 'partials/navbar.php';

?>
<!-- <h2>File Access</h2>

<div>
    <label for="textInput">Text Content:</label><br>
    <textarea id="textInput" rows="4" cols="50"></textarea><br>
    <label for="fileNameInput">File Name:</label><br>
    <input type="text" id="fileNameInput"><br>
    <button onclick="saveToFile()">Save to File</button>
</div>

<div>
    <input type="file" id="fileInput"><br>
    <button onclick="readFile()">Read File Content</button>
</div>

<div id="fileContent"></div> -->

<!-- <script>
  // function saveToFile() {
  //     var textContent = document.getElementById('textInput').value;
  //     var fileName = document.getElementById('fileNameInput').value;

  //     var blob = new Blob([textContent], {
  //         type: 'text/plain'
  //     });
  //     var link = document.createElement('a');
  //     link.href = window.URL.createObjectURL(blob);
  //     link.download = fileName;
  //     link.click();
  // }

  function readFile() {
    var fileInput = document.getElementById('fileInput');
    var file = fileInput.files[0];

    var reader = new FileReader();
    reader.onload = function(event) {
      var fileContent = event.target.result;
      document.getElementById('fileContent').innerText = fileContent;
    };
    reader.readAsText(file);
  }
</script> -->


<section class="h-v-full d-flex align-center justify-content-center">
    <div class="d-flex w-100">
        <div class="col-6">
            <form action="services/pengakses-file.php" method="post" enctype="multipart/form-data">
                <div class="mb-2">
                    <label for="file" class="d-block mb-1">Input File Anda</label>
                    <div class="d-flex">
                        <input type="file" name="file" id="file" class="input-form col-6">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn submit-btn">Submit</button>
            </form>
        </div>
        <div class="col-6">
            <!-- <form action="services/pengakses-file.php" method="post" enctype="multipart/form-data" class="mb-3"> -->
            <div class="mb-2">
                <div>
                    <label for="fileNameInput" class="d-block ">File Name:</label><br>
                    <div class="d-flex">
                        <input type="text" id="fileNameInput" style="width: 460px;"><br>
                    </div>
                    <label for="textInput" class="d-block mt-2">Text Content:</label><br>
                    <div class="d-flex">
                        <textarea id="textInput" rows="4" cols="50"
                            style="color: black; padding: 10px 0 0 10px;"></textarea><br>
                    </div>
                    <!-- <button onclick="saveToFile()">Save to File</button> -->
                </div>
                <!-- <label for="websiteLink" class="d-block mb-1">Input Link Website</label>
                <div class="d-flex">
                    <input type="text" name="website-link" id="websiteLink" class="input-form col-6">
                </div> -->
            </div>
            <button type="submit" onclick="saveToFile()" name="submitWeb" class="btn submit-btn  ">Save To
                File</button>
            <!-- </form> -->
            <!-- <span>Tampilan Website</span>
      <div id="websiteUi" class="overflow-hidden"></div> -->
        </div>
    </div>
</section>
<script>
function saveToFile() {
    var textContent = document.getElementById('textInput').value;
    var fileName = document.getElementById('fileNameInput').value;

    var blob = new Blob([textContent], {
        type: 'text/plain'
    });
    var link = document.createElement('a');
    link.href = window.URL.createObjectURL(blob);
    link.download = fileName;
    link.click();
}

function readFile() {
    var fileInput = document.getElementById('fileInput');
    var file = fileInput.files[0];

    var reader = new FileReader();
    reader.onload = function(event) {
        var fileContent = event.target.result;
        document.getElementById('fileContent').innerText = fileContent;
    };
    reader.readAsText(file);
}
</script>