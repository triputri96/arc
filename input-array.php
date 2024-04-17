<?php
include 'partials/header.php';
include 'partials/navbar.php';
?>
<style>
    #outputField {
        max-height: 200px;
        overflow-y: auto;
        padding: 20px 0 10px 20px;
    }
</style>

<section id="inputArraySection" class="h-v-full d-flex align-center justify-content-center">
    <div>
        <h2 class="input-array-title text-center">Ayo Kita Urutkan!</h2>
        <div id="outputField" class="mb-1 overflow-hidden"></div>
        <!-- <form action=""> -->
        <div class="d-flex justify-content-center">
            <div>
                <input type="text" id="content" class="input-form" autofocus onkeypress="onKeyDown(event)">
                <button class="btn submit-btn mb-5" type="submit" onclick=insertContent()>Submit</button>
            </div>
        </div>
        <!-- </form> -->
        <div>
            <div class="d-flex justify-content-center">
                <div>
                    <button class="btn sorting-btn" onclick="sortOutput(true)">ASC</button>
                    <button class="btn sorting-btn" onclick="sortOutput(false)">DESC</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'partials/script.php';
?>