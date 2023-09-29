<section class="form">
    <div class="container">
        <div class="form__inner">
            <div class="form-title">
                <h1><?php echo $settings['title']; ?></h1>
            </div>
            <div class="form-subtitle">Persönliche Angaben</div>
            <form action="/wp-json/emanuel/v1/send-formular" method="post" enctype="multipart/form-data">
                <div class="form-gender">
                    <div class="global-label">Geschlecht</div>
                    <div class="form-gender-checkbox">
                        <div class="global-checkbox">
                            <input
                                    type="radio"
                                    class="checkoption"
                                    id="Masculine"
                                    name="gender"
                                    value="männlich"
                                    checked
                            />
                            <label for="Masculine">Männlich</label>
                        </div>
                        <div class="global-checkbox">
                            <input
                                    name="gender"
                                    type="radio"
                                    class="checkoption"
                                    value="weiblich"
                                    id="Feminine"
                            />
                            <label for="Feminine">Weiblich</label>
                        </div>
                        <div class="global-checkbox">
                            <input type="radio" class="checkoption" id="Divers" name="gender" value="divers" />
                            <label for="Divers">Divers</label>
                        </div>
                    </div>
                </div>
                <div class="form-inputs">
                    <div class="form-inputs-col">
                        <div class="form-inputs-col-item">
                            <label class="global-label" for="">Vorname</label>
                            <input
                                    name="vorname"
                                    class="global-input"
                                    type="text"
                                    placeholder="Vorname "

                            />
                        </div>
                        <div class="form-inputs-col-item">
                            <label class="global-label" for="">Geburtsdatum</label>
                            <div class="form-inputs-col-item-inner">
                                <input
                                        name="date_d"
                                        class="global-input"
                                        type="text"
                                        placeholder="DD"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="2"
                                />
                                <input
                                        class="global-input"
                                        type="text"
                                        name="date_m"
                                        placeholder="MM"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="2"
                                />
                                <input
                                        class="global-input"
                                        type="text"
                                        name="date_y"
                                        placeholder="YYYY"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="4"
                                />
                            </div>
                        </div>
                        <div class="form-inputs-col-item">
                            <label class="global-label" for=""
                            >Strasse und Hausnummer</label
                            >
                            <input
                                    class="global-input"
                                    type="text"
                                    name="address"
                                    placeholder="Strasse und Hausnummer"
                            />
                        </div>
                        <div class="form-inputs-col-item">
                            <label class="global-label" for="">Telefonnummer</label>
                            <input
                                    class="global-input"
                                    type="tel"
                                    name="phone"
                                    placeholder="Telefonnummer"
                            />
                        </div>
                    </div>
                    <div class="form-inputs-col">
                        <div class="form-inputs-col-item">
                            <label class="global-label" for="">Nachname</label>
                            <input
                                    class="global-input"
                                    type="text"
                                    placeholder="Nachname"
                                    name="nachname"
                            />
                        </div>
                        <div class="form-inputs-col-item">
                            <label class="global-label" for="">Nationalität</label>
                            <input
                                    class="global-input"
                                    type="text"
                                    placeholder="Nationalität"
                                    name="national"
                            />
                        </div>
                        <div class="form-inputs-col-item">
                            <label class="global-label" for="">Postleitzahl und Ort</label>
                            <input
                                    class="global-input"
                                    type="text"
                                    placeholder="Postleitzahl und Ort"
                                    name="post"
                            />
                        </div>
                        <div class="form-inputs-col-item">
                            <label class="global-label" for="">E-Mail</label>
                            <input
                                    class="global-input"
                                    type="email"
                                    placeholder="E-Mail"
                                    name="email"
                            />
                        </div>
                    </div>
                </div>
                <div class="form-textarea">
                    <label class="global-label" for="">Ihre Mitteilung</label>
                    <textarea
                            class="global-textarea"
                            placeholder="Ihre Mitteilung"
                            name="description"
                    ></textarea>
                </div>

                <div class="form-upload">
                    <div class="form-upload-title">Dokumente</div>
                    <div class="form-upload-subtitle">
                        Dokumente als PDF oder JPG. Die maximale Grösse beträgt 20
                        MB.
                    </div>
                    <div class="form-upload-box">
                        <div class="form-upload-item">
                            <label for="cv">
                                <div class="form-upload-item-title">Lebenslauf</div>
                                <div class="form-upload-item-subtitle">
                                    <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/icon/attachments.svg" alt="" />
                                    Datei auswählen
                                </div>
                                <input id="cv" type="file" name="cv" />
                            </label>
                        </div>
                        <div class="form-upload-item">
                            <label for="job-references">
                                <div class="form-upload-item-title">
                                    Arbeitszeugnisse/Schulzeugnisse
                                </div>
                                <div class="form-upload-item-subtitle">
                                    <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/icon/attachments.svg" alt="" />
                                    Datei auswählen
                                </div>
                                <input id="job-references" type="file" name="job-references" />
                            </label>
                        </div>
                        <div class="form-upload-item">
                            <label for="motivation-letter">
                                <div class="form-upload-item-title">
                                    Motivationsschreiben
                                </div>
                                <div class="form-upload-item-subtitle">
                                    <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/icon/attachments.svg" alt="" />
                                    Datei auswählen
                                </div>
                                <input id="motivation-letter" type="file" name="motivation-letter" />
                            </label>
                        </div>
                        <div class="form-upload-item">
                            <label for="diplomas">
                                <div class="form-upload-item-title">Diplome</div>
                                <div class="form-upload-item-subtitle">
                                    <img src="<?php echo EMANUEL_ASSETS_URL; ?>img/icon/attachments.svg" alt="" />
                                    Datei auswählen
                                </div>
                                <input id="diplomas" type="file" name="diplomas" />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-send">
                    <button class="global-btn" type="submit">Senden</button>
                </div>
            </form>
        </div>
    </div>
</section>