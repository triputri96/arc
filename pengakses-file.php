<?php
include 'partials/header.php';
include 'partials/navbar.php';
?>
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
            <form action="services/pengakses-file.php" method="post" class="mb-3">
                <div class="mb-2">
                    <div>
                        <label for="fileNameInput" class="d-block">Judul File:</label><br>
                        <div class="d-flex">
                            <input type="text" id="fileNameInput" name="fileNameInput" style="width: 460px;"><br>
                        </div>
                        <label for="textInput" class="d-block mt-2">Isi File:</label><br>
                        <div class="d-flex">
                            <textarea id="textInput" name="textInput" rows="4" cols="50" style="color: black; padding: 10px 0 0 10px;"></textarea><br>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submitWeb" class="btn submit-btn">Save To File</button>
            </form>
        </div>
    </div>
</section>
<!-- <script>
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
</script> -->