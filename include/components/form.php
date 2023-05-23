<form action="password.php" method="GET" class="border rounded p-3">
    <div>
        la lunghezza massima è: <?php echo (isset($_GET['radioValue']) && $_GET['radioValue'] == 'si') ? $lunghezzaPass : $lunghezzaFiltrata ?>
    </div>

<div class="row">

    <div class="col-4 d-flex flex-column gap-5">
        <label for="">lunghezza password</label>
        <label for="">ripetizione caratteri?</label>
        <label for="">consenti solo:</label>
    </div>

    <div class="col-6 d-flex flex-column gap-5">


        <!-- input per lunghezza password -->
        <div>
            <input type="number" placeholder="inserisci numero" name="lunghezzaCaratteri">
        </div>

        <!-- bottoni per ripetizione -->
        <div>

            <div class="form-check mt-5">
                <input value="si" class="form-check-input" type="radio" name="radioValue" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    si
                </label>
            </div>
            <div class="form-check">
                <input value="no" class="form-check-input" type="radio" name="radioValue" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    no
                </label>
            </div>
        </div>

        <!-- bottoni scelta multipla -->
        <div>
            <div class="form-check">
                    <input name="checkLettere" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        lettere
                    </label>
                </div>
                <div class="form-check">
                    <input name="checkNumeri" class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        numeri
                    </label>
                </div>
                <div class="form-check">
                    <input name="checkSimboli" class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        simboli
                    </label>
                </div>
        </div>

        
    </div>
    
</div>
<button type="submit" class="btn btn-primary">genera password</button>
<button type="reset" class="btn btn-secondary">annulla</button>

</form>