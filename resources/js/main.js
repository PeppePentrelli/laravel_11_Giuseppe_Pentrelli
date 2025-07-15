document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById('themeToggle');
    const bodyCustom = document.querySelector('.bodyCustom');
    const navbar = document.querySelector('.navbar');
    const footerCustom = document.querySelector('.footerCustom');
    const btnDonazione = document.querySelector('.btn-donazione');
    const btnTornaSu = document.querySelectorAll('.btn-torna-su');
    const footerLink = document.querySelectorAll('.footerLink');
    const btnCustom = document.querySelectorAll('.btnCustom');
    const logoImgs = document.querySelectorAll('.Logo');
    const logoImgs2 = document.querySelectorAll('.Logo2');
    const imgIntroduzione = document.querySelector('.imgIntroduzione');
    const fieldsets = document.querySelectorAll('.fieldset-switch');
    const timeline = document.querySelector('.timeline');
    const timelineItems = document.querySelectorAll('.timeline-item');
    const fleshContacts = document.querySelectorAll('.FleshContact');
    const profileCard = document.querySelector('.profile-card');
    const infoChips = document.querySelectorAll('.info-chip');
    const storyItems = document.querySelectorAll('.story-item');
    const profileImage = document.querySelector('.profile-image');
    const verticalNav = document.querySelector('.vertical-nav');
    const forgotLink = document.querySelector('.forgot-link');
    const customCard = document.querySelectorAll('.custom-card');
    const btnCard = document.querySelectorAll('.btn-card');
    const testimonialCards = document.querySelectorAll('.testimonial');
    const testimonialProfileImageWrapper = document.querySelectorAll('.testimonialProfileImageWrapper');
    const postLink = document.querySelectorAll('.post-link');
    const registerIcons = document.querySelectorAll('.register-icon');



    if (!themeToggle || !bodyCustom || !navbar || !btnDonazione || !btnTornaSu) {
        console.error("Elementi mancanti");
        return;
    }

    const savedTheme = localStorage.getItem('theme');
    themeToggle.checked = savedTheme === 'light';

    function updateTheme() {
        if (themeToggle.checked) {
            // Tema LIGHT
            bodyCustom.classList.add('bg-theme-light');
            bodyCustom.classList.remove('bg-theme-dark');

            footerCustom.classList.add('footer-dark');
            footerCustom.classList.remove('footer-light');

            navbar.classList.add('bg-theme-dark', 'nav-dark');
            navbar.classList.remove('bg-theme-light', 'nav-light');

            logoImgs.forEach(img => img.src = "/media/LogoNavLight.png");
            logoImgs2.forEach(img => img.src = "/media/LogoNavDark.PNG");

            footerLink.forEach(link => {
                link.classList.add('footerLink-light');
                link.classList.remove('footerLink');
            });

            btnDonazione.classList.add('btn-dark-theme');

            btnTornaSu.forEach(btnTornaSu => {
                btnTornaSu.classList.remove('btn-torna-su-light');
                btnTornaSu.classList.add('btn-torna-su-dark');
            });

            if (verticalNav) {

                verticalNav.classList.add('vertical-nav-dark');
                verticalNav.classList.remove('vertical-nav-light');
            }

            btnCustom.forEach(btn => {
                btn.classList.add('btnCustom-light-theme');
                btn.classList.remove('btnCustom-dark-theme');
            });

            fieldsets.forEach(fs => fs.classList.remove('fieldset-light-theme'));

            if (imgIntroduzione) {
                imgIntroduzione.classList.remove('imgIntroduzioneBorderLight');
                imgIntroduzione.classList.add('imgIntroduzioneBorderDark');
            }

            if (timeline) {
                timeline.classList.remove('timelineDark');
                timeline.classList.add('timelineLight');
            }

            timelineItems.forEach(item => {
                item.classList.remove('timeline-itemDark');
                item.classList.add('timeline-itemLight');
            });

            fleshContacts.forEach(fc => {
                fc.classList.add('FleshContact-light');
                fc.classList.remove('FleshContact-dark');
            });

            if (profileCard) {
                profileCard.classList.add('theme-light');
                profileCard.classList.remove('theme-dark');
            }
            if (forgotLink) {
                forgotLink.classList.add('forgot-link-light');
                forgotLink.classList.remove('forgot-link-dark');
            }

            infoChips.forEach(chip => {
                chip.classList.add('chip-light');
                chip.classList.remove('chip-dark');
            });

            storyItems.forEach(item => {
                item.classList.add('story-item-light');
                item.classList.remove('story-item-dark');
            });

            if (profileImage) {
                profileImage.classList.add('profile-image-dark');
                profileImage.classList.remove('profile-image-light');
            }

            testimonialProfileImageWrapper.forEach(wrapper => {
                wrapper.classList.add('testimonialProfileImageWrapper-dark');
                wrapper.classList.remove('testimonialProfileImageWrapper-light');
            });

            customCard.forEach(card => {
                card.classList.add('custom-card-light');
                card.classList.remove('custom-card-dark');
            });

            btnCard.forEach(btncard => {
                btncard.classList.add('btn-card-light');
                btncard.classList.remove('btn-card-dark');
            });

            testimonialCards.forEach(cardTestimonial => {
                cardTestimonial.classList.remove('testimonial-light');
                cardTestimonial.classList.add('testimonial-dark');
            });

            postLink.forEach(link => {
                link.classList.remove('post-link-light');
                link.classList.add('post-link-dark');
            });

            registerIcons.forEach(icon => {

                icon.classList.remove('icon-light-theme');
                icon.classList.add('icon-dark-theme');


            });


            localStorage.setItem('theme', 'light');
        } else {
            // Tema DARK
            bodyCustom.classList.add('bg-theme-dark');
            bodyCustom.classList.remove('bg-theme-light');

            navbar.classList.add('bg-theme-light', 'nav-light');
            navbar.classList.remove('bg-theme-dark', 'nav-dark');

            footerCustom.classList.add('footer-light');
            footerCustom.classList.remove('footer-dark');

            logoImgs.forEach(img => img.src = "/media/LogoNavDark.png");
            logoImgs2.forEach(img => img.src = "/media/LogoNavLight.png");

            footerLink.forEach(link => {
                link.classList.add('footerLink');
                link.classList.remove('footerLink-light');
            });

            btnDonazione.classList.remove('btn-dark-theme');

                        btnTornaSu.forEach(btnTornaSu => {
                btnTornaSu.classList.remove('btn-torna-su-dark');
                btnTornaSu.classList.add('btn-torna-su-light');
            });

            if (verticalNav) {
                verticalNav.classList.remove('vertical-nav-dark');
                verticalNav.classList.add('vertical-nav-light');
            }

            btnCustom.forEach(btn => {
                btn.classList.add('btnCustom-dark-theme');
                btn.classList.remove('btnCustom-light-theme');
            });

            fieldsets.forEach(fs => fs.classList.add('fieldset-light-theme'));

            if (imgIntroduzione) {
                imgIntroduzione.classList.remove('imgIntroduzioneBorderDark');
                imgIntroduzione.classList.add('imgIntroduzioneBorderLight');
            }

            if (timeline) {
                timeline.classList.remove('timelineLight');
                timeline.classList.add('timelineDark');
            }

            timelineItems.forEach(item => {
                item.classList.remove('timeline-itemLight');
                item.classList.add('timeline-itemDark');
            });

            fleshContacts.forEach(fc => {
                fc.classList.add('FleshContact-dark');
                fc.classList.remove('FleshContact-light');
            });

            if (profileCard) {
                profileCard.classList.add('theme-dark');
                profileCard.classList.remove('theme-light');
            }
            if (forgotLink) {
                forgotLink.classList.add('forgot-link-dark');
                forgotLink.classList.remove('forgot-link-light');
            }

            infoChips.forEach(chip => {
                chip.classList.add('chip-dark');
                chip.classList.remove('chip-light');
            });

            storyItems.forEach(item => {
                item.classList.add('story-item-dark');
                item.classList.remove('story-item-light');
            });

            if (profileImage) {
                profileImage.classList.add('profile-image-light');
                profileImage.classList.remove('profile-image-dark');
            }


            customCard.forEach(card => {
                card.classList.add('custom-card-dark');
                card.classList.remove('custom-card-light');
            });


            btnCard.forEach(btncard => {
                btncard.classList.remove('btn-card-light');
                btncard.classList.add('btn-card-dark');
            });

            testimonialCards.forEach(cardTestimonial => {
                cardTestimonial.classList.add('testimonial-light');
                cardTestimonial.classList.remove('testimonial-dark');
            });

            testimonialProfileImageWrapper.forEach(wrapper => {
                wrapper.classList.remove('testimonialProfileImageWrapper-dark');
                wrapper.classList.add('testimonialProfileImageWrapper-light');
            });

            postLink.forEach(link => {
                link.classList.add('post-link-light');
                link.classList.remove('post-link-dark');
            });

            registerIcons.forEach(icon => {

                icon.classList.add('icon-light-theme');
                icon.classList.remove('icon-dark-theme');


            });

            localStorage.setItem('theme', 'dark');
        }
    }

    updateTheme();

    themeToggle.addEventListener('change', updateTheme);
});


document.querySelectorAll('.toggle-password').forEach(button => {
    button.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');
        const input = document.getElementById(targetId);
        const icon = this.querySelector('i');

        if (input && input.type === 'password') {
            input.type = 'text';
            if (icon) {
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        } else if (input && input.type === 'text') {
            input.type = 'password';
            if (icon) {
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            }
        }
    });
});

