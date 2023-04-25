<section class="office-location">
    <div class="container">
        <div class="office-location__inner">
            <div class="office-location-title">
                <h2><?php echo $settings['title'] ?></h2>
            </div>
            <div class="office-location-list">
                <ul>
	                <?php
	                foreach ( $settings['items'] as $item ) {
	                ?>
                        <li>
                            <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                            >
                                <g clip-path="url(#clip0_365_2302)">
                                    <path
                                            d="M18.364 17.3639L12 23.7279L5.636 17.3639C4.37734 16.1052 3.52019 14.5016 3.17293 12.7558C2.82567 11.0099 3.00391 9.20035 3.6851 7.55582C4.36629 5.91129 5.51984 4.50569 6.99988 3.51677C8.47992 2.52784 10.22 2 12 2C13.78 2 15.5201 2.52784 17.0001 3.51677C18.4802 4.50569 19.6337 5.91129 20.3149 7.55582C20.9961 9.20035 21.1743 11.0099 20.8271 12.7558C20.4798 14.5016 19.6227 16.1052 18.364 17.3639ZM12 12.9999C12.5304 12.9999 13.0391 12.7892 13.4142 12.4141C13.7893 12.0391 14 11.5304 14 10.9999C14 10.4695 13.7893 9.96078 13.4142 9.58571C13.0391 9.21064 12.5304 8.99992 12 8.99992C11.4696 8.99992 10.9609 9.21064 10.5858 9.58571C10.2107 9.96078 10 10.4695 10 10.9999C10 11.5304 10.2107 12.0391 10.5858 12.4141C10.9609 12.7892 11.4696 12.9999 12 12.9999Z"
                                            fill="#BCAF87"
                                    />
                                </g>
                                <defs>
                                    <clipPath id="clip0_365_2302">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <?php echo $item['title']; ?>
                        </li>
		                <?php
	                }
	                ?>
                </ul>
            </div>
        </div>
    </div>
</section>