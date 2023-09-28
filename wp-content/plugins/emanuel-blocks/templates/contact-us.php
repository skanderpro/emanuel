<div class="popup">
    <div class="popup__body">
        <div class="popup__conten">
            <button class="popup__close btn-close-popup">
                <svg
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <g clip-path="url(#clip0_438_1543)">
                        <path
                                d="M16 14.1146L22.6 7.51465L24.4853 9.39998L17.8853 16L24.4853 22.6L22.6 24.4853L16 17.8853L9.39998 24.4853L7.51465 22.6L14.1146 16L7.51465 9.39998L9.39998 7.51465L16 14.1146Z"
                                fill="#ABACB5"
                        />
                    </g>
                    <defs>
                        <clipPath id="clip0_438_1543">
                            <rect width="32" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
            <div class="popup__title"><?php echo $settings['title_popup'] ?></div>
            <div class="popup__form">
                <div>
                    <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                    <form action="/wp-json/emanuel/v1/contact-us" method="post"  novalidate="novalidate" >
                        <div class="popup__form-item">
                            <p><label class="global-label">Vorname</label><br>
                                <input class="global-input" type="text" placeholder="Vorname" required="" name="vorname">
                            </p>
                        </div>
                        <div class="popup__form-item">
                            <p><label class="global-label">Name</label><br>
                                <input class="global-input" type="text" placeholder="Name" required="" name="name">
                            </p>
                        </div>
                        <div class="popup__form-item">
                            <p><label class="global-label">Firma</label><br>
                                <input class="global-input" type="text" placeholder="Firma" required="" name="firma">
                            </p>
                        </div>
                        <div class="popup__form-item">
                            <p><label class="global-label">E-Mail</label><br>
                                <input class="global-input" type="email" placeholder="E-Mail" required="" name="email">
                            </p>
                        </div>
                        <div class="popup__form-item">
                            <p><label class="global-label">Telefon</label><br>
                                <input class="global-input" type="text" placeholder="Telefon" required="" name="telefon">
                        </div>
                        <div class="popup__form-item">
                            <p><label class="global-label">Kommentarfeld</label><br>
                                <textarea class="global-input" placeholder="Kommentarfeld" required="" name="text"></textarea>
                            </p>
                        </div>
                        <div class="popup__title-btn">
                            <p><button class="global-btn" type="submit">Kontaktieren</button>
                            </p>
                        </div><div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="footer-content">
		<div class="footer-content-left">
			<div class="footer-content-text">
				<?php echo $settings['title'] ?>
			</div>
			<div class="footer-content-label"><?php echo $settings['description'] ?></div>
		</div>
		<div class="footer-content-right">
			<button class="global-btn popup-open"><?php echo $settings['cta_btn_text'] ?></button>
		</div>
	</div>
</div>
